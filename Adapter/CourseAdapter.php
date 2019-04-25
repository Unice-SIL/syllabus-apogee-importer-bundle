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
     * @var null|string
     */
    private $yearId;

    /**
     * @var string
     */
    private $structureId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var null|float
     */
    private $ects;

    /**
     * @var null|string
     */
    private $domain;

    /**
     * @var null|string
     */
    private $period;

    /**
     * @var null|float
     */
    private $teachingCmClass;

    /**
     * @var null|float
     */
    private $teachingTdClass;

    /**
     * @var null|float
     */
    private $teachingTpClass;

    /**
     * CourseAdapter constructor.
     */
    public function __construct(ElementPedagogi $elp)
    {
        $this->etbId = $elp->getCodElp();
        $this->type = $elp->getCodNel()->getCodNel();
        $this->structureId = $elp->getCodCmp()->getCodCmp();
        $this->title = $elp->getLibElp();
        $this->ects = $elp->getNbrCrdElp();
        $this->parents = new CourseCollection();
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
     * @return null|string
     */
    public function getYearId(): ?string
    {
        return $this->yearId;
    }

    /**
     * @param $yearId
     * @return CourseAdapter
     */
    public function setYearId($yearId): CourseAdapter
    {
        $this->yearId = $yearId;

        return $this;
    }

    /**
     * @return string
     */
    public function getStructureId(): string
    {
        return $this->structureId;
    }

    /**
     * @param string $structureId
     * @return CourseAdapter
     */
    public function setStructureId(string $structureId): CourseAdapter
    {
        $this->structureId = $structureId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return CourseAdapter
     */
    public function setTitle(string $title): CourseAdapter
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getEcts(): ?int
    {
        return $this->ects;
    }

    /**
     * @param float|null $ects
     * @return CourseAdapter
     */
    public function setEcts($ects)
    {
        $this->ects = $ects;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDomain(): ?string
    {
        return $this->domain;
    }

    /**
     * @param null|string $domain
     * @return CourseAdapter
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPeriod(): ?string
    {
        return $this->period;
    }

    /**
     * @param null|string $period
     * @return CourseAdapter
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTeachingCmClass(): ?float
    {
        return $this->teachingCmClass;
    }

    /**
     * @param float|null $teachingCmClass
     * @return CourseAdapter
     */
    public function setTeachingCmClass($teachingCmClass)
    {
        $this->teachingCmClass = $teachingCmClass;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTeachingTdClass(): float
    {
        return $this->teachingTdClass;
    }

    /**
     * @param float|null $teachingTdClass
     * @return CourseAdapter
     */
    public function setTeachingTdClass($teachingTdClass)
    {
        $this->teachingTdClass = $teachingTdClass;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTeachingTpClass(): ?float
    {
        return $this->teachingTpClass;
    }

    /**
     * @param float|null $teachingTpClass
     * @return CourseAdapter
     */
    public function setTeachingTpClass($teachingTpClass)
    {
        $this->teachingTpClass = $teachingTpClass;

        return $this;
    }

    /**
     * If return true, create the course if does not already exist in Syllabus database
     * @return bool
     */
    public function createCourseIfNotExist(): bool
    {
        return true;
    }
}