<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * TypeHeure
 */
class TypeHeure
{
    /**
     * @var string
     */
    private $codTypHeu;

    /**
     * @var string
     */
    private $licTypHeu;

    /**
     * @var string
     */
    private $libTypHeu;

    /**
     * @var string
     */
    private $coeffHetd;

    /**
     * @var int|null
     */
    private $numOrdTypHeu;

    /**
     * @var string
     */
    private $temEnSveTypHeu = 'O';


    /**
     * Get codTypHeu.
     *
     * @return string
     */
    public function getCodTypHeu()
    {
        return $this->codTypHeu;
    }

    /**
     * Set licTypHeu.
     *
     * @param string $licTypHeu
     *
     * @return TypeHeure
     */
    public function setLicTypHeu($licTypHeu)
    {
        $this->licTypHeu = $licTypHeu;

        return $this;
    }

    /**
     * Get licTypHeu.
     *
     * @return string
     */
    public function getLicTypHeu()
    {
        return $this->licTypHeu;
    }

    /**
     * Set libTypHeu.
     *
     * @param string $libTypHeu
     *
     * @return TypeHeure
     */
    public function setLibTypHeu($libTypHeu)
    {
        $this->libTypHeu = $libTypHeu;

        return $this;
    }

    /**
     * Get libTypHeu.
     *
     * @return string
     */
    public function getLibTypHeu()
    {
        return $this->libTypHeu;
    }

    /**
     * Set coeffHetd.
     *
     * @param string $coeffHetd
     *
     * @return TypeHeure
     */
    public function setCoeffHetd($coeffHetd)
    {
        $this->coeffHetd = $coeffHetd;

        return $this;
    }

    /**
     * Get coeffHetd.
     *
     * @return string
     */
    public function getCoeffHetd()
    {
        return $this->coeffHetd;
    }

    /**
     * Set numOrdTypHeu.
     *
     * @param int|null $numOrdTypHeu
     *
     * @return TypeHeure
     */
    public function setNumOrdTypHeu($numOrdTypHeu = null)
    {
        $this->numOrdTypHeu = $numOrdTypHeu;

        return $this;
    }

    /**
     * Get numOrdTypHeu.
     *
     * @return int|null
     */
    public function getNumOrdTypHeu()
    {
        return $this->numOrdTypHeu;
    }

    /**
     * Set temEnSveTypHeu.
     *
     * @param string $temEnSveTypHeu
     *
     * @return TypeHeure
     */
    public function setTemEnSveTypHeu($temEnSveTypHeu)
    {
        $this->temEnSveTypHeu = $temEnSveTypHeu;

        return $this;
    }

    /**
     * Get temEnSveTypHeu.
     *
     * @return string
     */
    public function getTemEnSveTypHeu()
    {
        return $this->temEnSveTypHeu;
    }
}
