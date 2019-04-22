<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * SectionCnu
 */
class SectionCnu
{
    /**
     * @var string
     */
    private $codScc;

    /**
     * @var string
     */
    private $licScc;

    /**
     * @var string|null
     */
    private $libScc;

    /**
     * @var string
     */
    private $temEnSveScc = 'O';


    /**
     * Get codScc.
     *
     * @return string
     */
    public function getCodScc()
    {
        return $this->codScc;
    }

    /**
     * Set licScc.
     *
     * @param string $licScc
     *
     * @return SectionCnu
     */
    public function setLicScc($licScc)
    {
        $this->licScc = $licScc;

        return $this;
    }

    /**
     * Get licScc.
     *
     * @return string
     */
    public function getLicScc()
    {
        return $this->licScc;
    }

    /**
     * Set libScc.
     *
     * @param string|null $libScc
     *
     * @return SectionCnu
     */
    public function setLibScc($libScc = null)
    {
        $this->libScc = $libScc;

        return $this;
    }

    /**
     * Get libScc.
     *
     * @return string|null
     */
    public function getLibScc()
    {
        return $this->libScc;
    }

    /**
     * Set temEnSveScc.
     *
     * @param string $temEnSveScc
     *
     * @return SectionCnu
     */
    public function setTemEnSveScc($temEnSveScc)
    {
        $this->temEnSveScc = $temEnSveScc;

        return $this;
    }

    /**
     * Get temEnSveScc.
     *
     * @return string
     */
    public function getTemEnSveScc()
    {
        return $this->temEnSveScc;
    }
}
