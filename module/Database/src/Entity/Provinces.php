<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provinces
 *
 * @ORM\Table(name="provinces")
 * @ORM\Entity
 */
class Provinces
{
    /**
     * @var integer
     *
     * @ORM\Column(name="province_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $provinceId;

    /**
     * @var string
     *
     * @ORM\Column(name="province_name", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $provinceName;

    /**
     * @var integer
     *
     * @ORM\Column(name="country_id", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $countryId;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $recordStatus;


    /**
     * Get provinceId
     *
     * @return integer 
     */
    public function getProvinceId()
    {
        return $this->provinceId;
    }

    /**
     * Set provinceName
     *
     * @param string $provinceName
     * @return Provinces
     */
    public function setProvinceName($provinceName)
    {
        $this->provinceName = $provinceName;

        return $this;
    }

    /**
     * Get provinceName
     *
     * @return string 
     */
    public function getProvinceName()
    {
        return $this->provinceName;
    }

    /**
     * Set countryId
     *
     * @param integer $countryId
     * @return Provinces
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer 
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return Provinces
     */
    public function setRecordStatus($recordStatus)
    {
        $this->recordStatus = $recordStatus;

        return $this;
    }

    /**
     * Get recordStatus
     *
     * @return string 
     */
    public function getRecordStatus()
    {
        return $this->recordStatus;
    }
}
