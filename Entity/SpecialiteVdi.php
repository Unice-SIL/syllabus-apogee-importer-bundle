<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * SpecialiteVdi
 */
class SpecialiteVdi
{
    /**
     * @var string
     */
    private $codSvd;

    /**
     * @var string
     */
    private $libSvd;

    /**
     * @var string
     */
    private $temEnSveSvd = 'O';


    /**
     * Get codSvd.
     *
     * @return string
     */
    public function getCodSvd()
    {
        return $this->codSvd;
    }

    /**
     * Set libSvd.
     *
     * @param string $libSvd
     *
     * @return SpecialiteVdi
     */
    public function setLibSvd($libSvd)
    {
        $this->libSvd = $libSvd;

        return $this;
    }

    /**
     * Get libSvd.
     *
     * @return string
     */
    public function getLibSvd()
    {
        return $this->libSvd;
    }

    /**
     * Set temEnSveSvd.
     *
     * @param string $temEnSveSvd
     *
     * @return SpecialiteVdi
     */
    public function setTemEnSveSvd($temEnSveSvd)
    {
        $this->temEnSveSvd = $temEnSveSvd;

        return $this;
    }

    /**
     * Get temEnSveSvd.
     *
     * @return string
     */
    public function getTemEnSveSvd()
    {
        return $this->temEnSveSvd;
    }
}
