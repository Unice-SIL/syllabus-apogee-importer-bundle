<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * PeriodeAno
 */
class PeriodeAno
{
    /**
     * @var string
     */
    private $codPan;

    /**
     * @var string
     */
    private $libPan;

    /**
     * @var string
     */
    private $temEnSvePan;

    /**
     * Get codPan.
     *
     * @return string
     */
    public function getCodPan()
    {
        return $this->codPan;
    }

    /**
     * Set libPan.
     *
     * @param string $libPan
     *
     * @return PeriodeAno
     */
    public function setLibPan($libPan)
    {
        $this->libPan = $libPan;

        return $this;
    }

    /**
     * Get libPan.
     *
     * @return string
     */
    public function getLibPan()
    {
        return $this->libPan;
    }

    /**
     * Set temEnSvePan.
     *
     * @param string $temEnSvePan
     *
     * @return PeriodeAno
     */
    public function setTemEnSvePan($temEnSvePan)
    {
        $this->temEnSvePan = $temEnSvePan;

        return $this;
    }

    /**
     * Get temEnSvePan.
     *
     * @return string
     */
    public function getTemEnSvePan()
    {
        return $this->temEnSvePan;
    }

}
