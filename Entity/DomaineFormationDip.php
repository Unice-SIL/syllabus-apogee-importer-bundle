<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * DomaineFormationDip
 */
class DomaineFormationDip
{
    /**
     * @var string
     */
    private $codDfd;

    /**
     * @var string
     */
    private $libDfd;

    /**
     * @var string
     */
    private $temEnSveDfd = 'O';

    /**
     * @var string|null
     */
    private $codSisDfd;


    /**
     * Get codDfd.
     *
     * @return string
     */
    public function getCodDfd()
    {
        return $this->codDfd;
    }

    /**
     * Set libDfd.
     *
     * @param string $libDfd
     *
     * @return DomaineFormationDip
     */
    public function setLibDfd($libDfd)
    {
        $this->libDfd = $libDfd;

        return $this;
    }

    /**
     * Get libDfd.
     *
     * @return string
     */
    public function getLibDfd()
    {
        return $this->libDfd;
    }

    /**
     * Set temEnSveDfd.
     *
     * @param string $temEnSveDfd
     *
     * @return DomaineFormationDip
     */
    public function setTemEnSveDfd($temEnSveDfd)
    {
        $this->temEnSveDfd = $temEnSveDfd;

        return $this;
    }

    /**
     * Get temEnSveDfd.
     *
     * @return string
     */
    public function getTemEnSveDfd()
    {
        return $this->temEnSveDfd;
    }

    /**
     * Set codSisDfd.
     *
     * @param string|null $codSisDfd
     *
     * @return DomaineFormationDip
     */
    public function setCodSisDfd($codSisDfd = null)
    {
        $this->codSisDfd = $codSisDfd;

        return $this;
    }

    /**
     * Get codSisDfd.
     *
     * @return string|null
     */
    public function getCodSisDfd()
    {
        return $this->codSisDfd;
    }
}
