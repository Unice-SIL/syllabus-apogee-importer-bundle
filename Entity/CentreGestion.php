<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * CentreGestion
 */
class CentreGestion
{
    /**
     * @var string
     */
    private $codCge;

    /**
     * @var string
     */
    private $etaTypEdtCrtCge = 'I';

    /**
     * @var string
     */
    private $modEdtCrt = 'D';

    /**
     * @var string
     */
    private $libCge;

    /**
     * @var string
     */
    private $licCge;

    /**
     * @var string
     */
    private $libNomRespCge;

    /**
     * @var string|null
     */
    private $libCmtCge;

    /**
     * @var int
     */
    private $numChrQutCge;

    /**
     * @var int|null
     */
    private $numOccQutEdt;

    /**
     * @var int
     */
    private $numOccQutEdtVdr = '0';

    /**
     * @var int
     */
    private $numOccQutEdtLch = '0';

    /**
     * @var int|null
     */
    private $numOccQutVal;

    /**
     * @var int|null
     */
    private $numOccPrmQutVal = '0';

    /**
     * @var \DateTime|null
     */
    private $datDebInsCge;

    /**
     * @var \DateTime|null
     */
    private $datFinInsCge;

    /**
     * @var int
     */
    private $nbrEtuCpt;

    /**
     * @var string|null
     */
    private $libAd1Cge;

    /**
     * @var string|null
     */
    private $libAd2Cge;

    /**
     * @var string|null
     */
    private $libAd3Cge;

    /**
     * @var string
     */
    private $temEnSveCge = 'O';

    /**
     * @var string
     */
    private $temPaiMemePos = 'O';

    /**
     * @var string
     */
    private $temCtrlPai = 'N';

    /**
     * @var string|null
     */
    private $temMinCge = 'N';

    /**
     * @var string|null
     */
    private $codModPaiMinCge = '2';

    /**
     * @var string|null
     */
    private $libCmtPcjMinCge;

    /**
     * @var string
     */
    private $temCtrlRmb = 'chr(78)';

    /**
     * @var bool|null
     */
    private $nbrMaxInsAut;

    /**
     * @var string
     */
    private $codModPaiMinpCge = '2';

    /**
     * @var string
     */
    private $temPmt3fCgeWeb = 'N';

    /**
     * @var string|null
     */
    private $libCmtPcjMinpCge;

    /**
     * @var string
     */
    private $temMinDematCge = 'N';

    /**
     * @var string
     */
    private $temMinpDematCge = 'N';


    /**
     * Get codCge.
     *
     * @return string
     */
    public function getCodCge()
    {
        return $this->codCge;
    }

    /**
     * Set etaTypEdtCrtCge.
     *
     * @param string $etaTypEdtCrtCge
     *
     * @return CentreGestion
     */
    public function setEtaTypEdtCrtCge($etaTypEdtCrtCge)
    {
        $this->etaTypEdtCrtCge = $etaTypEdtCrtCge;

        return $this;
    }

    /**
     * Get etaTypEdtCrtCge.
     *
     * @return string
     */
    public function getEtaTypEdtCrtCge()
    {
        return $this->etaTypEdtCrtCge;
    }

    /**
     * Set modEdtCrt.
     *
     * @param string $modEdtCrt
     *
     * @return CentreGestion
     */
    public function setModEdtCrt($modEdtCrt)
    {
        $this->modEdtCrt = $modEdtCrt;

        return $this;
    }

    /**
     * Get modEdtCrt.
     *
     * @return string
     */
    public function getModEdtCrt()
    {
        return $this->modEdtCrt;
    }

    /**
     * Set libCge.
     *
     * @param string $libCge
     *
     * @return CentreGestion
     */
    public function setLibCge($libCge)
    {
        $this->libCge = $libCge;

        return $this;
    }

    /**
     * Get libCge.
     *
     * @return string
     */
    public function getLibCge()
    {
        return $this->libCge;
    }

    /**
     * Set licCge.
     *
     * @param string $licCge
     *
     * @return CentreGestion
     */
    public function setLicCge($licCge)
    {
        $this->licCge = $licCge;

        return $this;
    }

    /**
     * Get licCge.
     *
     * @return string
     */
    public function getLicCge()
    {
        return $this->licCge;
    }

