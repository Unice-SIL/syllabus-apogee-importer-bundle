<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * VersionDiplome
 */
class VersionDiplome
{
    /**
     * @var int
     */
    private $codVrsVdi;

    /**
     * @var string
     */
    private $licVdi;

    /**
     * @var string|null
     */
    private $daaDebHabVdi;

    /**
     * @var string
     */
    private $daaDebRctVdi;

    /**
     * @var string
     */
    private $daaDebValVdi;

    /**
     * @var string|null
     */
    private $daaFinHabVdi;

    /**
     * @var string
     */
    private $daaFinRctVdi;

    /**
     * @var string
     */
    private $daaFinValVdi;

    /**
     * @var string|null
     */
    private $codDosHabVdi;

    /**
     * @var string
     */
    private $temNotVdi = 'N';

    /**
     * @var int|null
     */
    private $barSaiVdi;

    /**
     * @var string
     */
    private $temPntJurVdi = 'N';

    /**
     * @var string
     */
    private $temMndVdi = 'N';

    /**
     * @var string
     */
    private $temResVdi = 'O';

    /**
     * @var string
     */
    private $temJurVdi = 'O';

    /**
     * @var int|null
     */
    private $nbrAdmVdi;

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
    private $lim1Vdi;

    /**
     * @var string|null
     */
    private $lim2Vdi;

    /**
     * @var string|null
     */
    private $lim3Vdi;

    /**
     * @var bool|null
     */
    private $nbrMinSpeVdi;

    /**
     * @var bool|null
     */
    private $nbrMaxSpeVdi;

    /**
     * @var string
     */
    private $temResThsVdi = 'N';

    /**
     * @var int|null
     */
    private $durAnnVdi;

    /**
     * @var string|null
     */
    private $libWebVdi;

    /**
     * @var string|null
     */
    private $codCarVdi;

    /**
     * @var string|null
     */
    private $nbrCrdVdi;

    /**
     * @var string|null
     */
    private $codRofVdi;

    /**
     * @var string
     */
    private $temOffCom = 'N';

    /**
     * @var string
     */
    private $temOffDeloc = 'N';

    /**
     * @var string|null
     */
    private $forInm;

    /**
     * @var string|null
     */
    private $forInmp;

    /**
     * @var Diplome
     */
    private $codDip;


    /**
     * @var CursusLmd
     */
    private $codCur;

    /**
     * @var MentionVdi
     */
    private $codMev;

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
     * @var SpecialiteVdi
     */
    private $codSvd;

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
    private $codEtp;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codEtp = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set codVrsVdi.
     *
     * @param int $codVrsVdi
     *
     * @return VersionDiplome
     */
    public function setCodVrsVdi($codVrsVdi)
    {
        $this->codVrsVdi = $codVrsVdi;

        return $this;
    }

    /**
     * Get codVrsVdi.
     *
     * @return int
     */
    public function getCodVrsVdi()
    {
        return $this->codVrsVdi;
    }

    /**
     * Set licVdi.
     *
     * @param string $licVdi
     *
     * @return VersionDiplome
     */
    public function setLicVdi($licVdi)
    {
        $this->licVdi = $licVdi;

        return $this;
    }

    /**
     * Get licVdi.
     *
     * @return string
     */
    public function getLicVdi()
    {
        return $this->licVdi;
    }

    /**
     * Set daaDebHabVdi.
     *
     * @param string|null $daaDebHabVdi
     *
     * @return VersionDiplome
     */
    public function setDaaDebHabVdi($daaDebHabVdi = null)
    {
        $this->daaDebHabVdi = $daaDebHabVdi;

        return $this;
    }

    /**
     * Get daaDebHabVdi.
     *
     * @return string|null
     */
    public function getDaaDebHabVdi()
    {
        return $this->daaDebHabVdi;
    }

    /**
     * Set daaDebRctVdi.
     *
     * @param string $daaDebRctVdi
     *
     * @return VersionDiplome
     */
    public function setDaaDebRctVdi($daaDebRctVdi)
    {
        $this->daaDebRctVdi = $daaDebRctVdi;

        return $this;
    }

    /**
     * Get daaDebRctVdi.
     *
     * @return string
     */
    public function getDaaDebRctVdi()
    {
        return $this->daaDebRctVdi;
    }

    /**
     * Set daaDebValVdi.
     *
     * @param string $daaDebValVdi
     *
     * @return VersionDiplome
     */
    public function setDaaDebValVdi($daaDebValVdi)
    {
        $this->daaDebValVdi = $daaDebValVdi;

        return $this;
    }

    /**
     * Get daaDebValVdi.
     *
     * @return string
     */
    public function getDaaDebValVdi()
    {
        return $this->daaDebValVdi;
    }

