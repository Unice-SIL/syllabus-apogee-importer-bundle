<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * ElpRegroupeElp
 */
class ElpRegroupeElp
{
    /**
     * @var string
     */
    private $codElpFils;

    /**
     * @var string
     */
    private $codElpPere;

    /**
     * @var string
     */
    private $codLse;

    /**
     * @var string
     */
    private $etaElpFils = 'O';

    /**
     * @var string
     */
    private $etaLdse = 'O';

    /**
     * @var string
     */
    private $codTypeLse = 'O';

    /**
     * @var string
     */
    private $etaElpPere = 'O';

    /**
     * @var \DateTime|null
     */
    private $dateOuvertureLien;

    /**
     * @var \DateTime|null
     */
    private $dateFermetureLien;

    /**
     * @var string|null
     */
    private $temSusElpPere;

    /**
     * @var string
     */
    private $temSusElpFils = 'O';

    /**
     * @var \UniceSIL\SyllabusApogeeImporterBundle\Entity\ElementPedagogi
     */
    private $elpPere;

    /**
     * @var \UniceSIL\SyllabusApogeeImporterBundle\Entity\ElementPedagogi
     */
    private $elpFils;


    /**
     * Set codElpFils.
     *
     * @param string $codElpFils
     *
     * @return ElpRegroupeElp
     */
    public function setCodElpFils($codElpFils)
    {
        $this->codElpFils = $codElpFils;

        return $this;
    }

    /**
     * Get codElpFils.
     *
     * @return string
     */
    public function getCodElpFils()
    {
        return $this->codElpFils;
    }

    /**
     * Set codElpPere.
     *
     * @param string $codElpPere
     *
     * @return ElpRegroupeElp
     */
    public function setCodElpPere($codElpPere)
    {
        $this->codElpPere = $codElpPere;

        return $this;
    }

    /**
     * Get codElpPere.
     *
     * @return string
     */
    public function getCodElpPere()
    {
        return $this->codElpPere;
    }

    /**
     * Set codLse.
     *
     * @param string $codLse
     *
     * @return ElpRegroupeElp
     */
    public function setCodLse($codLse)
    {
        $this->codLse = $codLse;

        return $this;
    }

    /**
     * Get codLse.
     *
     * @return string
     */
    public function getCodLse()
    {
        return $this->codLse;
    }

    /**
     * Set etaElpFils.
     *
     * @param string $etaElpFils
     *
     * @return ElpRegroupeElp
     */
    public function setEtaElpFils($etaElpFils)
    {
        $this->etaElpFils = $etaElpFils;

        return $this;
    }

    /**
     * Get etaElpFils.
     *
     * @return string
     */
    public function getEtaElpFils()
    {
        return $this->etaElpFils;
    }

    /**
     * Set etaLdse.
     *
     * @param string $etaLdse
     *
     * @return ElpRegroupeElp
     */
    public function setEtaLdse($etaLdse)
    {
        $this->etaLdse = $etaLdse;

        return $this;
    }

    /**
     * Get etaLdse.
     *
     * @return string
     */
    public function getEtaLdse()
    {
        return $this->etaLdse;
    }

    /**
     * Set codTypeLse.
     *
     * @param string $codTypeLse
     *
     * @return ElpRegroupeElp
     */
    public function setCodTypeLse($codTypeLse)
    {
        $this->codTypeLse = $codTypeLse;

        return $this;
    }

    /**
     * Get codTypeLse.
     *
     * @return string
     */
    public function getCodTypeLse()
    {
        return $this->codTypeLse;
    }

    /**
     * Set etaElpPere.
     *
     * @param string $etaElpPere
     *
     * @return ElpRegroupeElp
     */
    public function setEtaElpPere($etaElpPere)
    {
        $this->etaElpPere = $etaElpPere;

        return $this;
    }

    /**
     * Get etaElpPere.
     *
     * @return string
     */
    public function getEtaElpPere()
    {
        return $this->etaElpPere;
    }

    /**
     * Set dateOuvertureLien.
     *
     * @param \DateTime|null $dateOuvertureLien
     *
     * @return ElpRegroupeElp
     */
    public function setDateOuvertureLien($dateOuvertureLien = null)
    {
        $this->dateOuvertureLien = $dateOuvertureLien;

        return $this;
    }

    /**
     * Get dateOuvertureLien.
     *
     * @return \DateTime|null
     */
    public function getDateOuvertureLien()
    {
        return $this->dateOuvertureLien;
    }

    /**
     * Set dateFermetureLien.
     *
     * @param \DateTime|null $dateFermetureLien
     *
     * @return ElpRegroupeElp
     */
    public function setDateFermetureLien($dateFermetureLien = null)
    {
        $this->dateFermetureLien = $dateFermetureLien;

        return $this;
    }

    /**
     * Get dateFermetureLien.
     *
     * @return \DateTime|null
     */
    public function getDateFermetureLien()
    {
        return $this->dateFermetureLien;
    }

    /**
     * Set temSusElpPere.
     *
     * @param string|null $temSusElpPere
     *
     * @return ElpRegroupeElp
     */
    public function setTemSusElpPere($temSusElpPere = null)
    {
        $this->temSusElpPere = $temSusElpPere;

        return $this;
    }

    /**
     * Get temSusElpPere.
     *
     * @return string|null
     */
    public function getTemSusElpPere()
    {
        return $this->temSusElpPere;
    }

    /**
     * Set temSusElpFils.
     *
     * @param string $temSusElpFils
     *
     * @return ElpRegroupeElp
     */
    public function setTemSusElpFils($temSusElpFils)
    {
        $this->temSusElpFils = $temSusElpFils;

        return $this;
    }

    /**
     * Get temSusElpFils.
     *
     * @return string
     */
    public function getTemSusElpFils()
    {
        return $this->temSusElpFils;
    }

    /**
     * Set elpPere.
     *
     * @param \UniceSIL\SyllabusApogeeImporterBundle\Entity\ElementPedagogi|null $elpPere
     *
     * @return ElpRegroupeElp
     */
    public function setElpPere(\UniceSIL\SyllabusApogeeImporterBundle\Entity\ElementPedagogi $elpPere = null)
    {
        $this->elpPere = $elpPere;

        return $this;
    }

    /**
     * Get elpPere.
     *
     * @return \UniceSIL\SyllabusApogeeImporterBundle\Entity\ElementPedagogi|null
     */
    public function getElpPere()
    {
        return $this->elpPere;
    }

    /**
     * Set elpFils.
     *
     * @param \UniceSIL\SyllabusApogeeImporterBundle\Entity\ElementPedagogi|null $elpFils
     *
     * @return ElpRegroupeElp
     */
    public function setElpFils(\UniceSIL\SyllabusApogeeImporterBundle\Entity\ElementPedagogi $elpFils = null)
    {
        $this->elpFils = $elpFils;

        return $this;
    }

    /**
     * Get elpFils.
     *
     * @return \UniceSIL\SyllabusApogeeImporterBundle\Entity\ElementPedagogi|null
     */
    public function getElpFils()
    {
        return $this->elpFils;
    }
}
