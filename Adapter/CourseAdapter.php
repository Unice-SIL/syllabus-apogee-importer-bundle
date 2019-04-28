<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Adapter;

use UniceSIL\SyllabusApogeeImporterBundle\Entity\ElementPedagogi;
use UniceSIL\SyllabusImporterToolkit\Course\CourseCollection;
use UniceSIL\SyllabusImporterToolkit\Course\CourseInfoCollection;
use UniceSIL\SyllabusImporterToolkit\Course\CourseInterface;

/**
 * Class CourseAdapter
 * @package UniceSIL\SyllabusApogeeImporterBundle\Adapter
 */
class CourseAdapter implements CourseInterface
{
    /**
     * @var string
     */
    private $etbId;

    /**
     * @var string
     */
    private $type;

    /**
     * @var CourseCollection
     */
    private $parents;

    /**
     * @var CourseInfoCollection
     */
    private $courseInfos;

    /**
     * CourseAdapter constructor.
     * @param ElementPedagogi $elp
     */
    public function __construct(ElementPedagogi $elp)
    {
        $this->etbId = $elp->getCodElp();
        $this->type = $elp->getCodNel()->getCodNel();
        $this->parents = new CourseCollection();
        $this->courseInfos = new CourseInfoCollection();
    }

    /**
     * @return string
     */
    public function getEtbId(): string
    {
        return $this->etbId;
    }

    /**
     * @param string $etbId
     * @return CourseAdapter
     */
    public function setEtbId(string $etbId): CourseAdapter
    {
        $this->etbId = $etbId;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return CourseAdapter
     */
    public function setType(string $type): CourseAdapter
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return CourseCollection
     */
    public function getParents(): CourseCollection
    {
        return $this->parents;
    }

    /**
     * @param CourseCollection $parents
     * @return CourseAdapter
     */
    public function setParents(CourseCollection $parents): CourseAdapter
    {
        $this->parents = $parents;

        return $this;
    }

    /**
     * @return CourseInfoCollection
     */
    public function getCourseInfos(): CourseInfoCollection
    {
        return $this->courseInfos;
    }

    /**
     * @param CourseInfoCollection $courseInfos
     * @return CourseAdapter
     */
    public function setCourseInfos(CourseInfoCollection $courseInfos): CourseAdapter
    {
        $this->courseInfos = $courseInfos;

        return $this;
    }

    /**
     * If return true, create the course if does not already exist in Syllabus database
     * @return bool
     */
    public function createIfNotExist(): bool
    {
        return true;
    }
}