    /**
     * Set daaFinHabVdi.
     *
     * @param string|null $daaFinHabVdi
     *
     * @return VersionDiplome
     */
    public function setDaaFinHabVdi($daaFinHabVdi = null)
    {
        $this->daaFinHabVdi = $daaFinHabVdi;

        return $this;
    }

    /**
     * Get daaFinHabVdi.
     *
     * @return string|null
     */
    public function getDaaFinHabVdi()
    {
        return $this->daaFinHabVdi;
    }

    /**
     * Set daaFinRctVdi.
     *
     * @param string $daaFinRctVdi
     *
     * @return VersionDiplome
     */
    public function setDaaFinRctVdi($daaFinRctVdi)
    {
        $this->daaFinRctVdi = $daaFinRctVdi;

        return $this;
    }

    /**
     * Get daaFinRctVdi.
     *
     * @return string
     */
    public function getDaaFinRctVdi()
    {
        return $this->daaFinRctVdi;
    }

    /**
     * Set daaFinValVdi.
     *
     * @param string $daaFinValVdi
     *
     * @return VersionDiplome
     */
    public function setDaaFinValVdi($daaFinValVdi)
    {
        $this->daaFinValVdi = $daaFinValVdi;

        return $this;
    }

    /**
     * Get daaFinValVdi.
     *
     * @return string
     */
    public function getDaaFinValVdi()
    {
        return $this->daaFinValVdi;
    }

    /**
     * Set codDosHabVdi.
     *
     * @param string|null $codDosHabVdi
     *
     * @return VersionDiplome
     */
    public function setCodDosHabVdi($codDosHabVdi = null)
    {
        $this->codDosHabVdi = $codDosHabVdi;

        return $this;
    }

    /**
     * Get codDosHabVdi.
     *
     * @return string|null
     */
    public function getCodDosHabVdi()
    {
        return $this->codDosHabVdi;
    }

    /**
     * Set temNotVdi.
     *
     * @param string $temNotVdi
     *
     * @return VersionDiplome
     */
    public function setTemNotVdi($temNotVdi)
    {
        $this->temNotVdi = $temNotVdi;

        return $this;
    }

    /**
     * Get temNotVdi.
     *
     * @return string
     */
    public function getTemNotVdi()
    {
        return $this->temNotVdi;
    }

    /**
     * Set barSaiVdi.
     *
     * @param int|null $barSaiVdi
     *
     * @return VersionDiplome
     */
    public function setBarSaiVdi($barSaiVdi = null)
    {
        $this->barSaiVdi = $barSaiVdi;

        return $this;
    }

    /**
     * Get barSaiVdi.
     *
     * @return int|null
     */
    public function getBarSaiVdi()
    {
        return $this->barSaiVdi;
    }

    /**
     * Set temPntJurVdi.
     *
     * @param string $temPntJurVdi
     *
     * @return VersionDiplome
     */
    public function setTemPntJurVdi($temPntJurVdi)
    {
        $this->temPntJurVdi = $temPntJurVdi;

        return $this;
    }

    /**
     * Get temPntJurVdi.
     *
     * @return string
     */
    public function getTemPntJurVdi()
    {
        return $this->temPntJurVdi;
    }

    /**
     * Set temMndVdi.
     *
     * @param string $temMndVdi
     *
     * @return VersionDiplome
     */
    public function setTemMndVdi($temMndVdi)
    {
        $this->temMndVdi = $temMndVdi;

        return $this;
    }

    /**
     * Get temMndVdi.
     *
     * @return string
     */
    public function getTemMndVdi()
    {
        return $this->temMndVdi;
    }

    /**
     * Set temResVdi.
     *
     * @param string $temResVdi
     *
     * @return VersionDiplome
     */
    public function setTemResVdi($temResVdi)
    {
        $this->temResVdi = $temResVdi;

        return $this;
    }

    /**
     * Get temResVdi.
     *
     * @return string
     */
    public function getTemResVdi()
    {
        return $this->temResVdi;
    }

    /**
     * Set temJurVdi.
     *
     * @param string $temJurVdi
     *
     * @return VersionDiplome
     */
    public function setTemJurVdi($temJurVdi)
    {
        $this->temJurVdi = $temJurVdi;

        return $this;
    }

    /**
     * Get temJurVdi.
     *
     * @return string
     */
    public function getTemJurVdi()
    {
        return $this->temJurVdi;
    }

    /**
     * Set nbrAdmVdi.
     *
     * @param int|null $nbrAdmVdi
     *
     * @return VersionDiplome
     */
    public function setNbrAdmVdi($nbrAdmVdi = null)
    {
        $this->nbrAdmVdi = $nbrAdmVdi;

        return $this;
    }

