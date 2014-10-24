<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brands
 *
 * @ORM\Table(name="Brands")
 * @ORM\Entity
 */
class Brands
{
    /**
     * @var integer
     *
     * @ORM\Column(name="brand_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $brandId;

    /**
     * @var string
     *
     * @ORM\Column(name="brand_name", type="string", length=45, nullable=false)
     */
    private $brandName;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, nullable=false)
     */
    private $recordStatus = 'Active';



    /**
     * Get brandId
     *
     * @return integer 
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * Set brandName
     *
     * @param string $brandName
     * @return Brands
     */
    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;

        return $this;
    }

    /**
     * Get brandName
     *
     * @return string 
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return Brands
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
