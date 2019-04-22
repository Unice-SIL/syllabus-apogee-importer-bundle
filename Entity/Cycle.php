<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * Cycle
 */
class Cycle
{
    /**
     * @var string
     */
    private $codCyc;

    /**
     * @var string
     */
    private $libCyc;

    /**
     * @var string
     */
    private $temEnSveCyc = 'O';

    /**
     * @var string
     */
    private $temDel = 'O';


    /**
     * Get codCyc.
     *
     * @return string
     */
    public function getCodCyc()
    {
        return $this->codCyc;
    }

    /**
     * Set libCyc.
     *
     * @param string $libCyc
     *
     * @return Cycle
     */
    public function setLibCyc($libCyc)
    {
        $this->libCyc = $libCyc;

        return $this;
    }

    /**
     * Get libCyc.
     *
     * @return string
     */
    public function getLibCyc()
    {
        return $this->libCyc;
    }

    /**
     * Set temEnSveCyc.
     *
     * @param string $temEnSveCyc
     *
     * @return Cycle
     */
    public function setTemEnSveCyc($temEnSveCyc)
    {
        $this->temEnSveCyc = $temEnSveCyc;

        return $this;
    }

    /**
     * Get temEnSveCyc.
     *
     * @return string
     */
    public function getTemEnSveCyc()
    {
        return $this->temEnSveCyc;
    }

    /**
     * Set temDel.
     *
     * @param string $temDel
     *
     * @return Cycle
     */
    public function setTemDel($temDel)
    {
        $this->temDel = $temDel;

        return $this;
    }

    /**
     * Get temDel.
     *
     * @return string
     */
    public function getTemDel()
    {
        return $this->temDel;
    }
}
