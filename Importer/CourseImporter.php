<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Importer;


use Symfony\Bridge\Doctrine\RegistryInterface;
use UniceSIL\SyllabusApogeeImporterBundle\Adapter\CourseAdapter;
use UniceSIL\SyllabusApogeeImporterBundle\Entity\ElementPedagogi;
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
     * CourseImporter constructor.
     * @param array $config
     * @param RegistryInterface $doctrine
     */
    public function __construct(array $config, RegistryInterface $doctrine)
    {
        $this->config = $config;
        $this->doctrine = $doctrine;
    }

    /**
     * @return CourseCollection
     */
    public function execute(): CourseCollection
    {
        $em = $this->doctrine->getManager($this->config['em']);
        $courses = new CourseCollection();
        foreach ($em->getRepository(ElementPedagogi::class)->findLeafByNatures($this->config['course']['types']) as $elp){
            $courseParents = new CourseCollection();
            foreach ($em->getRepository(ElementPedagogi::class)->findParents($elp->getCodElp(), $this->config['course']['types']) as $elpParent){
                $courseParent = new CourseAdapter($elpParent);
                $courseParents->append($courseParent);
            }
            $course = new CourseAdapter($elp);
            $course->setParents($courseParents);
            $courses->append($course);
        }
        return $courses;
    }
}