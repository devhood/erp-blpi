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
     * @ORM\Column(name="brand_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $brandId;

    /**
     * @var string
     *
     * @ORM\Column(name="brand_name", type="string", length=45, precision=0, scale=0, nullable=false, unique=false)
     */
    private $brandName;

    /**
     * @var string
     *
     * @ORM\Column(name="supplier_status", type="string", length=45, precision=0, scale=0, nullable=false, unique=false)
     */
    private $supplierStatus;


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
     * Set supplierStatus
     *
     * @param string $supplierStatus
     * @return Brands
     */
    public function setSupplierStatus($supplierStatus)
    {
        $this->supplierStatus = $supplierStatus;

        return $this;
    }

    /**
     * Get supplierStatus
     *
     * @return string 
     */
    public function getSupplierStatus()
    {
        return $this->supplierStatus;
    }
}
