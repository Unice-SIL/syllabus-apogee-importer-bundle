<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * Etape
 */
class Etape
{
    /**
     * @var string
     */
    private $codEtp;

    /**
     * @var string
     */
    private $libEtp;

    /**
     * @var string
     */
    private $licEtp;

    /**
     * @var bool|null
     */
    private $nbrMaxIaeAut;

    /**
     * @var string
     */
    private $temCouAccTrvEtp = 'O';

    /**
     * @var string
     */
    private $temOuvDrtSsoEtp = 'O';

    /**
     * @var string
     */
    private $temTypOpi = 'L';

    /**
     * @var bool|null
     */
    private $nbrMaxInscDeug;

    /**
     * @var string
     */
    private $temOuvDrtBrs = 'N';
    
    /**
     * @var CursusLmd
     */
    private $codCur;

    /**
     * @var Cycle
     */
    private $codCyc;


    /**
     * Get codEtp.
     *
     * @return string
     */
    public function getCodEtp()
    {
        return $this->codEtp;
    }

    /**
     * Set libEtp.
     *
     * @param string $libEtp
     *
     * @return Etape
     */
    public function setLibEtp($libEtp)
    {
        $this->libEtp = $libEtp;

        return $this;
    }

    /**
     * Get libEtp.
     *
     * @return string
     */
    public function getLibEtp()
    {
        return $this->libEtp;
    }

    /**
     * Set licEtp.
     *
     * @param string $licEtp
     *
     * @return Etape
     */
    public function setLicEtp($licEtp)
    {
        $this->licEtp = $licEtp;

        return $this;
    }

    /**
     * Get licEtp.
     *
     * @return string
     */
    public function getLicEtp()
    {
        return $this->licEtp;
    }

    /**
     * Set nbrMaxIaeAut.
     *
     * @param bool|null $nbrMaxIaeAut
     *
     * @return Etape
     */
    public function setNbrMaxIaeAut($nbrMaxIaeAut = null)
    {
        $this->nbrMaxIaeAut = $nbrMaxIaeAut;

        return $this;
    }

    /**
     * Get nbrMaxIaeAut.
     *
     * @return bool|null
     */
    public function getNbrMaxIaeAut()
    {
        return $this->nbrMaxIaeAut;
    }

    /**
     * Set temCouAccTrvEtp.
     *
     * @param string $temCouAccTrvEtp
     *
     * @return Etape
     */
    public function setTemCouAccTrvEtp($temCouAccTrvEtp)
    {
        $this->temCouAccTrvEtp = $temCouAccTrvEtp;

        return $this;
    }

    /**
     * Get temCouAccTrvEtp.
     *
     * @return string
     */
    public function getTemCouAccTrvEtp()
    {
        return $this->temCouAccTrvEtp;
    }

    /**
     * Set temOuvDrtSsoEtp.
     *
     * @param string $temOuvDrtSsoEtp
     *
     * @return Etape
     */
    public function setTemOuvDrtSsoEtp($temOuvDrtSsoEtp)
    {
        $this->temOuvDrtSsoEtp = $temOuvDrtSsoEtp;

        return $this;
    }

    /**
     * Get temOuvDrtSsoEtp.
     *
     * @return string
     */
    public function getTemOuvDrtSsoEtp()
    {
        return $this->temOuvDrtSsoEtp;
    }

    /**
     * Set temTypOpi.
     *
     * @param string $temTypOpi
     *
     * @return Etape
     */
    public function setTemTypOpi($temTypOpi)
    {
        $this->temTypOpi = $temTypOpi;

        return $this;
    }

    /**
     * Get temTypOpi.
     *
     * @return string
     */
    public function getTemTypOpi()
    {
        return $this->temTypOpi;
    }

    /**
     * Set nbrMaxInscDeug.
     *
     * @param bool|null $nbrMaxInscDeug
     *
     * @return Etape
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
     * Set temOuvDrtBrs.
     *
     * @param string $temOuvDrtBrs
     *
     * @return Etape
     */
    public function setTemOuvDrtBrs($temOuvDrtBrs)
    {
        $this->temOuvDrtBrs = $temOuvDrtBrs;

        return $this;
    }

    /**
     * Get temOuvDrtBrs.
     *
     * @return string
     */
    public function getTemOuvDrtBrs()
    {
        return $this->temOuvDrtBrs;
    }

    /**
     * Set codCur.
     *
     * @param CursusLmd|null $codCur
     *
     * @return Etape
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
     * Set codCyc.
     *
     * @param Cycle|null $codCyc
     *
     * @return Etape
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
}