    /**
     * Set libNomRespCge.
     *
     * @param string $libNomRespCge
     *
     * @return CentreGestion
     */
    public function setLibNomRespCge($libNomRespCge)
    {
        $this->libNomRespCge = $libNomRespCge;

        return $this;
    }

    /**
     * Get libNomRespCge.
     *
     * @return string
     */
    public function getLibNomRespCge()
    {
        return $this->libNomRespCge;
    }

    /**
     * Set libCmtCge.
     *
     * @param string|null $libCmtCge
     *
     * @return CentreGestion
     */
    public function setLibCmtCge($libCmtCge = null)
    {
        $this->libCmtCge = $libCmtCge;

        return $this;
    }

    /**
     * Get libCmtCge.
     *
     * @return string|null
     */
    public function getLibCmtCge()
    {
        return $this->libCmtCge;
    }

    /**
     * Set numChrQutCge.
     *
     * @param int $numChrQutCge
     *
     * @return CentreGestion
     */
    public function setNumChrQutCge($numChrQutCge)
    {
        $this->numChrQutCge = $numChrQutCge;

        return $this;
    }

    /**
     * Get numChrQutCge.
     *
     * @return int
     */
    public function getNumChrQutCge()
    {
        return $this->numChrQutCge;
    }

    /**
     * Set numOccQutEdt.
     *
     * @param int|null $numOccQutEdt
     *
     * @return CentreGestion
     */
    public function setNumOccQutEdt($numOccQutEdt = null)
    {
        $this->numOccQutEdt = $numOccQutEdt;

        return $this;
    }

    /**
     * Get numOccQutEdt.
     *
     * @return int|null
     */
    public function getNumOccQutEdt()
    {
        return $this->numOccQutEdt;
    }

    /**
     * Set numOccQutEdtVdr.
     *
     * @param int $numOccQutEdtVdr
     *
     * @return CentreGestion
     */
    public function setNumOccQutEdtVdr($numOccQutEdtVdr)
    {
        $this->numOccQutEdtVdr = $numOccQutEdtVdr;

        return $this;
    }

    /**
     * Get numOccQutEdtVdr.
     *
     * @return int
     */
    public function getNumOccQutEdtVdr()
    {
        return $this->numOccQutEdtVdr;
    }

    /**
     * Set numOccQutEdtLch.
     *
     * @param int $numOccQutEdtLch
     *
     * @return CentreGestion
     */
    public function setNumOccQutEdtLch($numOccQutEdtLch)
    {
        $this->numOccQutEdtLch = $numOccQutEdtLch;

        return $this;
    }

    /**
     * Get numOccQutEdtLch.
     *
     * @return int
     */
    public function getNumOccQutEdtLch()
    {
        return $this->numOccQutEdtLch;
    }

    /**
     * Set numOccQutVal.
     *
     * @param int|null $numOccQutVal
     *
     * @return CentreGestion
     */
    public function setNumOccQutVal($numOccQutVal = null)
    {
        $this->numOccQutVal = $numOccQutVal;

        return $this;
    }

    /**
     * Get numOccQutVal.
     *
     * @return int|null
     */
    public function getNumOccQutVal()
    {
        return $this->numOccQutVal;
    }

    /**
     * Set numOccPrmQutVal.
     *
     * @param int|null $numOccPrmQutVal
     *
     * @return CentreGestion
     */
    public function setNumOccPrmQutVal($numOccPrmQutVal = null)
    {
        $this->numOccPrmQutVal = $numOccPrmQutVal;

        return $this;
    }

    /**
     * Get numOccPrmQutVal.
     *
     * @return int|null
     */
    public function getNumOccPrmQutVal()
    {
        return $this->numOccPrmQutVal;
    }

    /**
     * Set datDebInsCge.
     *
     * @param \DateTime|null $datDebInsCge
     *
     * @return CentreGestion
     */
    public function setDatDebInsCge($datDebInsCge = null)
    {
        $this->datDebInsCge = $datDebInsCge;

        return $this;
    }

    /**
     * Get datDebInsCge.
     *
     * @return \DateTime|null
     */
    public function getDatDebInsCge()
    {
        return $this->datDebInsCge;
    }