    /**
     * Get nbrAdmVdi.
     *
     * @return int|null
     */
    public function getNbrAdmVdi()
    {
        return $this->nbrAdmVdi;
    }

    /**
     * Set temSesUni.
     *
     * @param string $temSesUni
     *
     * @return VersionDiplome
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
     * @return VersionDiplome
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
     * @return VersionDiplome
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
     * Set lim1Vdi.
     *
     * @param string|null $lim1Vdi
     *
     * @return VersionDiplome
     */
    public function setLim1Vdi($lim1Vdi = null)
    {
        $this->lim1Vdi = $lim1Vdi;

        return $this;
    }

    /**
     * Get lim1Vdi.
     *
     * @return string|null
     */
    public function getLim1Vdi()
    {
        return $this->lim1Vdi;
    }

    /**
     * Set lim2Vdi.
     *
     * @param string|null $lim2Vdi
     *
     * @return VersionDiplome
     */
    public function setLim2Vdi($lim2Vdi = null)
    {
        $this->lim2Vdi = $lim2Vdi;

        return $this;
    }

    /**
     * Get lim2Vdi.
     *
     * @return string|null
     */
    public function getLim2Vdi()
    {
        return $this->lim2Vdi;
    }

    /**
     * Set lim3Vdi.
     *
     * @param string|null $lim3Vdi
     *
     * @return VersionDiplome
     */
    public function setLim3Vdi($lim3Vdi = null)
    {
        $this->lim3Vdi = $lim3Vdi;

        return $this;
    }

    /**
     * Get lim3Vdi.
     *
     * @return string|null
     */
    public function getLim3Vdi()
    {
        return $this->lim3Vdi;
    }

    /**
     * Set nbrMinSpeVdi.
     *
     * @param bool|null $nbrMinSpeVdi
     *
     * @return VersionDiplome
     */
    public function setNbrMinSpeVdi($nbrMinSpeVdi = null)
    {
        $this->nbrMinSpeVdi = $nbrMinSpeVdi;

        return $this;
    }

    /**
     * Get nbrMinSpeVdi.
     *
     * @return bool|null
     */
    public function getNbrMinSpeVdi()
    {
        return $this->nbrMinSpeVdi;
    }

    /**
     * Set nbrMaxSpeVdi.
     *
     * @param bool|null $nbrMaxSpeVdi
     *
     * @return VersionDiplome
     */
    public function setNbrMaxSpeVdi($nbrMaxSpeVdi = null)
    {
        $this->nbrMaxSpeVdi = $nbrMaxSpeVdi;

        return $this;
    }

    /**
     * Get nbrMaxSpeVdi.
     *
     * @return bool|null
     */
    public function getNbrMaxSpeVdi()
    {
        return $this->nbrMaxSpeVdi;
    }

    /**
     * Set temResThsVdi.
     *
     * @param string $temResThsVdi
     *
     * @return VersionDiplome
     */
    public function setTemResThsVdi($temResThsVdi)
    {
        $this->temResThsVdi = $temResThsVdi;

        return $this;
    }

    /**
     * Get temResThsVdi.
     *
     * @return string
     */
    public function getTemResThsVdi()
    {
        return $this->temResThsVdi;
    }

    /**
     * Set durAnnVdi.
     *
     * @param int|null $durAnnVdi
     *
     * @return VersionDiplome
     */
    public function setDurAnnVdi($durAnnVdi = null)
    {
        $this->durAnnVdi = $durAnnVdi;

        return $this;
    }

    /**
     * Get durAnnVdi.
     *
     * @return int|null
     */
    public function getDurAnnVdi()
    {
        return $this->durAnnVdi;
    }

    /**
     * Set libWebVdi.
     *
     * @param string|null $libWebVdi
     *
     * @return VersionDiplome
     */
    public function setLibWebVdi($libWebVdi = null)
    {
        $this->libWebVdi = $libWebVdi;

        return $this;
    }

    /**
     * Get libWebVdi.
     *
     * @return string|null
     */
    public function getLibWebVdi()
    {
        return $this->libWebVdi;
    }

    /**
     * Set codCarVdi.
     *
     * @param string|null $codCarVdi
     *
     * @return VersionDiplome
     */
    public function setCodCarVdi($codCarVdi = null)
    {
        $this->codCarVdi = $codCarVdi;

        return $this;
    }

    /**
     * Get codCarVdi.
     *
     * @return string|null
     */
    public function getCodCarVdi()
    {
        return $this->codCarVdi;
    }

