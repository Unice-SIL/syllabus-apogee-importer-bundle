<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * ElementPedagogi
 */
class ElementPedagogi
{
    /**
     * @var string
     */
    private $codElp;

    /**
     * @var string
     */
    private $libElp;

    /**
     * @var string
     */
    private $licElp;

    /**
     * @var string|null
     */
    private $libCmtElp;

    /**
     * @var \DateTime
     */
    private $datCreElp;

    /**
     * @var \DateTime|null
     */
    private $datModElp;

    /**
     * @var string|null
     */
    private $nbrVolElp;

    /**
     * @var string|null
     */
    private $codVolElp;

    /**
     * @var string
     */
    private $etaElp = 'O';

    /**
     * @var string|null
     */
    private $libLieElp;

    /**
     * @var string|null
     */
    private $libNomRspElp;

    /**
     * @var \DateTime|null
     */
    private $datDebOpeIpe;

    /**
     * @var \DateTime|null
     */
    private $datFinOpeIpe;

    /**
     * @var int|null
     */
    private $nbrAdmElp;

    /**
     * @var int|null
     */
    private $nbrAdmFra;

    /**
     * @var int|null
     */
    private $nbrAdmEtr;

    /**
     * @var string|null
     */
    private $notObtElpNum;

    /**
     * @var string|null
     */
    private $notObtElpDen;

    /**
     * @var string|null
     */
    private $notMinRptElpNum;

    /**
     * @var string|null
     */
    private $notMinRptElpDen;

    /**
     * @var string|null
     */
    private $notMinAdmNum;

    /**
     * @var string|null
     */
    private $notMinAdmDen;

    /**
     * @var string|null
     */
    private $notMaxAdmNum;

    /**
     * @var string|null
     */
    private $notMaxAdmDen;

    /**
     * @var string
     */
    private $temElpCap = 'O';

    /**
     * @var string
     */
    private $temReiIpeAcq = 'O';

    /**
     * @var string
     */
    private $temSusElp = 'O';

    /**
     * @var string|null
     */
    private $libSusElp;

    /**
     * @var string
     */
    private $temRelPosSyt = 'N';

    /**
     * @var string
     */
    private $temScaElp = 'O';

    /**
     * @var string
     */
    private $temElpPrmNiv = 'O';

    /**
     * @var string
     */
    private $temNotElp = 'O';

    /**
     * @var int|null
     */
    private $barSaiElp;

    /**
     * @var string
     */
    private $temPntJurElp = 'N';

    /**
     * @var string
     */
    private $temMndElp = 'N';

    /**
     * @var string
     */
    private $temResElp = 'N';

    /**
     * @var string
     */
    private $temJurElp = 'N';

    /**
     * @var string
     */
    private $temCtlValCadElp = 'N';

    /**
     * @var string
     */
    private $temAnlRptElp = 'N';

    /**
     * @var string|null
     */
    private $notMinRptElp;

    /**
     * @var int|null
     */
    private $barMinRptElp = '20';

    /**
     * @var string
     */
    private $temConElp = 'N';

    /**
     * @var int|null
     */
    private $durConElp;

    /**
     * @var string|null
     */
    private $notMinConElp;

    /**
     * @var int|null
     */
    private $barMinConElp = '20';

    /**
     * @var string
     */
    private $temCapElp = 'N';

    /**
     * @var string
     */
    private $temSesUni = 'N';

    /**
     * @var string
     */
    private $temAdi = 'N';

    /**
     * @var string
     */
    private $temAdo = 'O';

    /**
     * @var string
     */
    private $temHeuEnsElp = 'N';

    /**
     * @var int|null
     */
    private $nbrEffPrvElp;

    /**
     * @var int|null
     */
    private $nbrHeuCmElp;

    /**
     * @var int|null
     */
    private $nbrHeuTdElp;

    /**
     * @var int|null
     */
    private $nbrHeuTpElp;

    /**
     * @var string
     */
    private $temMccElp = 'N';

    /**
     * @var string
     */
    private $temRptDscElp = 'N';

    /**
     * @var int|null
     */
    private $numPreElp;

    /**
     * @var string|null
     */
    private $nbrCrdElp;

    /**
     * @var string
     */
    private $temADisElp = 'N';

    /**
     * @var int|null
     */
    private $capMaxElp;

    /**
     * @var int|null
     */
    private $capIntElp;

    /**
     * @var string
     */
    private $temMeiNotElp = 'N';

    /**
     * @var string
     */
    private $temAjsElp = 'N';

    /**
     * @var string
     */
    private $temStgElp = 'N';

    /**
     * @var string|null
     */
    private $caractElp;

    /**
     * @var int|null
     */
    private $nbrRngUtile;

    /**
     * @var int|null
     */
    private $nbrListCompl;

    /**
     * @var int|null
     */
    private $nbrMaxHorsEee;

    /**
     * @var int|null
     */
    private $nbrMaxEssa;

    /**
     * @var string|null
     */
    private $notMinLcElp;

    /**
     * @var int|null
     */
    private $barMinLcElp = '20';

    /**
     * @var string|null
     */
    private $codRofElp;

    /**
     * @var string|null
     */
    private $notMinMeiNotElp = '0';

    /**
     * @var int|null
     */
    private $barMinMeiNotElp = '20';

    /**
     * @var string|null
     */
    private $temHorsEtab = 'N';

    /**
     * @var int|null
     */
    private $seuilOuv;

    /**
     * @var string
     */
    private $temComElp = 'N';

    /**
     * @var \DateTime|null
     */
    private $datModCom;

    /**
     * @var Composante
     */
    private $codCmp;

    /**
     * @var NatureElp
     */
    private $codNel;

    /**
     * @var PeriodeAno
     */
    private $codPan1;

    /**
     * @var PeriodeAno
     */
    private $codPan2;

