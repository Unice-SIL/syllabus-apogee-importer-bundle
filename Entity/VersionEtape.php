<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * VersionEtape
 */
class VersionEtape
{
    /**
     * @var int
     */
    private $codVrsVet;

    /**
     * @var string|null
     */
    private $libCmtVet;

    /**
     * @var int|null
     */
    private $nbrVolHorVet;

    /**
     * @var string
     */
    private $temTlsVet = 'O';

    /**
     * @var string
     */
    private $temNotVet = 'N';

    /**
     * @var int|null
     */
    private $barSaiVet;

    /**
     * @var string
     */
    private $temPntJurVet = 'N';

    /**
     * @var string
     */
    private $temMndVet = 'N';

    /**
     * @var string
     */
    private $temResVet = 'O';

    /**
     * @var string
     */
    private $temJurVet = 'N';

    /**
     * @var int|null
     */
    private $nbrAdmVet;

    /**
     * @var string
     */
    private $temDipVet = 'N';

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
     * @var string|null
     */
    private $lim1Vet;

    /**
     * @var string|null
     */
    private $lim2Vet;

    /**
     * @var string|null
     */
    private $lim3Vet;

    /**
     * @var \DateTime|null
     */
    private $datDebMinVet;

    /**
     * @var \DateTime|null
     */
    private $datFinMinVet;

    /**
     * @var string|null
     */
    private $temOpiMinVet = 'N';

    /**
     * @var string|null
     */
    private $libWebVet;

    /**
     * @var string|null
     */
    private $nbrCrdVet;

    /**
     * @var string|null
     */
    private $codCipAdipVet;

    /**
     * @var \DateTime|null
     */
    private $datDebMinpVet;

    /**
     * @var \DateTime|null
     */
    private $datFinMinpVet;

    /**
     * @var string
     */
    private $temReinsSansDelib = 'N';

    /**
     * @var string|null
     */
    private $codCgeMinpVet;

    /**
     * @var string
     */
    private $temPmt3fVetWeb = 'N';

    /**
     * @var string|null
     */
    private $grpPacesVet;

    /**
     * @var \DateTime|null
     */
    private $datDebPacesSim;

    /**
     * @var \DateTime|null
     */
    private $datFinPacesSim;

    /**
     * @var \DateTime|null
     */
    private $datDebPacesRee;

    /**
     * @var \DateTime|null
     */
    private $datFinPacesRee;

    /**
     * @var \DateTime|null
     */
    private $datDebProvPacesSim;

    /**
     * @var \DateTime|null
     */
    private $datFinProvPacesSim;

    /**
     * @var \DateTime|null
     */
    private $datDebProvPacesRee;

    /**
     * @var \DateTime|null
     */
    private $datFinProvPacesRee;

    /**
     * @var \DateTime|null
     */
    private $datDebDefPacesRee;

    /**
     * @var \DateTime|null
     */
    private $datFinDefPacesRee;

    /**
     * @var string
     */
    private $temHebVet = 'N';

    /**
     * @var string|null
     */
    private $forInmp;

    /**
     * @var Etape
     */
    private $codEtp;

    /**
     * @var CentreGestion
     */
    private $codCgeMinVet;

    /**
     * @var Composante
     */
    private $codCmp;

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
     * @var TypResultat
     */
    private $codTrePos;

    /**
     * @var TypResultat
     */
    private $codTreNeg;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $codDip;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codDip = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set codVrsVet.
     *
     * @param int $codVrsVet
     *
     * @return VersionEtape
     */
    public function setCodVrsVet($codVrsVet)
    {
        $this->codVrsVet = $codVrsVet;

        return $this;
    }

    /**
     * Get codVrsVet.
     *
     * @return int
     */
    public function getCodVrsVet()
    {
        return $this->codVrsVet;
    }

    /**
     * Set libCmtVet.
     *
     * @param string|null $libCmtVet
     *
     * @return VersionEtape
     */
    public function setLibCmtVet($libCmtVet = null)
    {
        $this->libCmtVet = $libCmtVet;

        return $this;
    }

