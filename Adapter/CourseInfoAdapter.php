<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Adapter;

use UniceSIL\SyllabusApogeeImporterBundle\Entity\ElementPedagogi;
use UniceSIL\SyllabusImporterToolkit\Course\CourseInfoInterface;
use UniceSIL\SyllabusImporterToolkit\Permission\PermissionCollection;
use UniceSIL\SyllabusImporterToolkit\Structure\StructureInterface;

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
     * @var StructureInterface
     */
    private $structure;

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
     * CourseInfoAdapter constructor.
     * @param ElementPedagogi $elp
     */
    public function __construct(ElementPedagogi $elp)
    {
        $this->structure = new StructureAdapter($elp->getCodCmp());
        $this->setTitle($elp->getLibElp());
        $this->setEcts($elp->getNbrCrdElp());
    }

    /**
     * @return string
     */
    public function getYearId(): string
    {
        return $this->yearId;
    }

    /**
     * @param string $yearId
     * @return CourseInfoAdapter
     */
    public function setYearId(string $yearId)
    {
        $this->yearId = $yearId;

        return $this;
    }

    /**
     * @return StructureInterface
     */
    public function getStructure(): StructureInterface
    {
        return $this->structure;
    }

    /**
     * @param StructureInterface $structure
     * @return CourseInfoAdapter
     */
    public function setStructure(StructureInterface $structure): CourseInfoAdapter
    {
        $this->structure = $structure;

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
     * @return float|null
     */
    public function getEcts(): ?float
    {
        return $this->ects;
    }

    /**
     * @param float|null $ects
     * @return CourseInfoAdapter
     */
    public function setEcts($ects)
    {
        if(is_null($ects)) $ects = null;
        if(!is_float($ects)) $ects = floatval($ects);
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
        if(is_null($domain)) $domain = null;
        if(!is_string($domain)) $domain = strval($domain);
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
        if(is_null($period)) $period = null;
        if(!is_string($period)) $period = strval($period);
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
        if(is_null($teachingCmClass)) $teachingCmClass = null;
        if(!is_float($teachingCmClass)) $teachingCmClass = floatval($teachingCmClass);
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
        if(is_null($teachingTdClass)) $teachingTdClass = null;
        if(!is_float($teachingTdClass)) $teachingTdClass = floatval($teachingTdClass);
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
        if(is_null($teachingTpClass)) $teachingTpClass = null;
        if(!is_float($teachingTpClass)) $teachingTpClass = floatval($teachingTpClass);
        $this->teachingTpClass = $teachingTpClass;

        return $this;
    }

    /**
     * @return PermissionCollection
     */
    public function getCoursePermission(): PermissionCollection
    {
        return new PermissionCollection();
    }
}