    /**
     * @var PeriodeAno
     */
    private $codPan3;

    /**
     * @var PeriodeAno
     */
    private $codPan4;

    /**
     * @var PeriodeElp
     */
    private $codPel;

    /**
     * @var SectionCnu
     */
    private $codScc;

    /**
     * @var TypResultat
     */
    private $codTrePac;

    /**
     * @var TypResultat
     */
    private $codTreNlc;

    /**
     * @var TypResultat
     */
    private $codTreNaj;

    /**
     * @var TypResultat
     */
    private $codTreNex;

    /**
     * @var TypResultat
     */
    private $codTrePde;

    /**
     * @var TypResultat
     */
    private $codTreNde;

    /**
     * @var TypResultat
     */
    private $codTreNdl;


    /**
     * Get codElp.
     *
     * @return string
     */
    public function getCodElp()
    {
        return $this->codElp;
    }

    /**
     * Set libElp.
     *
     * @param string $libElp
     *
     * @return ElementPedagogi
     */
    public function setLibElp($libElp)
    {
        $this->libElp = $libElp;

        return $this;
    }

    /**
     * Get libElp.
     *
     * @return string
     */
    public function getLibElp()
    {
        return $this->libElp;
    }

    /**
     * Set licElp.
     *
     * @param string $licElp
     *
     * @return ElementPedagogi
     */
    public function setLicElp($licElp)
    {
        $this->licElp = $licElp;

        return $this;
    }

    /**
     * Get licElp.
     *
     * @return string
     */
    public function getLicElp()
    {
        return $this->licElp;
    }

    /**
     * Set libCmtElp.
     *
     * @param string|null $libCmtElp
     *
     * @return ElementPedagogi
     */
    public function setLibCmtElp($libCmtElp = null)
    {
        $this->libCmtElp = $libCmtElp;

        return $this;
    }

    /**
     * Get libCmtElp.
     *
     * @return string|null
     */
    public function getLibCmtElp()
    {
        return $this->libCmtElp;
    }

    /**
     * Set datCreElp.
     *
     * @param \DateTime $datCreElp
     *
     * @return ElementPedagogi
     */
    public function setDatCreElp($datCreElp)
    {
        $this->datCreElp = $datCreElp;

        return $this;
    }

    /**
     * Get datCreElp.
     *
     * @return \DateTime
     */
    public function getDatCreElp()
    {
        return $this->datCreElp;
    }

    /**
     * Set datModElp.
     *
     * @param \DateTime|null $datModElp
     *
     * @return ElementPedagogi
     */
    public function setDatModElp($datModElp = null)
    {
        $this->datModElp = $datModElp;

        return $this;
    }

    /**
     * Get datModElp.
     *
     * @return \DateTime|null
     */
    public function getDatModElp()
    {
        return $this->datModElp;
    }

    /**
     * Set nbrVolElp.
     *
     * @param string|null $nbrVolElp
     *
     * @return ElementPedagogi
     */
    public function setNbrVolElp($nbrVolElp = null)
    {
        $this->nbrVolElp = $nbrVolElp;

        return $this;
    }

    /**
     * Get nbrVolElp.
     *
     * @return string|null
     */
    public function getNbrVolElp()
    {
        return $this->nbrVolElp;
    }

    /**
     * Set codVolElp.
     *
     * @param string|null $codVolElp
     *
     * @return ElementPedagogi
     */
    public function setCodVolElp($codVolElp = null)
    {
        $this->codVolElp = $codVolElp;

        return $this;
    }

    /**
     * Get codVolElp.
     *
     * @return string|null
     */
    public function getCodVolElp()
    {
        return $this->codVolElp;
    }

    /**
     * Set etaElp.
     *
     * @param string $etaElp
     *
     * @return ElementPedagogi
     */
    public function setEtaElp($etaElp)
    {
        $this->etaElp = $etaElp;

        return $this;
    }

    /**
     * Get etaElp.
     *
     * @return string
     */
    public function getEtaElp()
    {
        return $this->etaElp;
    }

    /**
     * Set libLieElp.
     *
     * @param string|null $libLieElp
     *
     * @return ElementPedagogi
     */
    public function setLibLieElp($libLieElp = null)
    {
        $this->libLieElp = $libLieElp;

        return $this;
    }

    /**
     * Get libLieElp.
     *
     * @return string|null
     */
    public function getLibLieElp()
    {
        return $this->libLieElp;
    }

    /**
     * Set libNomRspElp.
     *
     * @param string|null $libNomRspElp
     *
     * @return ElementPedagogi
     */
    public function setLibNomRspElp($libNomRspElp = null)
    {
        $this->libNomRspElp = $libNomRspElp;

        return $this;
    }

    /**
     * Get libNomRspElp.
     *
     * @return string|null
     */
    public function getLibNomRspElp()
    {
        return $this->libNomRspElp;
    }

    /**
     * Set datDebOpeIpe.
     *
     * @param \DateTime|null $datDebOpeIpe
     *
     * @return ElementPedagogi
     */
    public function setDatDebOpeIpe($datDebOpeIpe = null)
    {
        $this->datDebOpeIpe = $datDebOpeIpe;

        return $this;
    }

    /**
     * Get datDebOpeIpe.
     *
     * @return \DateTime|null
     */
    public function getDatDebOpeIpe()
    {
        return $this->datDebOpeIpe;
    }

    /**
     * Set datFinOpeIpe.
     *
     * @param \DateTime|null $datFinOpeIpe
     *
     * @return ElementPedagogi
     */
    public function setDatFinOpeIpe($datFinOpeIpe = null)
    {
        $this->datFinOpeIpe = $datFinOpeIpe;

        return $this;
    }

    /**
     * Get datFinOpeIpe.
     *
     * @return \DateTime|null
     */
    public function getDatFinOpeIpe()
    {
        return $this->datFinOpeIpe;
    }

