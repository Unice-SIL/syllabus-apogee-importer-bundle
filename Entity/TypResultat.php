<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * TypResultat
 */
class TypResultat
{
    /**
     * @var string
     */
    private $codTre;

    /**
     * @var string
     */
    private $libTre;

    /**
     * @var string
     */
    private $licTre;

    /**
     * @var string
     */
    private $temAdiTre = 'N';

    /**
     * @var string
     */
    private $temAdoTre = 'N';

    /**
     * @var string
     */
    private $temVdiTre = 'N';

    /**
     * @var string
     */
    private $temVetTre = 'N';

    /**
     * @var string
     */
    private $temElpTre = 'N';

    /**
     * @var string
     */
    private $temEprTre = 'N';

    /**
     * @var string|null
     */
    private $codSisDipTre;

    /**
     * @var string
     */
    private $codNegTre = '1';

    /**
     * @var string
     */
    private $temEnSveTre = 'O';

    /**
     * @var string
     */
    private $temDel = 'O';


    /**
     * Get codTre.
     *
     * @return string
     */
    public function getCodTre()
    {
        return $this->codTre;
    }

    /**
     * Set libTre.
     *
     * @param string $libTre
     *
     * @return TypResultat
     */
    public function setLibTre($libTre)
    {
        $this->libTre = $libTre;

        return $this;
    }

    /**
     * Get libTre.
     *
     * @return string
     */
    public function getLibTre()
    {
        return $this->libTre;
    }

    /**
     * Set licTre.
     *
     * @param string $licTre
     *
     * @return TypResultat
     */
    public function setLicTre($licTre)
    {
        $this->licTre = $licTre;

        return $this;
    }

    /**
     * Get licTre.
     *
     * @return string
     */
    public function getLicTre()
    {
        return $this->licTre;
    }

    /**
     * Set temAdiTre.
     *
     * @param string $temAdiTre
     *
     * @return TypResultat
     */
    public function setTemAdiTre($temAdiTre)
    {
        $this->temAdiTre = $temAdiTre;

        return $this;
    }

    /**
     * Get temAdiTre.
     *
     * @return string
     */
    public function getTemAdiTre()
    {
        return $this->temAdiTre;
    }

    /**
     * Set temAdoTre.
     *
     * @param string $temAdoTre
     *
     * @return TypResultat
     */
    public function setTemAdoTre($temAdoTre)
    {
        $this->temAdoTre = $temAdoTre;

        return $this;
    }

    /**
     * Get temAdoTre.
     *
     * @return string
     */
    public function getTemAdoTre()
    {
        return $this->temAdoTre;
    }

    /**
     * Set temVdiTre.
     *
     * @param string $temVdiTre
     *
     * @return TypResultat
     */
    public function setTemVdiTre($temVdiTre)
    {
        $this->temVdiTre = $temVdiTre;

        return $this;
    }

    /**
     * Get temVdiTre.
     *
     * @return string
     */
    public function getTemVdiTre()
    {
        return $this->temVdiTre;
    }

    /**
     * Set temVetTre.
     *
     * @param string $temVetTre
     *
     * @return TypResultat
     */
    public function setTemVetTre($temVetTre)
    {
        $this->temVetTre = $temVetTre;

        return $this;
    }

    /**
     * Get temVetTre.
     *
     * @return string
     */
    public function getTemVetTre()
    {
        return $this->temVetTre;
    }

    /**
     * Set temElpTre.
     *
     * @param string $temElpTre
     *
     * @return TypResultat
     */
    public function setTemElpTre($temElpTre)
    {
        $this->temElpTre = $temElpTre;

        return $this;
    }

    /**
     * Get temElpTre.
     *
     * @return string
     */
    public function getTemElpTre()
    {
        return $this->temElpTre;
    }

    /**
     * Set temEprTre.
     *
     * @param string $temEprTre
     *
     * @return TypResultat
     */
    public function setTemEprTre($temEprTre)
    {
        $this->temEprTre = $temEprTre;

        return $this;
    }

    /**
     * Get temEprTre.
     *
     * @return string
     */
    public function getTemEprTre()
    {
        return $this->temEprTre;
    }

    /**
     * Set codSisDipTre.
     *
     * @param string|null $codSisDipTre
     *
     * @return TypResultat
     */
    public function setCodSisDipTre($codSisDipTre = null)
    {
        $this->codSisDipTre = $codSisDipTre;

        return $this;
    }

    /**
     * Get codSisDipTre.
     *
     * @return string|null
     */
    public function getCodSisDipTre()
    {
        return $this->codSisDipTre;
    }

    /**
     * Set codNegTre.
     *
     * @param string $codNegTre
     *
     * @return TypResultat
     */
    public function setCodNegTre($codNegTre)
    {
        $this->codNegTre = $codNegTre;

        return $this;
    }

    /**
     * Get codNegTre.
     *
     * @return string
     */
    public function getCodNegTre()
    {
        return $this->codNegTre;
    }

    /**
     * Set temEnSveTre.
     *
     * @param string $temEnSveTre
     *
     * @return TypResultat
     */
    public function setTemEnSveTre($temEnSveTre)
    {
        $this->temEnSveTre = $temEnSveTre;

        return $this;
    }

    /**
     * Get temEnSveTre.
     *
     * @return string
     */
    public function getTemEnSveTre()
    {
        return $this->temEnSveTre;
    }

    /**
     * Set temDel.
     *
     * @param string $temDel
     *
     * @return TypResultat
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
