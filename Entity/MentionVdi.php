<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * MentionVdi
 */
class MentionVdi
{
    /**
     * @var string
     */
    private $codMev;

    /**
     * @var string
     */
    private $libMev;

    /**
     * @var string
     */
    private $temEnSveMev = 'O';


    /**
     * Get codMev.
     *
     * @return string
     */
    public function getCodMev()
    {
        return $this->codMev;
    }

    /**
     * Set libMev.
     *
     * @param string $libMev
     *
     * @return MentionVdi
     */
    public function setLibMev($libMev)
    {
        $this->libMev = $libMev;

        return $this;
    }

    /**
     * Get libMev.
     *
     * @return string
     */
    public function getLibMev()
    {
        return $this->libMev;
    }

    /**
     * Set temEnSveMev.
     *
     * @param string $temEnSveMev
     *
     * @return MentionVdi
     */
    public function setTemEnSveMev($temEnSveMev)
    {
        $this->temEnSveMev = $temEnSveMev;

        return $this;
    }

    /**
     * Get temEnSveMev.
     *
     * @return string
     */
    public function getTemEnSveMev()
    {
        return $this->temEnSveMev;
    }
}