    /**
     * Set nbrAdmElp.
     *
     * @param int|null $nbrAdmElp
     *
     * @return ElementPedagogi
     */
    public function setNbrAdmElp($nbrAdmElp = null)
    {
        $this->nbrAdmElp = $nbrAdmElp;

        return $this;
    }

    /**
     * Get nbrAdmElp.
     *
     * @return int|null
     */
    public function getNbrAdmElp()
    {
        return $this->nbrAdmElp;
    }

    /**
     * Set nbrAdmFra.
     *
     * @param int|null $nbrAdmFra
     *
     * @return ElementPedagogi
     */
    public function setNbrAdmFra($nbrAdmFra = null)
    {
        $this->nbrAdmFra = $nbrAdmFra;

        return $this;
    }

    /**
     * Get nbrAdmFra.
     *
     * @return int|null
     */
    public function getNbrAdmFra()
    {
        return $this->nbrAdmFra;
    }

    /**
     * Set nbrAdmEtr.
     *
     * @param int|null $nbrAdmEtr
     *
     * @return ElementPedagogi
     */
    public function setNbrAdmEtr($nbrAdmEtr = null)
    {
        $this->nbrAdmEtr = $nbrAdmEtr;

        return $this;
    }

    /**
     * Get nbrAdmEtr.
     *
     * @return int|null
     */
    public function getNbrAdmEtr()
    {
        return $this->nbrAdmEtr;
    }

    /**
     * Set notObtElpNum.
     *
     * @param string|null $notObtElpNum
     *
     * @return ElementPedagogi
     */
    public function setNotObtElpNum($notObtElpNum = null)
    {
        $this->notObtElpNum = $notObtElpNum;

        return $this;
    }

    /**
     * Get notObtElpNum.
     *
     * @return string|null
     */
    public function getNotObtElpNum()
    {
        return $this->notObtElpNum;
    }

    /**
     * Set notObtElpDen.
     *
     * @param string|null $notObtElpDen
     *
     * @return ElementPedagogi
     */
    public function setNotObtElpDen($notObtElpDen = null)
    {
        $this->notObtElpDen = $notObtElpDen;

        return $this;
    }

    /**
     * Get notObtElpDen.
     *
     * @return string|null
     */
    public function getNotObtElpDen()
    {
        return $this->notObtElpDen;
    }

    /**
     * Set notMinRptElpNum.
     *
     * @param string|null $notMinRptElpNum
     *
     * @return ElementPedagogi
     */
    public function setNotMinRptElpNum($notMinRptElpNum = null)
    {
        $this->notMinRptElpNum = $notMinRptElpNum;

        return $this;
    }

    /**
     * Get notMinRptElpNum.
     *
     * @return string|null
     */
    public function getNotMinRptElpNum()
    {
        return $this->notMinRptElpNum;
    }

    /**
     * Set notMinRptElpDen.
     *
     * @param string|null $notMinRptElpDen
     *
     * @return ElementPedagogi
     */
    public function setNotMinRptElpDen($notMinRptElpDen = null)
    {
        $this->notMinRptElpDen = $notMinRptElpDen;

        return $this;
    }

    /**
     * Get notMinRptElpDen.
     *
     * @return string|null
     */
    public function getNotMinRptElpDen()
    {
        return $this->notMinRptElpDen;
    }

    /**
     * Set notMinAdmNum.
     *
     * @param string|null $notMinAdmNum
     *
     * @return ElementPedagogi
     */
    public function setNotMinAdmNum($notMinAdmNum = null)
    {
        $this->notMinAdmNum = $notMinAdmNum;

        return $this;
    }

    /**
     * Get notMinAdmNum.
     *
     * @return string|null
     */
    public function getNotMinAdmNum()
    {
        return $this->notMinAdmNum;
    }

    /**
     * Set notMinAdmDen.
     *
     * @param string|null $notMinAdmDen
     *
     * @return ElementPedagogi
     */
    public function setNotMinAdmDen($notMinAdmDen = null)
    {
        $this->notMinAdmDen = $notMinAdmDen;

        return $this;
    }

    /**
     * Get notMinAdmDen.
     *
     * @return string|null
     */
    public function getNotMinAdmDen()
    {
        return $this->notMinAdmDen;
    }

    /**
     * Set notMaxAdmNum.
     *
     * @param string|null $notMaxAdmNum
     *
     * @return ElementPedagogi
     */
    public function setNotMaxAdmNum($notMaxAdmNum = null)
    {
        $this->notMaxAdmNum = $notMaxAdmNum;

        return $this;
    }

    /**
     * Get notMaxAdmNum.
     *
     * @return string|null
     */
    public function getNotMaxAdmNum()
    {
        return $this->notMaxAdmNum;
    }

    /**
     * Set notMaxAdmDen.
     *
     * @param string|null $notMaxAdmDen
     *
     * @return ElementPedagogi
     */
    public function setNotMaxAdmDen($notMaxAdmDen = null)
    {
        $this->notMaxAdmDen = $notMaxAdmDen;

        return $this;
    }

    /**
     * Get notMaxAdmDen.
     *
     * @return string|null
     */
    public function getNotMaxAdmDen()
    {
        return $this->notMaxAdmDen;
    }

    /**
     * Set temElpCap.
     *
     * @param string $temElpCap
     *
     * @return ElementPedagogi
     */
    public function setTemElpCap($temElpCap)
    {
        $this->temElpCap = $temElpCap;

        return $this;
    }

    /**
     * Get temElpCap.
     *
     * @return string
     */
    public function getTemElpCap()
    {
        return $this->temElpCap;
    }

    /**
     * Set temReiIpeAcq.
     *
     * @param string $temReiIpeAcq
     *
     * @return ElementPedagogi
     */
    public function setTemReiIpeAcq($temReiIpeAcq)
    {
        $this->temReiIpeAcq = $temReiIpeAcq;

        return $this;
    }

