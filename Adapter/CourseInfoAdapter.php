<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Adapter;

use UniceSIL\SyllabusApogeeImporterBundle\Entity\ElementPedagogi;
use UniceSIL\SyllabusImporterToolkit\Course\CourseInfoInterface;

/**
 * Class CourseInfoAdapter
 * @package UniceSIL\SyllabusApogeeImporterBundle\Adapter
 */
class CourseInfoAdapter implements CourseInfoInterface
{
    /**
     * @var string
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
     * @var null|int
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
     * CourseInfoAdapter constructor.
     * @param ElementPedagogi $elp
     */
    public function __construct(ElementPedagogi $elp)
    {
        $this->structureId = $elp->getCodCmp()->getCodCmp();
        $this->title = $elp->getLibElp();
        $this->ects = $elp->getNbrCrdElp();
    }

    /**
     * @return string
     */
    public function getYearId(): string
    {
        return $this->yearId;
    }

    /**
     * @param null|string $yearId
     * @return CourseInfoAdapter
     */
    public function setYearId($yearId)
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
     * @return CourseInfoAdapter
     */
    public function setStructureId(string $structureId): CourseInfoAdapter
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
     * @return CourseInfoAdapter
     */
    public function setTitle(string $title): CourseInfoAdapter
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getEcts(): ?int
    {
        return $this->ects;
    }

    /**
     * @param int|null $ects
     * @return CourseInfoAdapter
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
     * @return CourseInfoAdapter
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
     * @return CourseInfoAdapter
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
     * @return CourseInfoAdapter
     */
    public function setTeachingCmClass($teachingCmClass)
    {
        $this->teachingCmClass = $teachingCmClass;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTeachingTdClass(): ?float
    {
        return $this->teachingTdClass;
    }

    /**
     * @param float|null $teachingTdClass
     * @return CourseInfoAdapter
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
     * @return CourseInfoAdapter
     */
    public function setTeachingTpClass($teachingTpClass)
    {
        $this->teachingTpClass = $teachingTpClass;

        return $this;
    }

}