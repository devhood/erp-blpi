<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cities
 *
 * @ORM\Table(name="cities")
 * @ORM\Entity
 */
class Cities
{
    /**
     * @var integer
     *
     * @ORM\Column(name="city_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cityId;

    /**
     * @var string
     *
     * @ORM\Column(name="city_name", type="string", length=45, nullable=true)
     */
    private $cityName;

    /**
     * @var integer
     *
     * @ORM\Column(name="province_id", type="integer", nullable=true)
     */
    private $provinceId;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, nullable=true)
     */
    private $recordStatus = 'Active';



    /**
     * Get cityId
     *
     * @return integer 
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * Set cityName
     *
     * @param string $cityName
     * @return Cities
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * Get cityName
     *
     * @return string 
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Set provinceId
     *
     * @param integer $provinceId
     * @return Cities
     */
    public function setProvinceId($provinceId)
    {
        $this->provinceId = $provinceId;

        return $this;
    }

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
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return Cities
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