    /**
     * Get temReiIpeAcq.
     *
     * @return string
     */
    public function getTemReiIpeAcq()
    {
        return $this->temReiIpeAcq;
    }

    /**
     * Set temSusElp.
     *
     * @param string $temSusElp
     *
     * @return ElementPedagogi
     */
    public function setTemSusElp($temSusElp)
    {
        $this->temSusElp = $temSusElp;

        return $this;
    }

    /**
     * Get temSusElp.
     *
     * @return string
     */
    public function getTemSusElp()
    {
        return $this->temSusElp;
    }

    /**
     * Set libSusElp.
     *
     * @param string|null $libSusElp
     *
     * @return ElementPedagogi
     */
    public function setLibSusElp($libSusElp = null)
    {
        $this->libSusElp = $libSusElp;

        return $this;
    }

    /**
     * Get libSusElp.
     *
     * @return string|null
     */
    public function getLibSusElp()
    {
        return $this->libSusElp;
    }

    /**
     * Set temRelPosSyt.
     *
     * @param string $temRelPosSyt
     *
     * @return ElementPedagogi
     */
    public function setTemRelPosSyt($temRelPosSyt)
    {
        $this->temRelPosSyt = $temRelPosSyt;

        return $this;
    }

    /**
     * Get temRelPosSyt.
     *
     * @return string
     */
    public function getTemRelPosSyt()
    {
        return $this->temRelPosSyt;
    }

    /**
     * Set temScaElp.
     *
     * @param string $temScaElp
     *
     * @return ElementPedagogi
     */
    public function setTemScaElp($temScaElp)
    {
        $this->temScaElp = $temScaElp;

        return $this;
    }

    /**
     * Get temScaElp.
     *
     * @return string
     */
    public function getTemScaElp()
    {
        return $this->temScaElp;
    }

    /**
     * Set temElpPrmNiv.
     *
     * @param string $temElpPrmNiv
     *
     * @return ElementPedagogi
     */
    public function setTemElpPrmNiv($temElpPrmNiv)
    {
        $this->temElpPrmNiv = $temElpPrmNiv;

        return $this;
    }

    /**
     * Get temElpPrmNiv.
     *
     * @return string
     */
    public function getTemElpPrmNiv()
    {
        return $this->temElpPrmNiv;
    }

    /**
     * Set temNotElp.
     *
     * @param string $temNotElp
     *
     * @return ElementPedagogi
     */
    public function setTemNotElp($temNotElp)
    {
        $this->temNotElp = $temNotElp;

        return $this;
    }

    /**
     * Get temNotElp.
     *
     * @return string
     */
    public function getTemNotElp()
    {
        return $this->temNotElp;
    }

    /**
     * Set barSaiElp.
     *
     * @param int|null $barSaiElp
     *
     * @return ElementPedagogi
     */
    public function setBarSaiElp($barSaiElp = null)
    {
        $this->barSaiElp = $barSaiElp;

        return $this;
    }

    /**
     * Get barSaiElp.
     *
     * @return int|null
     */
    public function getBarSaiElp()
    {
        return $this->barSaiElp;
    }

    /**
     * Set temPntJurElp.
     *
     * @param string $temPntJurElp
     *
     * @return ElementPedagogi
     */
    public function setTemPntJurElp($temPntJurElp)
    {
        $this->temPntJurElp = $temPntJurElp;

        return $this;
    }

    /**
     * Get temPntJurElp.
     *
     * @return string
     */
    public function getTemPntJurElp()
    {
        return $this->temPntJurElp;
    }

    /**
     * Set temMndElp.
     *
     * @param string $temMndElp
     *
     * @return ElementPedagogi
     */
    public function setTemMndElp($temMndElp)
    {
        $this->temMndElp = $temMndElp;

        return $this;
    }

    /**
     * Get temMndElp.
     *
     * @return string
     */
    public function getTemMndElp()
    {
        return $this->temMndElp;
    }

    /**
     * Set temResElp.
     *
     * @param string $temResElp
     *
     * @return ElementPedagogi
     */
    public function setTemResElp($temResElp)
    {
        $this->temResElp = $temResElp;

        return $this;
    }

    /**
     * Get temResElp.
     *
     * @return string
     */
    public function getTemResElp()
    {
        return $this->temResElp;
    }

    /**
     * Set temJurElp.
     *
     * @param string $temJurElp
     *
     * @return ElementPedagogi
     */
    public function setTemJurElp($temJurElp)
    {
        $this->temJurElp = $temJurElp;

        return $this;
    }

    /**
     * Get temJurElp.
     *
     * @return string
     */
    public function getTemJurElp()
    {
        return $this->temJurElp;
    }

    /**
     * Set temCtlValCadElp.
     *
     * @param string $temCtlValCadElp
     *
     * @return ElementPedagogi
     */
    public function setTemCtlValCadElp($temCtlValCadElp)
    {
        $this->temCtlValCadElp = $temCtlValCadElp;

        return $this;
    }

    /**
     * Get temCtlValCadElp.
     *
     * @return string
     */
    public function getTemCtlValCadElp()
    {
        return $this->temCtlValCadElp;
    }

    /**
     * Set temAnlRptElp.
     *
     * @param string $temAnlRptElp
     *
     * @return ElementPedagogi
     */
    public function setTemAnlRptElp($temAnlRptElp)
    {
        $this->temAnlRptElp = $temAnlRptElp;

        return $this;
    }

    /**
     * Get temAnlRptElp.
     *
     * @return string
     */
    public function getTemAnlRptElp()
    {
        return $this->temAnlRptElp;
    }

