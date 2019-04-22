<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * Composante
 */
class Composante
{
    /**
     * @var string
     */
    private $codCmp;

    /**
     * @var string|null
     */
    private $codRneCmp;

    /**
     * @var string
     */
    private $libCmp;

    /**
     * @var string
     */
    private $licCmp;

    /**
     * @var string|null
     */
    private $libCmtCmp;

    /**
     * @var string|null
     */
    private $libAd1Cmp;

    /**
     * @var string|null
     */
    private $libAd2Cmp;

    /**
     * @var string|null
     */
    private $libAd3Cmp;

    /**
     * @var string
     */
    private $temCouAccTrvCmp = 'O';

    /**
     * @var string
     */
    private $temElcCmp = 'O';

    /**
     * @var string
     */
    private $temEnSveCmp = 'O';

    /**
     * @var string
     */
    private $codNatCmp = 'J';

    /**
     * @var string|null
     */
    private $lim1Cmp;

    /**
     * @var string|null
     */
    private $lim2Cmp;

    /**
     * @var string|null
     */
    private $lim3Cmp;

    /**
     * @var string|null
     */
    private $temMinCmp = 'CHR(78)';

    /**
     * @var int|null
     */
    private $numOrdCmp;

    /**
     * @var string
     */
    private $int1EdiDipCmp;

    /**
     * @var string|null
     */
    private $int2EdiDipCmp;

    /**
     * @var string|null
     */
    private $libWebCmp;


    /**
     * Get codCmp.
     *
     * @return string
     */
    public function getCodCmp()
    {
        return $this->codCmp;
    }

    /**
     * Set codRneCmp.
     *
     * @param string|null $codRneCmp
     *
     * @return Composante
     */
    public function setCodRneCmp($codRneCmp = null)
    {
        $this->codRneCmp = $codRneCmp;

        return $this;
    }

    /**
     * Get codRneCmp.
     *
     * @return string|null
     */
    public function getCodRneCmp()
    {
        return $this->codRneCmp;
    }

    /**
     * Set libCmp.
     *
     * @param string $libCmp
     *
     * @return Composante
     */
    public function setLibCmp($libCmp)
    {
        $this->libCmp = $libCmp;

        return $this;
    }

    /**
     * Get libCmp.
     *
     * @return string
     */
    public function getLibCmp()
    {
        return $this->libCmp;
    }

    /**
     * Set licCmp.
     *
     * @param string $licCmp
     *
     * @return Composante
     */
    public function setLicCmp($licCmp)
    {
        $this->licCmp = $licCmp;

        return $this;
    }

    /**
     * Get licCmp.
     *
     * @return string
     */
    public function getLicCmp()
    {
        return $this->licCmp;
    }

    /**
     * Set libCmtCmp.
     *
     * @param string|null $libCmtCmp
     *
     * @return Composante
     */
    public function setLibCmtCmp($libCmtCmp = null)
    {
        $this->libCmtCmp = $libCmtCmp;

        return $this;
    }

    /**
     * Get libCmtCmp.
     *
     * @return string|null
     */
    public function getLibCmtCmp()
    {
        return $this->libCmtCmp;
    }

    /**
     * Set libAd1Cmp.
     *
     * @param string|null $libAd1Cmp
     *
     * @return Composante
     */
    public function setLibAd1Cmp($libAd1Cmp = null)
    {
        $this->libAd1Cmp = $libAd1Cmp;

        return $this;
    }

    /**
     * Get libAd1Cmp.
     *
     * @return string|null
     */
    public function getLibAd1Cmp()
    {
        return $this->libAd1Cmp;
    }

    /**
     * Set libAd2Cmp.
     *
     * @param string|null $libAd2Cmp
     *
     * @return Composante
     */
    public function setLibAd2Cmp($libAd2Cmp = null)
    {
        $this->libAd2Cmp = $libAd2Cmp;

        return $this;
    }

    /**
     * Get libAd2Cmp.
     *
     * @return string|null
     */
    public function getLibAd2Cmp()
    {
        return $this->libAd2Cmp;
    }

    /**
     * Set libAd3Cmp.
     *
     * @param string|null $libAd3Cmp
     *
     * @return Composante
     */
    public function setLibAd3Cmp($libAd3Cmp = null)
    {
        $this->libAd3Cmp = $libAd3Cmp;

        return $this;
    }

    /**
     * Get libAd3Cmp.
     *
     * @return string|null
     */
    public function getLibAd3Cmp()
    {
        return $this->libAd3Cmp;
    }

    /**
     * Set temCouAccTrvCmp.
     *
     * @param string $temCouAccTrvCmp
     *
     * @return Composante
     */
    public function setTemCouAccTrvCmp($temCouAccTrvCmp)
    {
        $this->temCouAccTrvCmp = $temCouAccTrvCmp;

        return $this;
    }