    /**
     * Get libCmtVet.
     *
     * @return string|null
     */
    public function getLibCmtVet()
    {
        return $this->libCmtVet;
    }

    /**
     * Set nbrVolHorVet.
     *
     * @param int|null $nbrVolHorVet
     *
     * @return VersionEtape
     */
    public function setNbrVolHorVet($nbrVolHorVet = null)
    {
        $this->nbrVolHorVet = $nbrVolHorVet;

        return $this;
    }

    /**
     * Get nbrVolHorVet.
     *
     * @return int|null
     */
    public function getNbrVolHorVet()
    {
        return $this->nbrVolHorVet;
    }

    /**
     * Set temTlsVet.
     *
     * @param string $temTlsVet
     *
     * @return VersionEtape
     */
    public function setTemTlsVet($temTlsVet)
    {
        $this->temTlsVet = $temTlsVet;

        return $this;
    }

    /**
     * Get temTlsVet.
     *
     * @return string
     */
    public function getTemTlsVet()
    {
        return $this->temTlsVet;
    }

    /**
     * Set temNotVet.
     *
     * @param string $temNotVet
     *
     * @return VersionEtape
     */
    public function setTemNotVet($temNotVet)
    {
        $this->temNotVet = $temNotVet;

        return $this;
    }

    /**
     * Get temNotVet.
     *
     * @return string
     */
    public function getTemNotVet()
    {
        return $this->temNotVet;
    }

    /**
     * Set barSaiVet.
     *
     * @param int|null $barSaiVet
     *
     * @return VersionEtape
     */
    public function setBarSaiVet($barSaiVet = null)
    {
        $this->barSaiVet = $barSaiVet;

        return $this;
    }

    /**
     * Get barSaiVet.
     *
     * @return int|null
     */
    public function getBarSaiVet()
    {
        return $this->barSaiVet;
    }

    /**
     * Set temPntJurVet.
     *
     * @param string $temPntJurVet
     *
     * @return VersionEtape
     */
    public function setTemPntJurVet($temPntJurVet)
    {
        $this->temPntJurVet = $temPntJurVet;

        return $this;
    }

    /**
     * Get temPntJurVet.
     *
     * @return string
     */
    public function getTemPntJurVet()
    {
        return $this->temPntJurVet;
    }

    /**
     * Set temMndVet.
     *
     * @param string $temMndVet
     *
     * @return VersionEtape
     */
    public function setTemMndVet($temMndVet)
    {
        $this->temMndVet = $temMndVet;

        return $this;
    }

    /**
     * Get temMndVet.
     *
     * @return string
     */
    public function getTemMndVet()
    {
        return $this->temMndVet;
    }

    /**
     * Set temResVet.
     *
     * @param string $temResVet
     *
     * @return VersionEtape
     */
    public function setTemResVet($temResVet)
    {
        $this->temResVet = $temResVet;

        return $this;
    }

    /**
     * Get temResVet.
     *
     * @return string
     */
    public function getTemResVet()
    {
        return $this->temResVet;
    }

    /**
     * Set temJurVet.
     *
     * @param string $temJurVet
     *
     * @return VersionEtape
     */
    public function setTemJurVet($temJurVet)
    {
        $this->temJurVet = $temJurVet;

        return $this;
    }

    /**
     * Get temJurVet.
     *
     * @return string
     */
    public function getTemJurVet()
    {
        return $this->temJurVet;
    }

    /**
     * Set nbrAdmVet.
     *
     * @param int|null $nbrAdmVet
     *
     * @return VersionEtape
     */
    public function setNbrAdmVet($nbrAdmVet = null)
    {
        $this->nbrAdmVet = $nbrAdmVet;

        return $this;
    }

    /**
     * Get nbrAdmVet.
     *
     * @return int|null
     */
    public function getNbrAdmVet()
    {
        return $this->nbrAdmVet;
    }