    /**
     * Set notMinRptElp.
     *
     * @param string|null $notMinRptElp
     *
     * @return ElementPedagogi
     */
    public function setNotMinRptElp($notMinRptElp = null)
    {
        $this->notMinRptElp = $notMinRptElp;

        return $this;
    }

    /**
     * Get notMinRptElp.
     *
     * @return string|null
     */
    public function getNotMinRptElp()
    {
        return $this->notMinRptElp;
    }

    /**
     * Set barMinRptElp.
     *
     * @param int|null $barMinRptElp
     *
     * @return ElementPedagogi
     */
    public function setBarMinRptElp($barMinRptElp = null)
    {
        $this->barMinRptElp = $barMinRptElp;

        return $this;
    }

    /**
     * Get barMinRptElp.
     *
     * @return int|null
     */
    public function getBarMinRptElp()
    {
        return $this->barMinRptElp;
    }

    /**
     * Set temConElp.
     *
     * @param string $temConElp
     *
     * @return ElementPedagogi
     */
    public function setTemConElp($temConElp)
    {
        $this->temConElp = $temConElp;

        return $this;
    }

    /**
     * Get temConElp.
     *
     * @return string
     */
    public function getTemConElp()
    {
        return $this->temConElp;
    }

    /**
     * Set durConElp.
     *
     * @param int|null $durConElp
     *
     * @return ElementPedagogi
     */
    public function setDurConElp($durConElp = null)
    {
        $this->durConElp = $durConElp;

        return $this;
    }

    /**
     * Get durConElp.
     *
     * @return int|null
     */
    public function getDurConElp()
    {
        return $this->durConElp;
    }

    /**
     * Set notMinConElp.
     *
     * @param string|null $notMinConElp
     *
     * @return ElementPedagogi
     */
    public function setNotMinConElp($notMinConElp = null)
    {
        $this->notMinConElp = $notMinConElp;

        return $this;
    }

    /**
     * Get notMinConElp.
     *
     * @return string|null
     */
    public function getNotMinConElp()
    {
        return $this->notMinConElp;
    }

    /**
     * Set barMinConElp.
     *
     * @param int|null $barMinConElp
     *
     * @return ElementPedagogi
     */
    public function setBarMinConElp($barMinConElp = null)
    {
        $this->barMinConElp = $barMinConElp;

        return $this;
    }

    /**
     * Get barMinConElp.
     *
     * @return int|null
     */
    public function getBarMinConElp()
    {
        return $this->barMinConElp;
    }

    /**
     * Set temCapElp.
     *
     * @param string $temCapElp
     *
     * @return ElementPedagogi
     */
    public function setTemCapElp($temCapElp)
    {
        $this->temCapElp = $temCapElp;

        return $this;
    }

    /**
     * Get temCapElp.
     *
     * @return string
     */
    public function getTemCapElp()
    {
        return $this->temCapElp;
    }

    /**
     * Set temSesUni.
     *
     * @param string $temSesUni
     *
     * @return ElementPedagogi
     */
    public function setTemSesUni($temSesUni)
    {
        $this->temSesUni = $temSesUni;

        return $this;
    }

    /**
     * Get temSesUni.
     *
     * @return string
     */
    public function getTemSesUni()
    {
        return $this->temSesUni;
    }

    /**
     * Set temAdi.
     *
     * @param string $temAdi
     *
     * @return ElementPedagogi
     */
    public function setTemAdi($temAdi)
    {
        $this->temAdi = $temAdi;

        return $this;
    }

    /**
     * Get temAdi.
     *
     * @return string
     */
    public function getTemAdi()
    {
        return $this->temAdi;
    }

    /**
     * Set temAdo.
     *
     * @param string $temAdo
     *
     * @return ElementPedagogi
     */
    public function setTemAdo($temAdo)
    {
        $this->temAdo = $temAdo;

        return $this;
    }

    /**
     * Get temAdo.
     *
     * @return string
     */
    public function getTemAdo()
    {
        return $this->temAdo;
    }

    /**
     * Set temHeuEnsElp.
     *
     * @param string $temHeuEnsElp
     *
     * @return ElementPedagogi
     */
    public function setTemHeuEnsElp($temHeuEnsElp)
    {
        $this->temHeuEnsElp = $temHeuEnsElp;

        return $this;
    }

    /**
     * Get temHeuEnsElp.
     *
     * @return string
     */
    public function getTemHeuEnsElp()
    {
        return $this->temHeuEnsElp;
    }

    /**
     * Set nbrEffPrvElp.
     *
     * @param int|null $nbrEffPrvElp
     *
     * @return ElementPedagogi
     */
    public function setNbrEffPrvElp($nbrEffPrvElp = null)
    {
        $this->nbrEffPrvElp = $nbrEffPrvElp;

        return $this;
    }

    /**
     * Get nbrEffPrvElp.
     *
     * @return int|null
     */
    public function getNbrEffPrvElp()
    {
        return $this->nbrEffPrvElp;
    }

    /**
     * Set nbrHeuCmElp.
     *
     * @param int|null $nbrHeuCmElp
     *
     * @return ElementPedagogi
     */
    public function setNbrHeuCmElp($nbrHeuCmElp = null)
    {
        $this->nbrHeuCmElp = $nbrHeuCmElp;

        return $this;
    }

    /**
     * Get nbrHeuCmElp.
     *
     * @return int|null
     */
    public function getNbrHeuCmElp()
    {
        return $this->nbrHeuCmElp;
    }

    /**
     * Set nbrHeuTdElp.
     *
     * @param int|null $nbrHeuTdElp
     *
     * @return ElementPedagogi
     */
    public function setNbrHeuTdElp($nbrHeuTdElp = null)
    {
        $this->nbrHeuTdElp = $nbrHeuTdElp;

        return $this;
    }

    /**
     * Get nbrHeuTdElp.
     *
     * @return int|null
     */
    public function getNbrHeuTdElp()
    {
        return $this->nbrHeuTdElp;
    }