    /**
     * Set datFinInsCge.
     *
     * @param \DateTime|null $datFinInsCge
     *
     * @return CentreGestion
     */
    public function setDatFinInsCge($datFinInsCge = null)
    {
        $this->datFinInsCge = $datFinInsCge;

        return $this;
    }

    /**
     * Get datFinInsCge.
     *
     * @return \DateTime|null
     */
    public function getDatFinInsCge()
    {
        return $this->datFinInsCge;
    }

    /**
     * Set nbrEtuCpt.
     *
     * @param int $nbrEtuCpt
     *
     * @return CentreGestion
     */
    public function setNbrEtuCpt($nbrEtuCpt)
    {
        $this->nbrEtuCpt = $nbrEtuCpt;

        return $this;
    }

    /**
     * Get nbrEtuCpt.
     *
     * @return int
     */
    public function getNbrEtuCpt()
    {
        return $this->nbrEtuCpt;
    }

    /**
     * Set libAd1Cge.
     *
     * @param string|null $libAd1Cge
     *
     * @return CentreGestion
     */
    public function setLibAd1Cge($libAd1Cge = null)
    {
        $this->libAd1Cge = $libAd1Cge;

        return $this;
    }

    /**
     * Get libAd1Cge.
     *
     * @return string|null
     */
    public function getLibAd1Cge()
    {
        return $this->libAd1Cge;
    }

    /**
     * Set libAd2Cge.
     *
     * @param string|null $libAd2Cge
     *
     * @return CentreGestion
     */
    public function setLibAd2Cge($libAd2Cge = null)
    {
        $this->libAd2Cge = $libAd2Cge;

        return $this;
    }

    /**
     * Get libAd2Cge.
     *
     * @return string|null
     */
    public function getLibAd2Cge()
    {
        return $this->libAd2Cge;
    }

    /**
     * Set libAd3Cge.
     *
     * @param string|null $libAd3Cge
     *
     * @return CentreGestion
     */
    public function setLibAd3Cge($libAd3Cge = null)
    {
        $this->libAd3Cge = $libAd3Cge;

        return $this;
    }

    /**
     * Get libAd3Cge.
     *
     * @return string|null
     */
    public function getLibAd3Cge()
    {
        return $this->libAd3Cge;
    }

    /**
     * Set temEnSveCge.
     *
     * @param string $temEnSveCge
     *
     * @return CentreGestion
     */
    public function setTemEnSveCge($temEnSveCge)
    {
        $this->temEnSveCge = $temEnSveCge;

        return $this;
    }

    /**
     * Get temEnSveCge.
     *
     * @return string
     */
    public function getTemEnSveCge()
    {
        return $this->temEnSveCge;
    }

    /**
     * Set temPaiMemePos.
     *
     * @param string $temPaiMemePos
     *
     * @return CentreGestion
     */
    public function setTemPaiMemePos($temPaiMemePos)
    {
        $this->temPaiMemePos = $temPaiMemePos;

        return $this;
    }

    /**
     * Get temPaiMemePos.
     *
     * @return string
     */
    public function getTemPaiMemePos()
    {
        return $this->temPaiMemePos;
    }

    /**
     * Set temCtrlPai.
     *
     * @param string $temCtrlPai
     *
     * @return CentreGestion
     */
    public function setTemCtrlPai($temCtrlPai)
    {
        $this->temCtrlPai = $temCtrlPai;

        return $this;
    }

    /**
     * Get temCtrlPai.
     *
     * @return string
     */
    public function getTemCtrlPai()
    {
        return $this->temCtrlPai;
    }

    /**
     * Set temMinCge.
     *
     * @param string|null $temMinCge
     *
     * @return CentreGestion
     */
    public function setTemMinCge($temMinCge = null)
    {
        $this->temMinCge = $temMinCge;

        return $this;
    }

    /**
     * Get temMinCge.
     *
     * @return string|null
     */
    public function getTemMinCge()
    {
        return $this->temMinCge;
    }

    /**
     * Set codModPaiMinCge.
     *
     * @param string|null $codModPaiMinCge
     *
     * @return CentreGestion
     */
    public function setCodModPaiMinCge($codModPaiMinCge = null)
    {
        $this->codModPaiMinCge = $codModPaiMinCge;

        return $this;
    }

