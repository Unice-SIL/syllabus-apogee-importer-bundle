<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Importer;


use Symfony\Bridge\Doctrine\RegistryInterface;
use UniceSIL\SyllabusApogeeImporterBundle\Adapter\CourseAdapter;
use UniceSIL\SyllabusApogeeImporterBundle\Entity\ElementPedagogi;
use UniceSIL\SyllabusApogeeImporterBundle\Entity\ElpChgTypHeu;
use UniceSIL\SyllabusImporterToolkit\Course\CourseCollection;
use UniceSIL\SyllabusImporterToolkit\Course\CourseImporterInterface;

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
     * @var string
     */
    private $year;

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
     * Set an year could be used to get courses information
     * @param string $year
     * @return mixed
     */
    public function setYear($year)
    {
        $this->year = $year;
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
            $course = $this->elpToCourse($elp);
            // Get elements pedagogiques parents
            $courseParents = new CourseCollection();
            foreach ($this->em->getRepository(ElementPedagogi::class)->findParents($course->getEtbId(), $this->config['course']['types']) as $elpParent){
                $courseParent = $this->elpToCourse($elpParent);
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
     * @return CourseAdapter
     */
    private function elpToCourse(ElementPedagogi $elp): CourseAdapter
    {
        $course = new CourseAdapter($elp);
        $course->setYearId($this->year);
        if(!is_null($course->getYearId())){
            // Get charge elp
            $charges = $this->em->getRepository(ElpChgTypHeu::class)->findBy([
                'codElp' => $course->getEtbId(),
                'codAnu' => $course->getYearId()
            ]);
            foreach ($charges as $charge){
                switch ($charge->getCodTypHeu()->getCodTypHeu()){
                    case 'CM':
                        $course->setTeachingCmClass($charge->getNbrHeuElp());
                        break;
                    case 'TD':
                        $course->setTeachingTdClass($charge->getNbrHeuElp());
                        break;
                    case 'TP':
                        $course->setTeachingTpClass($charge->getNbrHeuElp());
                        break;
                }
            }
        }
        return $course;
    }

}