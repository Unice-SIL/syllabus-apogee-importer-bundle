<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * Diplome
 */
class Diplome
{
    /**
     * @var string
     */
    private $codDip;

    /**
     * @var string
     */
    private $libDip;

    /**
     * @var string
     */
    private $licDip;

    /**
     * @var bool|null
     */
    private $nbrMaxInscDeug;

    /**
     * @var string
     */
    private $temCouAccTrvDip = 'O';

    /**
     * @var string
     */
    private $temOuvDrtSsoDip = 'O';

    /**
     * @var Cycle
     */
    private $codCyc;

    /**
     * @var DomaineFormationDip
     */
    private $codDfd;

    /**
     * @var NatureDiplome
     */
    private $codNdi;

    /**
     * @var TypDiplome
     */
    private $codTpdEtb;


    /**
     * Get codDip.
     *
     * @return string
     */
    public function getCodDip()
    {
        return $this->codDip;
    }

    /**
     * Set libDip.
     *
     * @param string $libDip
     *
     * @return Diplome
     */
    public function setLibDip($libDip)
    {
        $this->libDip = $libDip;

        return $this;
    }

    /**
     * Get libDip.
     *
     * @return string
     */
    public function getLibDip()
    {
        return $this->libDip;
    }

    /**
     * Set licDip.
     *
     * @param string $licDip
     *
     * @return Diplome
     */
    public function setLicDip($licDip)
    {
        $this->licDip = $licDip;

        return $this;
    }

    /**
     * Get licDip.
     *
     * @return string
     */
    public function getLicDip()
    {
        return $this->licDip;
    }

    /**
     * Set nbrMaxInscDeug.
     *
     * @param bool|null $nbrMaxInscDeug
     *
     * @return Diplome
     */
    public function setNbrMaxInscDeug($nbrMaxInscDeug = null)
    {
        $this->nbrMaxInscDeug = $nbrMaxInscDeug;

        return $this;
    }

    /**
     * Get nbrMaxInscDeug.
     *
     * @return bool|null
     */
    public function getNbrMaxInscDeug()
    {
        return $this->nbrMaxInscDeug;
    }

    /**
     * Set temCouAccTrvDip.
     *
     * @param string $temCouAccTrvDip
     *
     * @return Diplome
     */
    public function setTemCouAccTrvDip($temCouAccTrvDip)
    {
        $this->temCouAccTrvDip = $temCouAccTrvDip;

        return $this;
    }

    /**
     * Get temCouAccTrvDip.
     *
     * @return string
     */
    public function getTemCouAccTrvDip()
    {
        return $this->temCouAccTrvDip;
    }

    /**
     * Set temOuvDrtSsoDip.
     *
     * @param string $temOuvDrtSsoDip
     *
     * @return Diplome
     */
    public function setTemOuvDrtSsoDip($temOuvDrtSsoDip)
    {
        $this->temOuvDrtSsoDip = $temOuvDrtSsoDip;

        return $this;
    }

    /**
     * Get temOuvDrtSsoDip.
     *
     * @return string
     */
    public function getTemOuvDrtSsoDip()
    {
        return $this->temOuvDrtSsoDip;
    }

    /**
     * Set codCyc.
     *
     * @param Cycle|null $codCyc
     *
     * @return Diplome
     */
    public function setCodCyc(Cycle $codCyc = null)
    {
        $this->codCyc = $codCyc;

        return $this;
    }

    /**
     * Get codCyc.
     *
     * @return Cycle|null
     */
    public function getCodCyc()
    {
        return $this->codCyc;
    }

    /**
     * Set codDfd.
     *
     * @param DomaineFormationDip|null $codDfd
     *
     * @return Diplome
     */
    public function setCodDfd(DomaineFormationDip $codDfd = null)
    {
        $this->codDfd = $codDfd;

        return $this;
    }

    /**
     * Get codDfd.
     *
     * @return DomaineFormationDip|null
     */
    public function getCodDfd()
    {
        return $this->codDfd;
    }
    /**
     * Set codNdi.
     *
     * @param NatureDiplome|null $codNdi
     *
     * @return Diplome
     */
    public function setCodNdi(NatureDiplome $codNdi = null)
    {
        $this->codNdi = $codNdi;

        return $this;
    }

    /**
     * Get codNdi.
     *
     * @return NatureDiplome|null
     */
    public function getCodNdi()
    {
        return $this->codNdi;
    }

    /**
     * Set codTpdEtb.
     *
     * @param TypDiplome|null $codTpdEtb
     *
     * @return Diplome
     */
    public function setCodTpdEtb(TypDiplome $codTpdEtb = null)
    {
        $this->codTpdEtb = $codTpdEtb;

        return $this;
    }

    /**
     * Get codTpdEtb.
     *
     * @return TypDiplome|null
     */
    public function getCodTpdEtb()
    {
        return $this->codTpdEtb;
    }
}