    /**
     * Set temDipVet.
     *
     * @param string $temDipVet
     *
     * @return VersionEtape
     */
    public function setTemDipVet($temDipVet)
    {
        $this->temDipVet = $temDipVet;

        return $this;
    }

    /**
     * Get temDipVet.
     *
     * @return string
     */
    public function getTemDipVet()
    {
        return $this->temDipVet;
    }

    /**
     * Set temSesUni.
     *
     * @param string $temSesUni
     *
     * @return VersionEtape
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
     * @return VersionEtape
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
     * @return VersionEtape
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
     * Set lim1Vet.
     *
     * @param string|null $lim1Vet
     *
     * @return VersionEtape
     */
    public function setLim1Vet($lim1Vet = null)
    {
        $this->lim1Vet = $lim1Vet;

        return $this;
    }

    /**
     * Get lim1Vet.
     *
     * @return string|null
     */
    public function getLim1Vet()
    {
        return $this->lim1Vet;
    }

    /**
     * Set lim2Vet.
     *
     * @param string|null $lim2Vet
     *
     * @return VersionEtape
     */
    public function setLim2Vet($lim2Vet = null)
    {
        $this->lim2Vet = $lim2Vet;

        return $this;
    }

    /**
     * Get lim2Vet.
     *
     * @return string|null
     */
    public function getLim2Vet()
    {
        return $this->lim2Vet;
    }

    /**
     * Set lim3Vet.
     *
     * @param string|null $lim3Vet
     *
     * @return VersionEtape
     */
    public function setLim3Vet($lim3Vet = null)
    {
        $this->lim3Vet = $lim3Vet;

        return $this;
    }

    /**
     * Get lim3Vet.
     *
     * @return string|null
     */
    public function getLim3Vet()
    {
        return $this->lim3Vet;
    }

    /**
     * Set datDebMinVet.
     *
     * @param \DateTime|null $datDebMinVet
     *
     * @return VersionEtape
     */
    public function setDatDebMinVet($datDebMinVet = null)
    {
        $this->datDebMinVet = $datDebMinVet;

        return $this;
    }

    /**
     * Get datDebMinVet.
     *
     * @return \DateTime|null
     */
    public function getDatDebMinVet()
    {
        return $this->datDebMinVet;
    }

    /**
     * Set datFinMinVet.
     *
     * @param \DateTime|null $datFinMinVet
     *
     * @return VersionEtape
     */
    public function setDatFinMinVet($datFinMinVet = null)
    {
        $this->datFinMinVet = $datFinMinVet;

        return $this;
    }

    /**
     * Get datFinMinVet.
     *
     * @return \DateTime|null
     */
    public function getDatFinMinVet()
    {
        return $this->datFinMinVet;
    }

    /**
     * Set temOpiMinVet.
     *
     * @param string|null $temOpiMinVet
     *
     * @return VersionEtape
     */
    public function setTemOpiMinVet($temOpiMinVet = null)
    {
        $this->temOpiMinVet = $temOpiMinVet;

        return $this;
    }

    /**
     * Get temOpiMinVet.
     *
     * @return string|null
     */
    public function getTemOpiMinVet()
    {
        return $this->temOpiMinVet;
    }

    /**
     * Set libWebVet.
     *
     * @param string|null $libWebVet
     *
     * @return VersionEtape
     */
    public function setLibWebVet($libWebVet = null)
    {
        $this->libWebVet = $libWebVet;

        return $this;
    }

    /**
     * Get libWebVet.
     *
     * @return string|null
     */
    public function getLibWebVet()
    {
        return $this->libWebVet;
    }

    /**
     * Set nbrCrdVet.
     *
     * @param string|null $nbrCrdVet
     *
     * @return VersionEtape
     */
    public function setNbrCrdVet($nbrCrdVet = null)
    {
        $this->nbrCrdVet = $nbrCrdVet;

        return $this;
    }

    /**
     * Get nbrCrdVet.
     *
     * @return string|null
     */
    public function getNbrCrdVet()
    {
        return $this->nbrCrdVet;
    }