    /**
     * Get codModPaiMinCge.
     *
     * @return string|null
     */
    public function getCodModPaiMinCge()
    {
        return $this->codModPaiMinCge;
    }

    /**
     * Set libCmtPcjMinCge.
     *
     * @param string|null $libCmtPcjMinCge
     *
     * @return CentreGestion
     */
    public function setLibCmtPcjMinCge($libCmtPcjMinCge = null)
    {
        $this->libCmtPcjMinCge = $libCmtPcjMinCge;

        return $this;
    }

    /**
     * Get libCmtPcjMinCge.
     *
     * @return string|null
     */
    public function getLibCmtPcjMinCge()
    {
        return $this->libCmtPcjMinCge;
    }

    /**
     * Set temCtrlRmb.
     *
     * @param string $temCtrlRmb
     *
     * @return CentreGestion
     */
    public function setTemCtrlRmb($temCtrlRmb)
    {
        $this->temCtrlRmb = $temCtrlRmb;

        return $this;
    }

    /**
     * Get temCtrlRmb.
     *
     * @return string
     */
    public function getTemCtrlRmb()
    {
        return $this->temCtrlRmb;
    }

    /**
     * Set nbrMaxInsAut.
     *
     * @param bool|null $nbrMaxInsAut
     *
     * @return CentreGestion
     */
    public function setNbrMaxInsAut($nbrMaxInsAut = null)
    {
        $this->nbrMaxInsAut = $nbrMaxInsAut;

        return $this;
    }

    /**
     * Get nbrMaxInsAut.
     *
     * @return bool|null
     */
    public function getNbrMaxInsAut()
    {
        return $this->nbrMaxInsAut;
    }

    /**
     * Set codModPaiMinpCge.
     *
     * @param string $codModPaiMinpCge
     *
     * @return CentreGestion
     */
    public function setCodModPaiMinpCge($codModPaiMinpCge)
    {
        $this->codModPaiMinpCge = $codModPaiMinpCge;

        return $this;
    }

    /**
     * Get codModPaiMinpCge.
     *
     * @return string
     */
    public function getCodModPaiMinpCge()
    {
        return $this->codModPaiMinpCge;
    }

    /**
     * Set temPmt3fCgeWeb.
     *
     * @param string $temPmt3fCgeWeb
     *
     * @return CentreGestion
     */
    public function setTemPmt3fCgeWeb($temPmt3fCgeWeb)
    {
        $this->temPmt3fCgeWeb = $temPmt3fCgeWeb;

        return $this;
    }

    /**
     * Get temPmt3fCgeWeb.
     *
     * @return string
     */
    public function getTemPmt3fCgeWeb()
    {
        return $this->temPmt3fCgeWeb;
    }

    /**
     * Set libCmtPcjMinpCge.
     *
     * @param string|null $libCmtPcjMinpCge
     *
     * @return CentreGestion
     */
    public function setLibCmtPcjMinpCge($libCmtPcjMinpCge = null)
    {
        $this->libCmtPcjMinpCge = $libCmtPcjMinpCge;

        return $this;
    }

    /**
     * Get libCmtPcjMinpCge.
     *
     * @return string|null
     */
    public function getLibCmtPcjMinpCge()
    {
        return $this->libCmtPcjMinpCge;
    }

    /**
     * Set temMinDematCge.
     *
     * @param string $temMinDematCge
     *
     * @return CentreGestion
     */
    public function setTemMinDematCge($temMinDematCge)
    {
        $this->temMinDematCge = $temMinDematCge;

        return $this;
    }

    /**
     * Get temMinDematCge.
     *
     * @return string
     */
    public function getTemMinDematCge()
    {
        return $this->temMinDematCge;
    }

    /**
     * Set temMinpDematCge.
     *
     * @param string $temMinpDematCge
     *
     * @return CentreGestion
     */
    public function setTemMinpDematCge($temMinpDematCge)
    {
        $this->temMinpDematCge = $temMinpDematCge;

        return $this;
    }

    /**
     * Get temMinpDematCge.
     *
     * @return string
     */
    public function getTemMinpDematCge()
    {
        return $this->temMinpDematCge;
    }

}