    /**
     * Get temCouAccTrvCmp.
     *
     * @return string
     */
    public function getTemCouAccTrvCmp()
    {
        return $this->temCouAccTrvCmp;
    }

    /**
     * Set temElcCmp.
     *
     * @param string $temElcCmp
     *
     * @return Composante
     */
    public function setTemElcCmp($temElcCmp)
    {
        $this->temElcCmp = $temElcCmp;

        return $this;
    }

    /**
     * Get temElcCmp.
     *
     * @return string
     */
    public function getTemElcCmp()
    {
        return $this->temElcCmp;
    }

    /**
     * Set temEnSveCmp.
     *
     * @param string $temEnSveCmp
     *
     * @return Composante
     */
    public function setTemEnSveCmp($temEnSveCmp)
    {
        $this->temEnSveCmp = $temEnSveCmp;

        return $this;
    }

    /**
     * Get temEnSveCmp.
     *
     * @return string
     */
    public function getTemEnSveCmp()
    {
        return $this->temEnSveCmp;
    }

    /**
     * Set codNatCmp.
     *
     * @param string $codNatCmp
     *
     * @return Composante
     */
    public function setCodNatCmp($codNatCmp)
    {
        $this->codNatCmp = $codNatCmp;

        return $this;
    }

    /**
     * Get codNatCmp.
     *
     * @return string
     */
    public function getCodNatCmp()
    {
        return $this->codNatCmp;
    }

    /**
     * Set lim1Cmp.
     *
     * @param string|null $lim1Cmp
     *
     * @return Composante
     */
    public function setLim1Cmp($lim1Cmp = null)
    {
        $this->lim1Cmp = $lim1Cmp;

        return $this;
    }

    /**
     * Get lim1Cmp.
     *
     * @return string|null
     */
    public function getLim1Cmp()
    {
        return $this->lim1Cmp;
    }

    /**
     * Set lim2Cmp.
     *
     * @param string|null $lim2Cmp
     *
     * @return Composante
     */
    public function setLim2Cmp($lim2Cmp = null)
    {
        $this->lim2Cmp = $lim2Cmp;

        return $this;
    }

    /**
     * Get lim2Cmp.
     *
     * @return string|null
     */
    public function getLim2Cmp()
    {
        return $this->lim2Cmp;
    }

    /**
     * Set lim3Cmp.
     *
     * @param string|null $lim3Cmp
     *
     * @return Composante
     */
    public function setLim3Cmp($lim3Cmp = null)
    {
        $this->lim3Cmp = $lim3Cmp;

        return $this;
    }

    /**
     * Get lim3Cmp.
     *
     * @return string|null
     */
    public function getLim3Cmp()
    {
        return $this->lim3Cmp;
    }

    /**
     * Set temMinCmp.
     *
     * @param string|null $temMinCmp
     *
     * @return Composante
     */
    public function setTemMinCmp($temMinCmp = null)
    {
        $this->temMinCmp = $temMinCmp;

        return $this;
    }

    /**
     * Get temMinCmp.
     *
     * @return string|null
     */
    public function getTemMinCmp()
    {
        return $this->temMinCmp;
    }

    /**
     * Set numOrdCmp.
     *
     * @param int|null $numOrdCmp
     *
     * @return Composante
     */
    public function setNumOrdCmp($numOrdCmp = null)
    {
        $this->numOrdCmp = $numOrdCmp;

        return $this;
    }

    /**
     * Get numOrdCmp.
     *
     * @return int|null
     */
    public function getNumOrdCmp()
    {
        return $this->numOrdCmp;
    }

    /**
     * Set int1EdiDipCmp.
     *
     * @param string $int1EdiDipCmp
     *
     * @return Composante
     */
    public function setInt1EdiDipCmp($int1EdiDipCmp)
    {
        $this->int1EdiDipCmp = $int1EdiDipCmp;

        return $this;
    }

    /**
     * Get int1EdiDipCmp.
     *
     * @return string
     */
    public function getInt1EdiDipCmp()
    {
        return $this->int1EdiDipCmp;
    }

    /**
     * Set int2EdiDipCmp.
     *
     * @param string|null $int2EdiDipCmp
     *
     * @return Composante
     */
    public function setInt2EdiDipCmp($int2EdiDipCmp = null)
    {
        $this->int2EdiDipCmp = $int2EdiDipCmp;

        return $this;
    }

    /**
     * Get int2EdiDipCmp.
     *
     * @return string|null
     */
    public function getInt2EdiDipCmp()
    {
        return $this->int2EdiDipCmp;
    }

    /**
     * Set libWebCmp.
     *
     * @param string|null $libWebCmp
     *
     * @return Composante
     */
    public function setLibWebCmp($libWebCmp = null)
    {
        $this->libWebCmp = $libWebCmp;

        return $this;
    }

    /**
     * Get libWebCmp.
     *
     * @return string|null
     */
    public function getLibWebCmp()
    {
        return $this->libWebCmp;
    }


}