    /**
     * Set codCipAdipVet.
     *
     * @param string|null $codCipAdipVet
     *
     * @return VersionEtape
     */
    public function setCodCipAdipVet($codCipAdipVet = null)
    {
        $this->codCipAdipVet = $codCipAdipVet;

        return $this;
    }

    /**
     * Get codCipAdipVet.
     *
     * @return string|null
     */
    public function getCodCipAdipVet()
    {
        return $this->codCipAdipVet;
    }

    /**
     * Set datDebMinpVet.
     *
     * @param \DateTime|null $datDebMinpVet
     *
     * @return VersionEtape
     */
    public function setDatDebMinpVet($datDebMinpVet = null)
    {
        $this->datDebMinpVet = $datDebMinpVet;

        return $this;
    }

    /**
     * Get datDebMinpVet.
     *
     * @return \DateTime|null
     */
    public function getDatDebMinpVet()
    {
        return $this->datDebMinpVet;
    }

    /**
     * Set datFinMinpVet.
     *
     * @param \DateTime|null $datFinMinpVet
     *
     * @return VersionEtape
     */
    public function setDatFinMinpVet($datFinMinpVet = null)
    {
        $this->datFinMinpVet = $datFinMinpVet;

        return $this;
    }

    /**
     * Get datFinMinpVet.
     *
     * @return \DateTime|null
     */
    public function getDatFinMinpVet()
    {
        return $this->datFinMinpVet;
    }

    /**
     * Set temReinsSansDelib.
     *
     * @param string $temReinsSansDelib
     *
     * @return VersionEtape
     */
    public function setTemReinsSansDelib($temReinsSansDelib)
    {
        $this->temReinsSansDelib = $temReinsSansDelib;

        return $this;
    }

    /**
     * Get temReinsSansDelib.
     *
     * @return string
     */
    public function getTemReinsSansDelib()
    {
        return $this->temReinsSansDelib;
    }

    /**
     * Set codCgeMinpVet.
     *
     * @param string|null $codCgeMinpVet
     *
     * @return VersionEtape
     */
    public function setCodCgeMinpVet($codCgeMinpVet = null)
    {
        $this->codCgeMinpVet = $codCgeMinpVet;

        return $this;
    }

    /**
     * Get codCgeMinpVet.
     *
     * @return string|null
     */
    public function getCodCgeMinpVet()
    {
        return $this->codCgeMinpVet;
    }

    /**
     * Set temPmt3fVetWeb.
     *
     * @param string $temPmt3fVetWeb
     *
     * @return VersionEtape
     */
    public function setTemPmt3fVetWeb($temPmt3fVetWeb)
    {
        $this->temPmt3fVetWeb = $temPmt3fVetWeb;

        return $this;
    }

    /**
     * Get temPmt3fVetWeb.
     *
     * @return string
     */
    public function getTemPmt3fVetWeb()
    {
        return $this->temPmt3fVetWeb;
    }

    /**
     * Set grpPacesVet.
     *
     * @param string|null $grpPacesVet
     *
     * @return VersionEtape
     */
    public function setGrpPacesVet($grpPacesVet = null)
    {
        $this->grpPacesVet = $grpPacesVet;

        return $this;
    }

    /**
     * Get grpPacesVet.
     *
     * @return string|null
     */
    public function getGrpPacesVet()
    {
        return $this->grpPacesVet;
    }

    /**
     * Set datDebPacesSim.
     *
     * @param \DateTime|null $datDebPacesSim
     *
     * @return VersionEtape
     */
    public function setDatDebPacesSim($datDebPacesSim = null)
    {
        $this->datDebPacesSim = $datDebPacesSim;

        return $this;
    }

    /**
     * Get datDebPacesSim.
     *
     * @return \DateTime|null
     */
    public function getDatDebPacesSim()
    {
        return $this->datDebPacesSim;
    }

