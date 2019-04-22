<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * CursusLmd
 */
class CursusLmd
{
    /**
     * @var string
     */
    private $codCur;

    /**
     * @var int
     */
    private $numOrdCur;

    /**
     * @var string
     */
    private $libCur;

    /**
     * @var string
     */
    private $temEnSveCur = 'O';


    /**
     * Get codCur.
     *
     * @return string
     */
    public function getCodCur()
    {
        return $this->codCur;
    }

    /**
     * Set numOrdCur.
     *
     * @param int $numOrdCur
     *
     * @return CursusLmd
     */
    public function setNumOrdCur($numOrdCur)
    {
        $this->numOrdCur = $numOrdCur;

        return $this;
    }

    /**
     * Get numOrdCur.
     *
     * @return int
     */
    public function getNumOrdCur()
    {
        return $this->numOrdCur;
    }

    /**
     * Set libCur.
     *
     * @param string $libCur
     *
     * @return CursusLmd
     */
    public function setLibCur($libCur)
    {
        $this->libCur = $libCur;

        return $this;
    }

    /**
     * Get libCur.
     *
     * @return string
     */
    public function getLibCur()
    {
        return $this->libCur;
    }

    /**
     * Set temEnSveCur.
     *
     * @param string $temEnSveCur
     *
     * @return CursusLmd
     */
    public function setTemEnSveCur($temEnSveCur)
    {
        $this->temEnSveCur = $temEnSveCur;

        return $this;
    }

    /**
     * Get temEnSveCur.
     *
     * @return string
     */
    public function getTemEnSveCur()
    {
        return $this->temEnSveCur;
    }
}
