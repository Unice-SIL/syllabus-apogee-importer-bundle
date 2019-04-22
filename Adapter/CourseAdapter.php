<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Adapter;

use UniceSIL\SyllabusApogeeImporterBundle\Entity\ElementPedagogi;
use UniceSIL\SyllabusImporterToolkit\Course\CourseCollection;
use UniceSIL\SyllabusImporterToolkit\Course\CourseInterface;

/**
 * Class CourseAdapter
 * @package UniceSIL\SyllabusApogeeImporterBundle\Adapter
 */
class CourseAdapter implements CourseInterface
{
    /**
     * @var ElementPedagogi
     */
    private $elementPedagogi;

    /**
     * @var CourseCollection
     */
    private $parents;

    /**
     * Course constructor.
     * @param ElementPedagogi $elementPedagogi
     * @param CourseCollection $parents
     */
    public function __construct(ElementPedagogi $elementPedagogi)
    {
        $this->elementPedagogi = $elementPedagogi;
        $this->parents = new CourseCollection();
    }

    /**
     * @param CourseCollection $parents
     */
    public function setParents(CourseCollection $parents){

    }

    /**
     * Get course id / code in source repository
     * @return string
     */
    public function getEtbId(): string
    {
        return $this->elementPedagogi->getCodElp();
    }

    /**
     * Get course type
     * @return string
     */
    public function getType(): string
    {
        return $this->elementPedagogi->getCodNel()->getCodNel();
    }

    /**
     * Get courses parents of course
     * @return CourseCollection
     */
    public function getParents(): CourseCollection
    {
        return $this->parents;
    }

    /**
     * Get Structure id
     * @return string
     */
    public function getStructureId(): string
    {
        // TODO: Implement getStructureId() method.
    }

    /**
     * Get course title
     * @return string
     */
    public function getTitle(): string
    {
        return $this->elementPedagogi->getLibElp();
    }

    /**
     * Get course ECTS
     * @return mixed
     */
    public function getEcts(): ?int
    {
        return $this->elementPedagogi->getNbrCrdElp();
    }

    /**
     * If return true, create the course if does not already exist in Syllabus database
     * @return bool
     */
    public function createCourseIfNotExist(): bool
    {
        return true;
    }

    /**
     * Get Year id
     * @return string
     */
    public function getYearId(): string
    {
        return null;
    }
}