    /**
     * Set datFinPacesSim.
     *
     * @param \DateTime|null $datFinPacesSim
     *
     * @return VersionEtape
     */
    public function setDatFinPacesSim($datFinPacesSim = null)
    {
        $this->datFinPacesSim = $datFinPacesSim;

        return $this;
    }

    /**
     * Get datFinPacesSim.
     *
     * @return \DateTime|null
     */
    public function getDatFinPacesSim()
    {
        return $this->datFinPacesSim;
    }

    /**
     * Set datDebPacesRee.
     *
     * @param \DateTime|null $datDebPacesRee
     *
     * @return VersionEtape
     */
    public function setDatDebPacesRee($datDebPacesRee = null)
    {
        $this->datDebPacesRee = $datDebPacesRee;

        return $this;
    }

    /**
     * Get datDebPacesRee.
     *
     * @return \DateTime|null
     */
    public function getDatDebPacesRee()
    {
        return $this->datDebPacesRee;
    }

    /**
     * Set datFinPacesRee.
     *
     * @param \DateTime|null $datFinPacesRee
     *
     * @return VersionEtape
     */
    public function setDatFinPacesRee($datFinPacesRee = null)
    {
        $this->datFinPacesRee = $datFinPacesRee;

        return $this;
    }

    /**
     * Get datFinPacesRee.
     *
     * @return \DateTime|null
     */
    public function getDatFinPacesRee()
    {
        return $this->datFinPacesRee;
    }

    /**
     * Set datDebProvPacesSim.
     *
     * @param \DateTime|null $datDebProvPacesSim
     *
     * @return VersionEtape
     */
    public function setDatDebProvPacesSim($datDebProvPacesSim = null)
    {
        $this->datDebProvPacesSim = $datDebProvPacesSim;

        return $this;
    }

    /**
     * Get datDebProvPacesSim.
     *
     * @return \DateTime|null
     */
    public function getDatDebProvPacesSim()
    {
        return $this->datDebProvPacesSim;
    }

    /**
     * Set datFinProvPacesSim.
     *
     * @param \DateTime|null $datFinProvPacesSim
     *
     * @return VersionEtape
     */
    public function setDatFinProvPacesSim($datFinProvPacesSim = null)
    {
        $this->datFinProvPacesSim = $datFinProvPacesSim;

        return $this;
    }

    /**
     * Get datFinProvPacesSim.
     *
     * @return \DateTime|null
     */
    public function getDatFinProvPacesSim()
    {
        return $this->datFinProvPacesSim;
    }

    /**
     * Set datDebProvPacesRee.
     *
     * @param \DateTime|null $datDebProvPacesRee
     *
     * @return VersionEtape
     */
    public function setDatDebProvPacesRee($datDebProvPacesRee = null)
    {
        $this->datDebProvPacesRee = $datDebProvPacesRee;

        return $this;
    }

    /**
     * Get datDebProvPacesRee.
     *
     * @return \DateTime|null
     */
    public function getDatDebProvPacesRee()
    {
        return $this->datDebProvPacesRee;
    }

    /**
     * Set datFinProvPacesRee.
     *
     * @param \DateTime|null $datFinProvPacesRee
     *
     * @return VersionEtape
     */
    public function setDatFinProvPacesRee($datFinProvPacesRee = null)
    {
        $this->datFinProvPacesRee = $datFinProvPacesRee;

        return $this;
    }

    /**
     * Get datFinProvPacesRee.
     *
     * @return \DateTime|null
     */
    public function getDatFinProvPacesRee()
    {
        return $this->datFinProvPacesRee;
    }

    /**
     * Set datDebDefPacesRee.
     *
     * @param \DateTime|null $datDebDefPacesRee
     *
     * @return VersionEtape
     */
    public function setDatDebDefPacesRee($datDebDefPacesRee = null)
    {
        $this->datDebDefPacesRee = $datDebDefPacesRee;

        return $this;
    }

    /**
     * Get datDebDefPacesRee.
     *
     * @return \DateTime|null
     */
    public function getDatDebDefPacesRee()
    {
        return $this->datDebDefPacesRee;
    }