    /**
     * Set nbrHeuTpElp.
     *
     * @param int|null $nbrHeuTpElp
     *
     * @return ElementPedagogi
     */
    public function setNbrHeuTpElp($nbrHeuTpElp = null)
    {
        $this->nbrHeuTpElp = $nbrHeuTpElp;

        return $this;
    }

    /**
     * Get nbrHeuTpElp.
     *
     * @return int|null
     */
    public function getNbrHeuTpElp()
    {
        return $this->nbrHeuTpElp;
    }

    /**
     * Set temMccElp.
     *
     * @param string $temMccElp
     *
     * @return ElementPedagogi
     */
    public function setTemMccElp($temMccElp)
    {
        $this->temMccElp = $temMccElp;

        return $this;
    }

    /**
     * Get temMccElp.
     *
     * @return string
     */
    public function getTemMccElp()
    {
        return $this->temMccElp;
    }

    /**
     * Set temRptDscElp.
     *
     * @param string $temRptDscElp
     *
     * @return ElementPedagogi
     */
    public function setTemRptDscElp($temRptDscElp)
    {
        $this->temRptDscElp = $temRptDscElp;

        return $this;
    }

    /**
     * Get temRptDscElp.
     *
     * @return string
     */
    public function getTemRptDscElp()
    {
        return $this->temRptDscElp;
    }

    /**
     * Set numPreElp.
     *
     * @param int|null $numPreElp
     *
     * @return ElementPedagogi
     */
    public function setNumPreElp($numPreElp = null)
    {
        $this->numPreElp = $numPreElp;

        return $this;
    }

    /**
     * Get numPreElp.
     *
     * @return int|null
     */
    public function getNumPreElp()
    {
        return $this->numPreElp;
    }

    /**
     * Set nbrCrdElp.
     *
     * @param string|null $nbrCrdElp
     *
     * @return ElementPedagogi
     */
    public function setNbrCrdElp($nbrCrdElp = null)
    {
        $this->nbrCrdElp = $nbrCrdElp;

        return $this;
    }

    /**
     * Get nbrCrdElp.
     *
     * @return string|null
     */
    public function getNbrCrdElp()
    {
        return $this->nbrCrdElp;
    }

    /**
     * Set temADisElp.
     *
     * @param string $temADisElp
     *
     * @return ElementPedagogi
     */
    public function setTemADisElp($temADisElp)
    {
        $this->temADisElp = $temADisElp;

        return $this;
    }

    /**
     * Get temADisElp.
     *
     * @return string
     */
    public function getTemADisElp()
    {
        return $this->temADisElp;
    }

    /**
     * Set capMaxElp.
     *
     * @param int|null $capMaxElp
     *
     * @return ElementPedagogi
     */
    public function setCapMaxElp($capMaxElp = null)
    {
        $this->capMaxElp = $capMaxElp;

        return $this;
    }

    /**
     * Get capMaxElp.
     *
     * @return int|null
     */
    public function getCapMaxElp()
    {
        return $this->capMaxElp;
    }

    /**
     * Set capIntElp.
     *
     * @param int|null $capIntElp
     *
     * @return ElementPedagogi
     */
    public function setCapIntElp($capIntElp = null)
    {
        $this->capIntElp = $capIntElp;

        return $this;
    }

    /**
     * Get capIntElp.
     *
     * @return int|null
     */
    public function getCapIntElp()
    {
        return $this->capIntElp;
    }

    /**
     * Set temMeiNotElp.
     *
     * @param string $temMeiNotElp
     *
     * @return ElementPedagogi
     */
    public function setTemMeiNotElp($temMeiNotElp)
    {
        $this->temMeiNotElp = $temMeiNotElp;

        return $this;
    }

    /**
     * Get temMeiNotElp.
     *
     * @return string
     */
    public function getTemMeiNotElp()
    {
        return $this->temMeiNotElp;
    }

    /**
     * Set temAjsElp.
     *
     * @param string $temAjsElp
     *
     * @return ElementPedagogi
     */
    public function setTemAjsElp($temAjsElp)
    {
        $this->temAjsElp = $temAjsElp;

        return $this;
    }

    /**
     * Get temAjsElp.
     *
     * @return string
     */
    public function getTemAjsElp()
    {
        return $this->temAjsElp;
    }

    /**
     * Set temStgElp.
     *
     * @param string $temStgElp
     *
     * @return ElementPedagogi
     */
    public function setTemStgElp($temStgElp)
    {
        $this->temStgElp = $temStgElp;

        return $this;
    }

    /**
     * Get temStgElp.
     *
     * @return string
     */
    public function getTemStgElp()
    {
        return $this->temStgElp;
    }

    /**
     * Set caractElp.
     *
     * @param string|null $caractElp
     *
     * @return ElementPedagogi
     */
    public function setCaractElp($caractElp = null)
    {
        $this->caractElp = $caractElp;

        return $this;
    }

    /**
     * Get caractElp.
     *
     * @return string|null
     */
    public function getCaractElp()
    {
        return $this->caractElp;
    }

    /**
     * Set nbrRngUtile.
     *
     * @param int|null $nbrRngUtile
     *
     * @return ElementPedagogi
     */
    public function setNbrRngUtile($nbrRngUtile = null)
    {
        $this->nbrRngUtile = $nbrRngUtile;

        return $this;
    }

    /**
     * Get nbrRngUtile.
     *
     * @return int|null
     */
    public function getNbrRngUtile()
    {
        return $this->nbrRngUtile;
    }

    /**
     * Set nbrListCompl.
     *
     * @param int|null $nbrListCompl
     *
     * @return ElementPedagogi
     */
    public function setNbrListCompl($nbrListCompl = null)
    {
        $this->nbrListCompl = $nbrListCompl;

        return $this;
    }

