<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * PeriodeElp
 */
class PeriodeElp
{
    /**
     * @var string
     */
    private $codPel;

    /**
     * @var string
     */
    private $libPel;

    /**
     * @var string
     */
    private $licPel;

    /**
     * @var string
     */
    private $temEnSvePel = 'O';


    /**
     * Get codPel.
     *
     * @return string
     */
    public function getCodPel()
    {
        return $this->codPel;
    }

    /**
     * Set libPel.
     *
     * @param string $libPel
     *
     * @return PeriodeElp
     */
    public function setLibPel($libPel)
    {
        $this->libPel = $libPel;

        return $this;
    }

    /**
     * Get libPel.
     *
     * @return string
     */
    public function getLibPel()
    {
        return $this->libPel;
    }

    /**
     * Set licPel.
     *
     * @param string $licPel
     *
     * @return PeriodeElp
     */
    public function setLicPel($licPel)
    {
        $this->licPel = $licPel;

        return $this;
    }

    /**
     * Get licPel.
     *
     * @return string
     */
    public function getLicPel()
    {
        return $this->licPel;
    }

    /**
     * Set temEnSvePel.
     *
     * @param string $temEnSvePel
     *
     * @return PeriodeElp
     */
    public function setTemEnSvePel($temEnSvePel)
    {
        $this->temEnSvePel = $temEnSvePel;

        return $this;
    }

    /**
     * Get temEnSvePel.
     *
     * @return string
     */
    public function getTemEnSvePel()
    {
        return $this->temEnSvePel;
    }
}
