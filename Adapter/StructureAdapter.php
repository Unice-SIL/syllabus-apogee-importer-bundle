<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Adapter;

use UniceSIL\SyllabusApogeeImporterBundle\Entity\Composante;
use UniceSIL\SyllabusImporterToolkit\Structure\StructureInterface;

/**
 * Class StructureAdapter
 * @package UniceSIL\SyllabusApogeeImporterBundle\Adapter
 */
class StructureAdapter implements StructureInterface
{
    /**
     * @var string
     */
    private $etbId;

    /**
     * @var string
     */
    private $label;

    /**
     * StructureAdapter constructor.
     * @param Composante $composante
     */
    public function __construct(Composante $composante)
    {
        $this->etbId = $composante->getCodCmp();
        $this->label = $composante->getLibCmp();
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
     * @return StructureAdapter
     */
    public function setEtbId(string $etbId): StructureAdapter
    {
        $this->etbId = $etbId;

        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return StructureAdapter
     */
    public function setLabel(string $label): StructureAdapter
    {
        $this->label = $label;

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