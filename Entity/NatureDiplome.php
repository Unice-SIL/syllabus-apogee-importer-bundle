<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * NatureDiplome
 */
class NatureDiplome
{
    /**
     * @var string
     */
    private $codNdi;

    /**
     * @var bool
     */
    private $codPriNdi;

    /**
     * @var string
     */
    private $libNdi;

    /**
     * @var string
     */
    private $licNdi;

    /**
     * @var string
     */
    private $temEnSveNdi = 'O';

    /**
     * @var string
     */
    private $temDel = 'O';


    /**
     * Get codNdi.
     *
     * @return string
     */
    public function getCodNdi()
    {
        return $this->codNdi;
    }

    /**
     * Set codPriNdi.
     *
     * @param bool $codPriNdi
     *
     * @return NatureDiplome
     */
    public function setCodPriNdi($codPriNdi)
    {
        $this->codPriNdi = $codPriNdi;

        return $this;
    }

    /**
     * Get codPriNdi.
     *
     * @return bool
     */
    public function getCodPriNdi()
    {
        return $this->codPriNdi;
    }

    /**
     * Set libNdi.
     *
     * @param string $libNdi
     *
     * @return NatureDiplome
     */
    public function setLibNdi($libNdi)
    {
        $this->libNdi = $libNdi;

        return $this;
    }

    /**
     * Get libNdi.
     *
     * @return string
     */
    public function getLibNdi()
    {
        return $this->libNdi;
    }

    /**
     * Set licNdi.
     *
     * @param string $licNdi
     *
     * @return NatureDiplome
     */
    public function setLicNdi($licNdi)
    {
        $this->licNdi = $licNdi;

        return $this;
    }

    /**
     * Get licNdi.
     *
     * @return string
     */
    public function getLicNdi()
    {
        return $this->licNdi;
    }

    /**
     * Set temEnSveNdi.
     *
     * @param string $temEnSveNdi
     *
     * @return NatureDiplome
     */
    public function setTemEnSveNdi($temEnSveNdi)
    {
        $this->temEnSveNdi = $temEnSveNdi;

        return $this;
    }

    /**
     * Get temEnSveNdi.
     *
     * @return string
     */
    public function getTemEnSveNdi()
    {
        return $this->temEnSveNdi;
    }

    /**
     * Set temDel.
     *
     * @param string $temDel
     *
     * @return NatureDiplome
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