    /**
     * Get nbrListCompl.
     *
     * @return int|null
     */
    public function getNbrListCompl()
    {
        return $this->nbrListCompl;
    }

    /**
     * Set nbrMaxHorsEee.
     *
     * @param int|null $nbrMaxHorsEee
     *
     * @return ElementPedagogi
     */
    public function setNbrMaxHorsEee($nbrMaxHorsEee = null)
    {
        $this->nbrMaxHorsEee = $nbrMaxHorsEee;

        return $this;
    }

    /**
     * Get nbrMaxHorsEee.
     *
     * @return int|null
     */
    public function getNbrMaxHorsEee()
    {
        return $this->nbrMaxHorsEee;
    }

    /**
     * Set nbrMaxEssa.
     *
     * @param int|null $nbrMaxEssa
     *
     * @return ElementPedagogi
     */
    public function setNbrMaxEssa($nbrMaxEssa = null)
    {
        $this->nbrMaxEssa = $nbrMaxEssa;

        return $this;
    }

    /**
     * Get nbrMaxEssa.
     *
     * @return int|null
     */
    public function getNbrMaxEssa()
    {
        return $this->nbrMaxEssa;
    }

    /**
     * Set notMinLcElp.
     *
     * @param string|null $notMinLcElp
     *
     * @return ElementPedagogi
     */
    public function setNotMinLcElp($notMinLcElp = null)
    {
        $this->notMinLcElp = $notMinLcElp;

        return $this;
    }

    /**
     * Get notMinLcElp.
     *
     * @return string|null
     */
    public function getNotMinLcElp()
    {
        return $this->notMinLcElp;
    }

    /**
     * Set barMinLcElp.
     *
     * @param int|null $barMinLcElp
     *
     * @return ElementPedagogi
     */
    public function setBarMinLcElp($barMinLcElp = null)
    {
        $this->barMinLcElp = $barMinLcElp;

        return $this;
    }

    /**
     * Get barMinLcElp.
     *
     * @return int|null
     */
    public function getBarMinLcElp()
    {
        return $this->barMinLcElp;
    }

    /**
     * Set codRofElp.
     *
     * @param string|null $codRofElp
     *
     * @return ElementPedagogi
     */
    public function setCodRofElp($codRofElp = null)
    {
        $this->codRofElp = $codRofElp;

        return $this;
    }

    /**
     * Get codRofElp.
     *
     * @return string|null
     */
    public function getCodRofElp()
    {
        return $this->codRofElp;
    }

    /**
     * Set notMinMeiNotElp.
     *
     * @param string|null $notMinMeiNotElp
     *
     * @return ElementPedagogi
     */
    public function setNotMinMeiNotElp($notMinMeiNotElp = null)
    {
        $this->notMinMeiNotElp = $notMinMeiNotElp;

        return $this;
    }

    /**
     * Get notMinMeiNotElp.
     *
     * @return string|null
     */
    public function getNotMinMeiNotElp()
    {
        return $this->notMinMeiNotElp;
    }

    /**
     * Set barMinMeiNotElp.
     *
     * @param int|null $barMinMeiNotElp
     *
     * @return ElementPedagogi
     */
    public function setBarMinMeiNotElp($barMinMeiNotElp = null)
    {
        $this->barMinMeiNotElp = $barMinMeiNotElp;

        return $this;
    }

    /**
     * Get barMinMeiNotElp.
     *
     * @return int|null
     */
    public function getBarMinMeiNotElp()
    {
        return $this->barMinMeiNotElp;
    }

    /**
     * Set temHorsEtab.
     *
     * @param string|null $temHorsEtab
     *
     * @return ElementPedagogi
     */
    public function setTemHorsEtab($temHorsEtab = null)
    {
        $this->temHorsEtab = $temHorsEtab;

        return $this;
    }

    /**
     * Get temHorsEtab.
     *
     * @return string|null
     */
    public function getTemHorsEtab()
    {
        return $this->temHorsEtab;
    }

    /**
     * Set seuilOuv.
     *
     * @param int|null $seuilOuv
     *
     * @return ElementPedagogi
     */
    public function setSeuilOuv($seuilOuv = null)
    {
        $this->seuilOuv = $seuilOuv;

        return $this;
    }

    /**
     * Get seuilOuv.
     *
     * @return int|null
     */
    public function getSeuilOuv()
    {
        return $this->seuilOuv;
    }

    /**
     * Set temComElp.
     *
     * @param string $temComElp
     *
     * @return ElementPedagogi
     */
    public function setTemComElp($temComElp)
    {
        $this->temComElp = $temComElp;

        return $this;
    }

    /**
     * Get temComElp.
     *
     * @return string
     */
    public function getTemComElp()
    {
        return $this->temComElp;
    }

    /**
     * Set datModCom.
     *
     * @param \DateTime|null $datModCom
     *
     * @return ElementPedagogi
     */
    public function setDatModCom($datModCom = null)
    {
        $this->datModCom = $datModCom;

        return $this;
    }

    /**
     * Get datModCom.
     *
     * @return \DateTime|null
     */
    public function getDatModCom()
    {
        return $this->datModCom;
    }

    /**
     * Set codCmp.
     *
     * @param Composante|null $codCmp
     *
     * @return ElementPedagogi
     */
    public function setCodCmp(Composante $codCmp = null)
    {
        $this->codCmp = $codCmp;

        return $this;
    }

    /**
     * Get codCmp.
     *
     * @return Composante|null
     */
    public function getCodCmp()
    {
        return $this->codCmp;
    }

    /**
     * Set codNel.
     *
     * @param NatureElp|null $codNel
     *
     * @return ElementPedagogi
     */
    public function setCodNel(NatureElp $codNel = null)
    {
        $this->codNel = $codNel;

        return $this;
    }