    /**
     * Set nbrCrdVdi.
     *
     * @param string|null $nbrCrdVdi
     *
     * @return VersionDiplome
     */
    public function setNbrCrdVdi($nbrCrdVdi = null)
    {
        $this->nbrCrdVdi = $nbrCrdVdi;

        return $this;
    }

    /**
     * Get nbrCrdVdi.
     *
     * @return string|null
     */
    public function getNbrCrdVdi()
    {
        return $this->nbrCrdVdi;
    }

    /**
     * Set codRofVdi.
     *
     * @param string|null $codRofVdi
     *
     * @return VersionDiplome
     */
    public function setCodRofVdi($codRofVdi = null)
    {
        $this->codRofVdi = $codRofVdi;

        return $this;
    }

    /**
     * Get codRofVdi.
     *
     * @return string|null
     */
    public function getCodRofVdi()
    {
        return $this->codRofVdi;
    }

    /**
     * Set temOffCom.
     *
     * @param string $temOffCom
     *
     * @return VersionDiplome
     */
    public function setTemOffCom($temOffCom)
    {
        $this->temOffCom = $temOffCom;

        return $this;
    }

    /**
     * Get temOffCom.
     *
     * @return string
     */
    public function getTemOffCom()
    {
        return $this->temOffCom;
    }

    /**
     * Set temOffDeloc.
     *
     * @param string $temOffDeloc
     *
     * @return VersionDiplome
     */
    public function setTemOffDeloc($temOffDeloc)
    {
        $this->temOffDeloc = $temOffDeloc;

        return $this;
    }

    /**
     * Get temOffDeloc.
     *
     * @return string
     */
    public function getTemOffDeloc()
    {
        return $this->temOffDeloc;
    }

    /**
     * Set forInm.
     *
     * @param string|null $forInm
     *
     * @return VersionDiplome
     */
    public function setForInm($forInm = null)
    {
        $this->forInm = $forInm;

        return $this;
    }

    /**
     * Get forInm.
     *
     * @return string|null
     */
    public function getForInm()
    {
        return $this->forInm;
    }

    /**
     * Set forInmp.
     *
     * @param string|null $forInmp
     *
     * @return VersionDiplome
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
     * Set codDip.
     *
     * @param Diplome $codDip
     *
     * @return VersionDiplome
     */
    public function setCodDip(Diplome $codDip)
    {
        $this->codDip = $codDip;

        return $this;
    }

    /**
     * Get codDip.
     *
     * @return Diplome
     */
    public function getCodDip()
    {
        return $this->codDip;
    }

    /**
     * Set codCur.
     *
     * @param CursusLmd|null $codCur
     *
     * @return VersionDiplome
     */
    public function setCodCur(CursusLmd $codCur = null)
    {
        $this->codCur = $codCur;

        return $this;
    }

    /**
     * Get codCur.
     *
     * @return CursusLmd|null
     */
    public function getCodCur()
    {
        return $this->codCur;
    }

    /**
     * Set codMev.
     *
     * @param MentionVdi|null $codMev
     *
     * @return VersionDiplome
     */
    public function setCodMev(MentionVdi $codMev = null)
    {
        $this->codMev = $codMev;

        return $this;
    }

    /**
     * Get codMev.
     *
     * @return MentionVdi|null
     */
    public function getCodMev()
    {
        return $this->codMev;
    }

    /**
     * Set codPan1.
     *
     * @param PeriodeAno|null $codPan1
     *
     * @return VersionDiplome
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
     * @return VersionDiplome
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
     * @return VersionDiplome
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
     * @return VersionDiplome
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
     * Set codSvd.
     *
     * @param SpecialiteVdi|null $codSvd
     *
     * @return VersionDiplome
     */
    public function setCodSvd(SpecialiteVdi $codSvd = null)
    {
        $this->codSvd = $codSvd;

        return $this;
    }

    /**
     * Get codSvd.
     *
     * @return SpecialiteVdi|null
     */
    public function getCodSvd()
    {
        return $this->codSvd;
    }

    /**
     * Set codTrePos.
     *
     * @param TypResultat|null $codTrePos
     *
     * @return VersionDiplome
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
     * @return VersionDiplome
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
     * Add codEtp.
     *
     * @param VersionEtape $codEtp
     *
     * @return VersionDiplome
     */
    public function addCodEtp(VersionEtape $codEtp)
    {
        $this->codEtp[] = $codEtp;

        return $this;
    }

    /**
     * Remove codEtp.
     *
     * @param VersionEtape $codEtp
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCodEtp(VersionEtape $codEtp)
    {
        return $this->codEtp->removeElement($codEtp);
    }

    /**
     * Get codEtp.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCodEtp()
    {
        return $this->codEtp;
    }
}
