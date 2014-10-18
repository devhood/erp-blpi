<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="Products", uniqueConstraints={@ORM\UniqueConstraint(name="product_code_UNIQUE", columns={"product_code"})}, indexes={@ORM\Index(name="fk_Products_Suppliers_idx", columns={"supplier_id"}), @ORM\Index(name="fk_Products_Brands1_idx", columns={"brand_id"}), @ORM\Index(name="fk_Products_Classifications1_idx", columns={"classification_id"})})
 * @ORM\Entity
 */
class Products
{
    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productId;

    /**
     * @var string
     *
     * @ORM\Column(name="product_code", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $productCode;

    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $productName;

    /**
     * @var string
     *
     * @ORM\Column(name="product_description", type="string", length=500, precision=0, scale=0, nullable=true, unique=false)
     */
    private $productDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="product_status", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $productStatus;

    /**
     * @var \Database\Entity\Brands
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Brands")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="brand_id", referencedColumnName="brand_id", nullable=true)
     * })
     */
    private $brand;

    /**
     * @var \Database\Entity\Classifications
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Classifications")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="classification_id", referencedColumnName="classification_id", nullable=true)
     * })
     */
    private $classification;

    /**
     * @var \Database\Entity\Suppliers
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Suppliers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supplier_id", referencedColumnName="supplier_id", nullable=true)
     * })
     */
    private $supplier;


    /**
     * Get productId
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set productCode
     *
     * @param string $productCode
     * @return Products
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * Get productCode
     *
     * @return string 
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Set productName
     *
     * @param string $productName
     * @return Products
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string 
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set productDescription
     *
     * @param string $productDescription
     * @return Products
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;

        return $this;
    }

    /**
     * Get productDescription
     *
     * @return string 
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * Set size
     *
     * @param string $size
     * @return Products
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set weight
     *
     * @param string $weight
     * @return Products
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set productStatus
     *
     * @param string $productStatus
     * @return Products
     */
    public function setProductStatus($productStatus)
    {
        $this->productStatus = $productStatus;

        return $this;
    }

    /**
     * Get productStatus
     *
     * @return string 
     */
    public function getProductStatus()
    {
        return $this->productStatus;
    }

    /**
     * Set brand
     *
     * @param \Database\Entity\Brands $brand
     * @return Products
     */
    public function setBrand(\Database\Entity\Brands $brand = null)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return \Database\Entity\Brands 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set classification
     *
     * @param \Database\Entity\Classifications $classification
     * @return Products
     */
    public function setClassification(\Database\Entity\Classifications $classification = null)
    {
        $this->classification = $classification;

        return $this;
    }

    /**
     * Get classification
     *
     * @return \Database\Entity\Classifications 
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Set supplier
     *
     * @param \Database\Entity\Suppliers $supplier
     * @return Products
     */
    public function setSupplier(\Database\Entity\Suppliers $supplier = null)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier
     *
     * @return \Database\Entity\Suppliers 
     */
    public function getSupplier()
    {
        return $this->supplier;
    }
}
