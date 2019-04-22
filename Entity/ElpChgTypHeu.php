<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * ElpChgTypHeu
 */
class ElpChgTypHeu
{
    /**
     * @var string|null
     */
    private $nbrHeuElp;

    /**
     * @var int|null
     */
    private $nrmElp;

    /**
     * @var int|null
     */
    private $nbrMinEtuGrpSupp;

    /**
     * @var int|null
     */
    private $nbrGrpPrvColl;

    /**
     * @var int|null
     */
    private $nbrGrpPrvCal;

    /**
     * @var int|null
     */
    private $nbrGrpPrvRst;

    /**
     * @var string|null
     */
    private $nbrGrpPrvMoy;

    /**
     * @var int|null
     */
    private $nbrGrpPrvMod;

    /**
     * @var int|null
     */
    private $nbrGrpThColl;

    /**
     * @var int|null
     */
    private $nbrGrpThCal;

    /**
     * @var int|null
     */
    private $nbrGrpThRst;

    /**
     * @var string|null
     */
    private $nbrGrpThMoy;

    /**
     * @var int|null
     */
    private $nbrGrpThMod;

    /**
     * @var AnneeUni
     */
    private $codAnu;

    /**
     * @var ElementPedagogi
     */
    private $codElp;

    /**
     * @var TypeHeure
     */
    private $codTypHeu;

    /**
     * Set nbrHeuElp.
     *
     * @param string|null $nbrHeuElp
     *
     * @return ElpChgTypHeu
     */
    public function setNbrHeuElp($nbrHeuElp = null)
    {
        $this->nbrHeuElp = $nbrHeuElp;

        return $this;
    }

    /**
     * Get nbrHeuElp.
     *
     * @return string|null
     */
    public function getNbrHeuElp()
    {
        return $this->nbrHeuElp;
    }

    /**
     * Set nrmElp.
     *
     * @param int|null $nrmElp
     *
     * @return ElpChgTypHeu
     */
    public function setNrmElp($nrmElp = null)
    {
        $this->nrmElp = $nrmElp;

        return $this;
    }

    /**
     * Get nrmElp.
     *
     * @return int|null
     */
    public function getNrmElp()
    {
        return $this->nrmElp;
    }

    /**
     * Set nbrMinEtuGrpSupp.
     *
     * @param int|null $nbrMinEtuGrpSupp
     *
     * @return ElpChgTypHeu
     */
    public function setNbrMinEtuGrpSupp($nbrMinEtuGrpSupp = null)
    {
        $this->nbrMinEtuGrpSupp = $nbrMinEtuGrpSupp;

        return $this;
    }

    /**
     * Get nbrMinEtuGrpSupp.
     *
     * @return int|null
     */
    public function getNbrMinEtuGrpSupp()
    {
        return $this->nbrMinEtuGrpSupp;
    }

    /**
     * Set nbrGrpPrvColl.
     *
     * @param int|null $nbrGrpPrvColl
     *
     * @return ElpChgTypHeu
     */
    public function setNbrGrpPrvColl($nbrGrpPrvColl = null)
    {
        $this->nbrGrpPrvColl = $nbrGrpPrvColl;

        return $this;
    }

    /**
     * Get nbrGrpPrvColl.
     *
     * @return int|null
     */
    public function getNbrGrpPrvColl()
    {
        return $this->nbrGrpPrvColl;
    }

    /**
     * Set nbrGrpPrvCal.
     *
     * @param int|null $nbrGrpPrvCal
     *
     * @return ElpChgTypHeu
     */
    public function setNbrGrpPrvCal($nbrGrpPrvCal = null)
    {
        $this->nbrGrpPrvCal = $nbrGrpPrvCal;

        return $this;
    }

    /**
     * Get nbrGrpPrvCal.
     *
     * @return int|null
     */
    public function getNbrGrpPrvCal()
    {
        return $this->nbrGrpPrvCal;
    }

    /**
     * Set nbrGrpPrvRst.
     *
     * @param int|null $nbrGrpPrvRst
     *
     * @return ElpChgTypHeu
     */
    public function setNbrGrpPrvRst($nbrGrpPrvRst = null)
    {
        $this->nbrGrpPrvRst = $nbrGrpPrvRst;

        return $this;
    }

    /**
     * Get nbrGrpPrvRst.
     *
     * @return int|null
     */
    public function getNbrGrpPrvRst()
    {
        return $this->nbrGrpPrvRst;
    }

    /**
     * Set nbrGrpPrvMoy.
     *
     * @param string|null $nbrGrpPrvMoy
     *
     * @return ElpChgTypHeu
     */
    public function setNbrGrpPrvMoy($nbrGrpPrvMoy = null)
    {
        $this->nbrGrpPrvMoy = $nbrGrpPrvMoy;

        return $this;
    }

