<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * TypDiplome
 */
class TypDiplome
{
    /**
     * @var string
     */
    private $codTpdEtb;

    /**
     * @var string|null
     */
    private $codTpdSis;

    /**
     * @var string
     */
    private $libTpd;

    /**
     * @var string
     */
    private $licTpd;

    /**
     * @var string
     */
    private $temEnSveTpd = 'O';

    /**
     * @var string|null
     */
    private $etaThsHdrDrt;

    /**
     * @var string
     */
    private $temEnqSisTpd = 'chr(78)';

    /**
     * @var string
     */
    private $temNatEur = 'N';

    /**
     * @var string
     */
    private $temSante = '(\'N\')';

    /**
     * @var string
     */
    private $temCrdSis = 'N';

    /**
     * @var string
     */
    private $aglTemMast = 'N';

    /**
     * @var string|null
     */
    private $aglCur;

    /**
     * @var string|null
     */
    private $aglForm;

    /**
     * @var string
     */
    private $temPrior = 'N';

    /**
     * @var string|null
     */
    private $etaIfm;

    /**
     * @var string
     */
    private $etaIng = 'N';

    /**
     * @var string
     */
    private $temPrexam = 'N';

    /**
     * @var bool|null
     */
    private $codEch;


    /**
     * Get codTpdEtb.
     *
     * @return string
     */
    public function getCodTpdEtb()
    {
        return $this->codTpdEtb;
    }

    /**
     * Set codTpdSis.
     *
     * @param string|null $codTpdSis
     *
     * @return TypDiplome
     */
    public function setCodTpdSis($codTpdSis = null)
    {
        $this->codTpdSis = $codTpdSis;

        return $this;
    }

    /**
     * Get codTpdSis.
     *
     * @return string|null
     */
    public function getCodTpdSis()
    {
        return $this->codTpdSis;
    }

    /**
     * Set libTpd.
     *
     * @param string $libTpd
     *
     * @return TypDiplome
     */
    public function setLibTpd($libTpd)
    {
        $this->libTpd = $libTpd;

        return $this;
    }

    /**
     * Get libTpd.
     *
     * @return string
     */
    public function getLibTpd()
    {
        return $this->libTpd;
    }

    /**
     * Set licTpd.
     *
     * @param string $licTpd
     *
     * @return TypDiplome
     */
    public function setLicTpd($licTpd)
    {
        $this->licTpd = $licTpd;

        return $this;
    }

    /**
     * Get licTpd.
     *
     * @return string
     */
    public function getLicTpd()
    {
        return $this->licTpd;
    }

    /**
     * Set temEnSveTpd.
     *
     * @param string $temEnSveTpd
     *
     * @return TypDiplome
     */
    public function setTemEnSveTpd($temEnSveTpd)
    {
        $this->temEnSveTpd = $temEnSveTpd;

        return $this;
    }

    /**
     * Get temEnSveTpd.
     *
     * @return string
     */
    public function getTemEnSveTpd()
    {
        return $this->temEnSveTpd;
    }

    /**
     * Set etaThsHdrDrt.
     *
     * @param string|null $etaThsHdrDrt
     *
     * @return TypDiplome
     */
    public function setEtaThsHdrDrt($etaThsHdrDrt = null)
    {
        $this->etaThsHdrDrt = $etaThsHdrDrt;

        return $this;
    }

    /**
     * Get etaThsHdrDrt.
     *
     * @return string|null
     */
    public function getEtaThsHdrDrt()
    {
        return $this->etaThsHdrDrt;
    }

    /**
     * Set temEnqSisTpd.
     *
     * @param string $temEnqSisTpd
     *
     * @return TypDiplome
     */
    public function setTemEnqSisTpd($temEnqSisTpd)
    {
        $this->temEnqSisTpd = $temEnqSisTpd;

        return $this;
    }

    /**
     * Get temEnqSisTpd.
     *
     * @return string
     */
    public function getTemEnqSisTpd()
    {
        return $this->temEnqSisTpd;
    }

