<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Entity;

/**
 * AnneeUni
 */
class AnneeUni
{
    /**
     * @var string
     */
    private $codAnu;

    /**
     * @var string
     */
    private $etaAnuIae = 'I';

    /**
     * @var string
     */
    private $libAnu;

    /**
     * @var string
     */
    private $licAnu;

    /**
     * @var \DateTime
     */
    private $datOuvOpi;

    /**
     * @var \DateTime
     */
    private $datFrmOpi;

    /**
     * @var string
     */
    private $etaAnuIpe = 'O';

    /**
     * @var int
     */
    private $numOccObtVdi = '0';

    /**
     * @var string
     */
    private $etaAnuRes = 'F';

    /**
     * @var int
     */
    private $numOccObtVdiUni = '0';

    /**
     * @var int
     */
    private $numOccObtAdd = '0';

    /**
     * @var int
     */
    private $numOccObtCer = '0';

    /**
     * @var string
     */
    private $etaAnuAgl = 'F';

    /**
     * @var string
     */
    private $etaAnuApb = 'F';


    /**
     * Get codAnu.
     *
     * @return string
     */
    public function getCodAnu()
    {
        return $this->codAnu;
    }

    /**
     * Set etaAnuIae.
     *
     * @param string $etaAnuIae
     *
     * @return AnneeUni
     */
    public function setEtaAnuIae($etaAnuIae)
    {
        $this->etaAnuIae = $etaAnuIae;

        return $this;
    }

    /**
     * Get etaAnuIae.
     *
     * @return string
     */
    public function getEtaAnuIae()
    {
        return $this->etaAnuIae;
    }

    /**
     * Set libAnu.
     *
     * @param string $libAnu
     *
     * @return AnneeUni
     */
    public function setLibAnu($libAnu)
    {
        $this->libAnu = $libAnu;

        return $this;
    }

    /**
     * Get libAnu.
     *
     * @return string
     */
    public function getLibAnu()
    {
        return $this->libAnu;
    }

    /**
     * Set licAnu.
     *
     * @param string $licAnu
     *
     * @return AnneeUni
     */
    public function setLicAnu($licAnu)
    {
        $this->licAnu = $licAnu;

        return $this;
    }

    /**
     * Get licAnu.
     *
     * @return string
     */
    public function getLicAnu()
    {
        return $this->licAnu;
    }

    /**
     * Set datOuvOpi.
     *
     * @param \DateTime $datOuvOpi
     *
     * @return AnneeUni
     */
    public function setDatOuvOpi($datOuvOpi)
    {
        $this->datOuvOpi = $datOuvOpi;

        return $this;
    }

    /**
     * Get datOuvOpi.
     *
     * @return \DateTime
     */
    public function getDatOuvOpi()
    {
        return $this->datOuvOpi;
    }

    /**
     * Set datFrmOpi.
     *
     * @param \DateTime $datFrmOpi
     *
     * @return AnneeUni
     */
    public function setDatFrmOpi($datFrmOpi)
    {
        $this->datFrmOpi = $datFrmOpi;

        return $this;
    }

    /**
     * Get datFrmOpi.
     *
     * @return \DateTime
     */
    public function getDatFrmOpi()
    {
        return $this->datFrmOpi;
    }

    /**
     * Set etaAnuIpe.
     *
     * @param string $etaAnuIpe
     *
     * @return AnneeUni
     */
    public function setEtaAnuIpe($etaAnuIpe)
    {
        $this->etaAnuIpe = $etaAnuIpe;

        return $this;
    }

    /**
     * Get etaAnuIpe.
     *
     * @return string
     */
    public function getEtaAnuIpe()
    {
        return $this->etaAnuIpe;
    }

    /**
     * Set numOccObtVdi.
     *
     * @param int $numOccObtVdi
     *
     * @return AnneeUni
     */
    public function setNumOccObtVdi($numOccObtVdi)
    {
        $this->numOccObtVdi = $numOccObtVdi;

        return $this;
    }

    /**
     * Get numOccObtVdi.
     *
     * @return int
     */
    public function getNumOccObtVdi()
    {
        return $this->numOccObtVdi;
    }

    /**
     * Set etaAnuRes.
     *
     * @param string $etaAnuRes
     *
     * @return AnneeUni
     */
    public function setEtaAnuRes($etaAnuRes)
    {
        $this->etaAnuRes = $etaAnuRes;

        return $this;
    }

    /**
     * Get etaAnuRes.
     *
     * @return string
     */
    public function getEtaAnuRes()
    {
        return $this->etaAnuRes;
    }

    /**
     * Set numOccObtVdiUni.
     *
     * @param int $numOccObtVdiUni
     *
     * @return AnneeUni
     */
    public function setNumOccObtVdiUni($numOccObtVdiUni)
    {
        $this->numOccObtVdiUni = $numOccObtVdiUni;

        return $this;
    }

    /**
     * Get numOccObtVdiUni.
     *
     * @return int
     */
    public function getNumOccObtVdiUni()
    {
        return $this->numOccObtVdiUni;
    }

    /**
     * Set numOccObtAdd.
     *
     * @param int $numOccObtAdd
     *
     * @return AnneeUni
     */
    public function setNumOccObtAdd($numOccObtAdd)
    {
        $this->numOccObtAdd = $numOccObtAdd;

        return $this;
    }

    /**
     * Get numOccObtAdd.
     *
     * @return int
     */
    public function getNumOccObtAdd()
    {
        return $this->numOccObtAdd;
    }

    /**
     * Set numOccObtCer.
     *
     * @param int $numOccObtCer
     *
     * @return AnneeUni
     */
    public function setNumOccObtCer($numOccObtCer)
    {
        $this->numOccObtCer = $numOccObtCer;

        return $this;
    }

    /**
     * Get numOccObtCer.
     *
     * @return int
     */
    public function getNumOccObtCer()
    {
        return $this->numOccObtCer;
    }

    /**
     * Set etaAnuAgl.
     *
     * @param string $etaAnuAgl
     *
     * @return AnneeUni
     */
    public function setEtaAnuAgl($etaAnuAgl)
    {
        $this->etaAnuAgl = $etaAnuAgl;

        return $this;
    }

    /**
     * Get etaAnuAgl.
     *
     * @return string
     */
    public function getEtaAnuAgl()
    {
        return $this->etaAnuAgl;
    }

    /**
     * Set etaAnuApb.
     *
     * @param string $etaAnuApb
     *
     * @return AnneeUni
     */
    public function setEtaAnuApb($etaAnuApb)
    {
        $this->etaAnuApb = $etaAnuApb;

        return $this;
    }

    /**
     * Get etaAnuApb.
     *
     * @return string
     */
    public function getEtaAnuApb()
    {
        return $this->etaAnuApb;
    }
}