    /**
     * Get codNel.
     *
     * @return NatureElp|null
     */
    public function getCodNel()
    {
        return $this->codNel;
    }

    /**
     * Set codPan1.
     *
     * @param PeriodeAno|null $codPan1
     *
     * @return ElementPedagogi
     */
    public function setCodPan1(PeriodeAno $codPan1 = null)
    {
        $this->codPan1 = $codPan1;

        return $this;
    }

    /**
     * Get codPan1.
     *
     * @return PeriodeAno|null
     */
    public function getCodPan1()
    {
        return $this->codPan1;
    }

    /**
     * Set codPan2.
     *
     * @param PeriodeAno|null $codPan2
     *
     * @return ElementPedagogi
     */
    public function setCodPan2(PeriodeAno $codPan2 = null)
    {
        $this->codPan2 = $codPan2;

        return $this;
    }

    /**
     * Get codPan2.
     *
     * @return PeriodeAno|null
     */
    public function getCodPan2()
    {
        return $this->codPan2;
    }

    /**
     * Set codPan3.
     *
     * @param PeriodeAno|null $codPan3
     *
     * @return ElementPedagogi
     */
    public function setCodPan3(PeriodeAno $codPan3 = null)
    {
        $this->codPan3 = $codPan3;

        return $this;
    }

    /**
     * Get codPan3.
     *
     * @return PeriodeAno|null
     */
    public function getCodPan3()
    {
        return $this->codPan3;
    }

    /**
     * Set codPan4.
     *
     * @param PeriodeAno|null $codPan4
     *
     * @return ElementPedagogi
     */
    public function setCodPan4(PeriodeAno $codPan4 = null)
    {
        $this->codPan4 = $codPan4;

        return $this;
    }

    /**
     * Get codPan4.
     *
     * @return PeriodeAno|null
     */
    public function getCodPan4()
    {
        return $this->codPan4;
    }

    /**
     * Set codPel.
     *
     * @param PeriodeElp|null $codPel
     *
     * @return ElementPedagogi
     */
    public function setCodPel(PeriodeElp $codPel = null)
    {
        $this->codPel = $codPel;

        return $this;
    }

    /**
     * Get codPel.
     *
     * @return PeriodeElp|null
     */
    public function getCodPel()
    {
        return $this->codPel;
    }

    /**
     * Set codScc.
     *
     * @param SectionCnu|null $codScc
     *
     * @return ElementPedagogi
     */
    public function setCodScc(SectionCnu $codScc = null)
    {
        $this->codScc = $codScc;

        return $this;
    }

    /**
     * Get codScc.
     *
     * @return SectionCnu|null
     */
    public function getCodScc()
    {
        return $this->codScc;
    }

    /**
     * Set codTrePac.
     *
     * @param TypResultat|null $codTrePac
     *
     * @return ElementPedagogi
     */
    public function setCodTrePac(TypResultat $codTrePac = null)
    {
        $this->codTrePac = $codTrePac;

        return $this;
    }

    /**
     * Get codTrePac.
     *
     * @return TypResultat|null
     */
    public function getCodTrePac()
    {
        return $this->codTrePac;
    }

    /**
     * Set codTreNlc.
     *
     * @param TypResultat|null $codTreNlc
     *
     * @return ElementPedagogi
     */
    public function setCodTreNlc(TypResultat $codTreNlc = null)
    {
        $this->codTreNlc = $codTreNlc;

        return $this;
    }

    /**
     * Get codTreNlc.
     *
     * @return TypResultat|null
     */
    public function getCodTreNlc()
    {
        return $this->codTreNlc;
    }

    /**
     * Set codTreNaj.
     *
     * @param TypResultat|null $codTreNaj
     *
     * @return ElementPedagogi
     */
    public function setCodTreNaj(TypResultat $codTreNaj = null)
    {
        $this->codTreNaj = $codTreNaj;

        return $this;
    }

    /**
     * Get codTreNaj.
     *
     * @return TypResultat|null
     */
    public function getCodTreNaj()
    {
        return $this->codTreNaj;
    }

    /**
     * Set codTreNex.
     *
     * @param TypResultat|null $codTreNex
     *
     * @return ElementPedagogi
     */
    public function setCodTreNex(TypResultat $codTreNex = null)
    {
        $this->codTreNex = $codTreNex;

        return $this;
    }

    /**
     * Get codTreNex.
     *
     * @return TypResultat|null
     */
    public function getCodTreNex()
    {
        return $this->codTreNex;
    }

    /**
     * Set codTrePde.
     *
     * @param TypResultat|null $codTrePde
     *
     * @return ElementPedagogi
     */
    public function setCodTrePde(TypResultat $codTrePde = null)
    {
        $this->codTrePde = $codTrePde;

        return $this;
    }

    /**
     * Get codTrePde.
     *
     * @return TypResultat|null
     */
    public function getCodTrePde()
    {
        return $this->codTrePde;
    }

    /**
     * Set codTreNde.
     *
     * @param TypResultat|null $codTreNde
     *
     * @return ElementPedagogi
     */
    public function setCodTreNde(TypResultat $codTreNde = null)
    {
        $this->codTreNde = $codTreNde;

        return $this;
    }

    /**
     * Get codTreNde.
     *
     * @return TypResultat|null
     */
    public function getCodTreNde()
    {
        return $this->codTreNde;
    }

    /**
     * Set codTreNdl.
     *
     * @param TypResultat|null $codTreNdl
     *
     * @return ElementPedagogi
     */
    public function setCodTreNdl(TypResultat $codTreNdl = null)
    {
        $this->codTreNdl = $codTreNdl;

        return $this;
    }

    /**
     * Get codTreNdl.
     *
     * @return TypResultat|null
     */
    public function getCodTreNdl()
    {
        return $this->codTreNdl;
    }
}