    /**
     * Get nbrGrpPrvMoy.
     *
     * @return string|null
     */
    public function getNbrGrpPrvMoy()
    {
        return $this->nbrGrpPrvMoy;
    }

    /**
     * Set nbrGrpPrvMod.
     *
     * @param int|null $nbrGrpPrvMod
     *
     * @return ElpChgTypHeu
     */
    public function setNbrGrpPrvMod($nbrGrpPrvMod = null)
    {
        $this->nbrGrpPrvMod = $nbrGrpPrvMod;

        return $this;
    }

    /**
     * Get nbrGrpPrvMod.
     *
     * @return int|null
     */
    public function getNbrGrpPrvMod()
    {
        return $this->nbrGrpPrvMod;
    }

    /**
     * Set nbrGrpThColl.
     *
     * @param int|null $nbrGrpThColl
     *
     * @return ElpChgTypHeu
     */
    public function setNbrGrpThColl($nbrGrpThColl = null)
    {
        $this->nbrGrpThColl = $nbrGrpThColl;

        return $this;
    }

    /**
     * Get nbrGrpThColl.
     *
     * @return int|null
     */
    public function getNbrGrpThColl()
    {
        return $this->nbrGrpThColl;
    }

    /**
     * Set nbrGrpThCal.
     *
     * @param int|null $nbrGrpThCal
     *
     * @return ElpChgTypHeu
     */
    public function setNbrGrpThCal($nbrGrpThCal = null)
    {
        $this->nbrGrpThCal = $nbrGrpThCal;

        return $this;
    }

    /**
     * Get nbrGrpThCal.
     *
     * @return int|null
     */
    public function getNbrGrpThCal()
    {
        return $this->nbrGrpThCal;
    }

    /**
     * Set nbrGrpThRst.
     *
     * @param int|null $nbrGrpThRst
     *
     * @return ElpChgTypHeu
     */
    public function setNbrGrpThRst($nbrGrpThRst = null)
    {
        $this->nbrGrpThRst = $nbrGrpThRst;

        return $this;
    }

    /**
     * Get nbrGrpThRst.
     *
     * @return int|null
     */
    public function getNbrGrpThRst()
    {
        return $this->nbrGrpThRst;
    }

    /**
     * Set nbrGrpThMoy.
     *
     * @param string|null $nbrGrpThMoy
     *
     * @return ElpChgTypHeu
     */
    public function setNbrGrpThMoy($nbrGrpThMoy = null)
    {
        $this->nbrGrpThMoy = $nbrGrpThMoy;

        return $this;
    }

    /**
     * Get nbrGrpThMoy.
     *
     * @return string|null
     */
    public function getNbrGrpThMoy()
    {
        return $this->nbrGrpThMoy;
    }

    /**
     * Set nbrGrpThMod.
     *
     * @param int|null $nbrGrpThMod
     *
     * @return ElpChgTypHeu
     */
    public function setNbrGrpThMod($nbrGrpThMod = null)
    {
        $this->nbrGrpThMod = $nbrGrpThMod;

        return $this;
    }

    /**
     * Get nbrGrpThMod.
     *
     * @return int|null
     */
    public function getNbrGrpThMod()
    {
        return $this->nbrGrpThMod;
    }

    /**
     * Set codAnu.
     *
     * @param AnneeUni $codAnu
     *
     * @return ElpChgTypHeu
     */
    public function setCodAnu(AnneeUni $codAnu)
    {
        $this->codAnu = $codAnu;

        return $this;
    }

    /**
     * Get codAnu.
     *
     * @return AnneeUni
     */
    public function getCodAnu()
    {
        return $this->codAnu;
    }

    /**
     * Set codElp.
     *
     * @param ElementPedagogi $codElp
     *
     * @return ElpChgTypHeu
     */
    public function setCodElp(ElementPedagogi $codElp)
    {
        $this->codElp = $codElp;

        return $this;
    }

    /**
     * Get codElp.
     *
     * @return ElementPedagogi
     */
    public function getCodElp()
    {
        return $this->codElp;
    }

    /**
     * Set codTypHeu.
     *
     * @param TypeHeure $codTypHeu
     *
     * @return ElpChgTypHeu
     */
    public function setCodTypHeu(TypeHeure $codTypHeu)
    {
        $this->codTypHeu = $codTypHeu;

        return $this;
    }

    /**
     * Get codTypHeu.
     *
     * @return TypeHeure
     */
    public function getCodTypHeu()
    {
        return $this->codTypHeu;
    }
    
}