    /**
     * Set temNatEur.
     *
     * @param string $temNatEur
     *
     * @return TypDiplome
     */
    public function setTemNatEur($temNatEur)
    {
        $this->temNatEur = $temNatEur;

        return $this;
    }

    /**
     * Get temNatEur.
     *
     * @return string
     */
    public function getTemNatEur()
    {
        return $this->temNatEur;
    }

    /**
     * Set temSante.
     *
     * @param string $temSante
     *
     * @return TypDiplome
     */
    public function setTemSante($temSante)
    {
        $this->temSante = $temSante;

        return $this;
    }

    /**
     * Get temSante.
     *
     * @return string
     */
    public function getTemSante()
    {
        return $this->temSante;
    }

    /**
     * Set temCrdSis.
     *
     * @param string $temCrdSis
     *
     * @return TypDiplome
     */
    public function setTemCrdSis($temCrdSis)
    {
        $this->temCrdSis = $temCrdSis;

        return $this;
    }

    /**
     * Get temCrdSis.
     *
     * @return string
     */
    public function getTemCrdSis()
    {
        return $this->temCrdSis;
    }

    /**
     * Set aglTemMast.
     *
     * @param string $aglTemMast
     *
     * @return TypDiplome
     */
    public function setAglTemMast($aglTemMast)
    {
        $this->aglTemMast = $aglTemMast;

        return $this;
    }

    /**
     * Get aglTemMast.
     *
     * @return string
     */
    public function getAglTemMast()
    {
        return $this->aglTemMast;
    }

    /**
     * Set aglCur.
     *
     * @param string|null $aglCur
     *
     * @return TypDiplome
     */
    public function setAglCur($aglCur = null)
    {
        $this->aglCur = $aglCur;

        return $this;
    }

    /**
     * Get aglCur.
     *
     * @return string|null
     */
    public function getAglCur()
    {
        return $this->aglCur;
    }

    /**
     * Set aglForm.
     *
     * @param string|null $aglForm
     *
     * @return TypDiplome
     */
    public function setAglForm($aglForm = null)
    {
        $this->aglForm = $aglForm;

        return $this;
    }

    /**
     * Get aglForm.
     *
     * @return string|null
     */
    public function getAglForm()
    {
        return $this->aglForm;
    }

    /**
     * Set temPrior.
     *
     * @param string $temPrior
     *
     * @return TypDiplome
     */
    public function setTemPrior($temPrior)
    {
        $this->temPrior = $temPrior;

        return $this;
    }

    /**
     * Get temPrior.
     *
     * @return string
     */
    public function getTemPrior()
    {
        return $this->temPrior;
    }

    /**
     * Set etaIfm.
     *
     * @param string|null $etaIfm
     *
     * @return TypDiplome
     */
    public function setEtaIfm($etaIfm = null)
    {
        $this->etaIfm = $etaIfm;

        return $this;
    }

    /**
     * Get etaIfm.
     *
     * @return string|null
     */
    public function getEtaIfm()
    {
        return $this->etaIfm;
    }

    /**
     * Set etaIng.
     *
     * @param string $etaIng
     *
     * @return TypDiplome
     */
    public function setEtaIng($etaIng)
    {
        $this->etaIng = $etaIng;

        return $this;
    }

    /**
     * Get etaIng.
     *
     * @return string
     */
    public function getEtaIng()
    {
        return $this->etaIng;
    }

    /**
     * Set temPrexam.
     *
     * @param string $temPrexam
     *
     * @return TypDiplome
     */
    public function setTemPrexam($temPrexam)
    {
        $this->temPrexam = $temPrexam;

        return $this;
    }

    /**
     * Get temPrexam.
     *
     * @return string
     */
    public function getTemPrexam()
    {
        return $this->temPrexam;
    }

    /**
     * Set codEch.
     *
     * @param bool|null $codEch
     *
     * @return TypDiplome
     */
    public function setCodEch($codEch = null)
    {
        $this->codEch = $codEch;

        return $this;
    }

    /**
     * Get codEch.
     *
     * @return bool|null
     */
    public function getCodEch()
    {
        return $this->codEch;
    }

}
