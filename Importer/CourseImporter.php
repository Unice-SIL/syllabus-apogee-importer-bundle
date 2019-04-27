<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Importer;


use Symfony\Bridge\Doctrine\RegistryInterface;
use UniceSIL\SyllabusApogeeImporterBundle\Adapter\CourseAdapter;
use UniceSIL\SyllabusApogeeImporterBundle\Adapter\CourseInfoAdapter;
use UniceSIL\SyllabusApogeeImporterBundle\Entity\ElementPedagogi;
use UniceSIL\SyllabusApogeeImporterBundle\Entity\ElpChgTypHeu;
use UniceSIL\SyllabusImporterToolkit\Course\CourseCollection;
use UniceSIL\SyllabusImporterToolkit\Course\CourseImporterInterface;
use UniceSIL\SyllabusImporterToolkit\Course\CourseInfoCollection;

/**
 * Class CourseImporter
 * @package UniceSIL\SyllabusApogeeImporterBundle\Importer
 */
class CourseImporter implements CourseImporterInterface
{
    /**
     * @var array
     */
    private $config;

    /**
     * @var RegistryInterface
     */
    private $doctrine;

    /**
     * @var \Doctrine\Common\Persistence\ObjectManager
     */
    private $em;

    /**
     * @var array
     */
    private $years = [];

    /**
     * CourseImporter constructor.
     * @param array $config
     * @param RegistryInterface $doctrine
     */
    public function __construct(array $config, RegistryInterface $doctrine)
    {
        $this->config = $config;
        $this->doctrine = $doctrine;
        $this->em = $this->doctrine->getManager($this->config['em']);
    }


    /**
     * Set years could be used to get courses information
     * @param array $years
     * @return CourseImporterInterface
     */
    public function setYears(array $years): CourseImporterInterface
    {
        $this->years = $years;
        return $this;
    }

    /**
     * @return CourseCollection
     */
    public function execute(): CourseCollection
    {
        // Init course collection
        $courses = new CourseCollection();
        // Get elements pedagogiques by type
        foreach ($this->em->getRepository(ElementPedagogi::class)->findLeafByNatures($this->config['course']['types']) as $elp){
            // Adapt element pedagogique
            $course = new CourseAdapter($elp);
            // Set course infos
            $course->setCourseInfos($this->getCourseInfos($elp));
            // Get elements pedagogiques parents
            $courseParents = new CourseCollection();
            foreach ($this->em->getRepository(ElementPedagogi::class)->findParents($course->getEtbId(), $this->config['course']['types']) as $elpParent){
                $courseParent = new CourseAdapter($elpParent);
                // Set course parent infos
                $courseParent->setCourseInfos($this->getCourseInfos($elpParent));
                $courseParents->append($courseParent);
            }
            // Set courses parents in course
            $course->setParents($courseParents);
            // Add course to collection
            $courses->append($course);
        }
        return $courses;
    }

    /**
     * @param ElementPedagogi $elp
     * @return CourseInfoCollection
     */
    private function getCourseInfos(ElementPedagogi $elp)
    {
        $courseInfos = new CourseInfoCollection();
        foreach ($this->years as $year){
            try {
                $courseInfo = new CourseInfoAdapter($elp);
                $courseInfo->setYearId($year);
                // Get charge elp
                $charges = $this->em->getRepository(ElpChgTypHeu::class)->findBy(
                    [
                        'codElp' => $elp->getCodElp(),
                        'codAnu' => $year
                    ]
                );
                foreach ($charges as $charge) {
                    switch ($charge->getCodTypHeu()->getCodTypHeu()) {
                        case 'CM':
                            $courseInfo->setTeachingCmClass($charge->getNbrHeuElp());
                            break;
                        case 'TD':
                            $courseInfo->setTeachingTdClass($charge->getNbrHeuElp());
                            break;
                        case 'TP':
                            $courseInfo->setTeachingTpClass($charge->getNbrHeuElp());
                            break;
                    }
                }
                $courseInfos->append($courseInfo);
            }catch (\Exception $e){
                throw $e;
            }
        }
        return $courseInfos;
    }

}