    /**
     * Set datFinDefPacesRee.
     *
     * @param \DateTime|null $datFinDefPacesRee
     *
     * @return VersionEtape
     */
    public function setDatFinDefPacesRee($datFinDefPacesRee = null)
    {
        $this->datFinDefPacesRee = $datFinDefPacesRee;

        return $this;
    }

    /**
     * Get datFinDefPacesRee.
     *
     * @return \DateTime|null
     */
    public function getDatFinDefPacesRee()
    {
        return $this->datFinDefPacesRee;
    }

    /**
     * Set temHebVet.
     *
     * @param string $temHebVet
     *
     * @return VersionEtape
     */
    public function setTemHebVet($temHebVet)
    {
        $this->temHebVet = $temHebVet;

        return $this;
    }

    /**
     * Get temHebVet.
     *
     * @return string
     */
    public function getTemHebVet()
    {
        return $this->temHebVet;
    }

    /**
     * Set forInmp.
     *
     * @param string|null $forInmp
     *
     * @return VersionEtape
     */
    public function setForInmp($forInmp = null)
    {
        $this->forInmp = $forInmp;

        return $this;
    }

    /**
     * Get forInmp.
     *
     * @return string|null
     */
    public function getForInmp()
    {
        return $this->forInmp;
    }

    /**
     * Set codEtp.
     *
     * @param Etape $codEtp
     *
     * @return VersionEtape
     */
    public function setCodEtp(Etape $codEtp)
    {
        $this->codEtp = $codEtp;

        return $this;
    }

    /**
     * Get codEtp.
     *
     * @return Etape
     */
    public function getCodEtp()
    {
        return $this->codEtp;
    }

    /**
     * Set codCgeMinVet.
     *
     * @param CentreGestion|null $codCgeMinVet
     *
     * @return VersionEtape
     */
    public function setCodCgeMinVet(CentreGestion $codCgeMinVet = null)
    {
        $this->codCgeMinVet = $codCgeMinVet;

        return $this;
    }

    /**
     * Get codCgeMinVet.
     *
     * @return CentreGestion|null
     */
    public function getCodCgeMinVet()
    {
        return $this->codCgeMinVet;
    }

    /**
     * Set codCmp.
     *
     * @param Composante|null $codCmp
     *
     * @return VersionEtape
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
     * Set codPan1.
     *
     * @param PeriodeAno|null $codPan1
     *
     * @return VersionEtape
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
     * @return VersionEtape
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
     * @return VersionEtape
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
     * @return VersionEtape
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
     * Set codTrePos.
     *
     * @param TypResultat|null $codTrePos
     *
     * @return VersionEtape
     */
    public function setCodTrePos(TypResultat $codTrePos = null)
    {
        $this->codTrePos = $codTrePos;

        return $this;
    }

    /**
     * Get codTrePos.
     *
     * @return TypResultat|null
     */
    public function getCodTrePos()
    {
        return $this->codTrePos;
    }

    /**
     * Set codTreNeg.
     *
     * @param TypResultat|null $codTreNeg
     *
     * @return VersionEtape
     */
    public function setCodTreNeg(TypResultat $codTreNeg = null)
    {
        $this->codTreNeg = $codTreNeg;

        return $this;
    }

    /**
     * Get codTreNeg.
     *
     * @return TypResultat|null
     */
    public function getCodTreNeg()
    {
        return $this->codTreNeg;
    }

    /**
     * Add codDip.
     *
     * @param VersionDiplome $codDip
     *
     * @return VersionEtape
     */
    public function addCodDip(VersionDiplome $codDip)
    {
        $this->codDip[] = $codDip;

        return $this;
    }

    /**
     * Remove codDip.
     *
     * @param VersionDiplome $codDip
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCodDip(VersionDiplome $codDip)
    {
        return $this->codDip->removeElement($codDip);
    }

    /**
     * Get codDip.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCodDip()
    {
        return $this->codDip;
    }
}
