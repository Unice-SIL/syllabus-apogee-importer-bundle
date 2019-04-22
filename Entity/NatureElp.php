<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * NatureElp
 */
class NatureElp
{
    /**
     * @var string
     */
    private $codNel;

    /**
     * @var string
     */
    private $libNel;

    /**
     * @var string
     */
    private $licNel;

    /**
     * @var string
     */
    private $temEnSveNel = 'O';

    /**
     * @var string
     */
    private $temUe = 'N';

    /**
     * @var string
     */
    private $temSemestre = 'N';

    /**
     * @var string
     */
    private $temFictif = 'N';


    /**
     * Get codNel.
     *
     * @return string
     */
    public function getCodNel()
    {
        return $this->codNel;
    }

    /**
     * Set libNel.
     *
     * @param string $libNel
     *
     * @return NatureElp
     */
    public function setLibNel($libNel)
    {
        $this->libNel = $libNel;

        return $this;
    }

    /**
     * Get libNel.
     *
     * @return string
     */
    public function getLibNel()
    {
        return $this->libNel;
    }

    /**
     * Set licNel.
     *
     * @param string $licNel
     *
     * @return NatureElp
     */
    public function setLicNel($licNel)
    {
        $this->licNel = $licNel;

        return $this;
    }

    /**
     * Get licNel.
     *
     * @return string
     */
    public function getLicNel()
    {
        return $this->licNel;
    }

    /**
     * Set temEnSveNel.
     *
     * @param string $temEnSveNel
     *
     * @return NatureElp
     */
    public function setTemEnSveNel($temEnSveNel)
    {
        $this->temEnSveNel = $temEnSveNel;

        return $this;
    }

    /**
     * Get temEnSveNel.
     *
     * @return string
     */
    public function getTemEnSveNel()
    {
        return $this->temEnSveNel;
    }

    /**
     * Set temUe.
     *
     * @param string $temUe
     *
     * @return NatureElp
     */
    public function setTemUe($temUe)
    {
        $this->temUe = $temUe;

        return $this;
    }

    /**
     * Get temUe.
     *
     * @return string
     */
    public function getTemUe()
    {
        return $this->temUe;
    }

    /**
     * Set temSemestre.
     *
     * @param string $temSemestre
     *
     * @return NatureElp
     */
    public function setTemSemestre($temSemestre)
    {
        $this->temSemestre = $temSemestre;

        return $this;
    }

    /**
     * Get temSemestre.
     *
     * @return string
     */
    public function getTemSemestre()
    {
        return $this->temSemestre;
    }

    /**
     * Set temFictif.
     *
     * @param string $temFictif
     *
     * @return NatureElp
     */
    public function setTemFictif($temFictif)
    {
        $this->temFictif = $temFictif;

        return $this;
    }

    /**
     * Get temFictif.
     *
     * @return string
     */
    public function getTemFictif()
    {
        return $this->temFictif;
    }
}
