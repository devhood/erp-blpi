<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Suppliers
 *
 * @ORM\Table(name="Suppliers")
 * @ORM\Entity
 */
class Suppliers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="supplier_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $supplierId;

    /**
     * @var string
     *
     * @ORM\Column(name="supplier_name", type="string", length=100, nullable=false)
     */
    private $supplierName;

    /**
     * @var string
     *
     * @ORM\Column(name="supplier_status", type="string", length=45, nullable=false)
     */
    private $supplierStatus = 'Active';



    /**
     * Get supplierId
     *
     * @return integer 
     */
    public function getSupplierId()
    {
        return $this->supplierId;
    }

    /**
     * Set supplierName
     *
     * @param string $supplierName
     * @return Suppliers
     */
    public function setSupplierName($supplierName)
    {
        $this->supplierName = $supplierName;

        return $this;
    }

    /**
     * Get supplierName
     *
     * @return string 
     */
    public function getSupplierName()
    {
        return $this->supplierName;
    }

    /**
     * Set supplierStatus
     *
     * @param string $supplierStatus
     * @return Suppliers
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