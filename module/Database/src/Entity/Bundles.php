<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bundles
 *
 * @ORM\Table(name="Bundles", indexes={@ORM\Index(name="fk_Bundles_Products1_idx", columns={"parent_product_id"}), @ORM\Index(name="fk_Bundles_Products2_idx", columns={"child_product_id"})})
 * @ORM\Entity
 */
class Bundles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bundle_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bundleId;

    /**
     * @var integer
     *
     * @ORM\Column(name="bundle_quantity", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $bundleQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $recordStatus;

    /**
     * @var \Database\Entity\Products
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_product_id", referencedColumnName="product_id", nullable=true)
     * })
     */
    private $parentProduct;

    /**
     * @var \Database\Entity\Products
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="child_product_id", referencedColumnName="product_id", nullable=true)
     * })
     */
    private $childProduct;


    /**
     * Get bundleId
     *
     * @return integer 
     */
    public function getBundleId()
    {
        return $this->bundleId;
    }

    /**
     * Set bundleQuantity
     *
     * @param integer $bundleQuantity
     * @return Bundles
     */
    public function setBundleQuantity($bundleQuantity)
    {
        $this->bundleQuantity = $bundleQuantity;

        return $this;
    }

    /**
     * Get bundleQuantity
     *
     * @return integer 
     */
    public function getBundleQuantity()
    {
        return $this->bundleQuantity;
    }

    /**
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return Bundles
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

    /**
     * Set parentProduct
     *
     * @param \Database\Entity\Products $parentProduct
     * @return Bundles
     */
    public function setParentProduct(\Database\Entity\Products $parentProduct = null)
    {
        $this->parentProduct = $parentProduct;

        return $this;
    }

    /**
     * Get parentProduct
     *
     * @return \Database\Entity\Products 
     */
    public function getParentProduct()
    {
        return $this->parentProduct;
    }

    /**
     * Set childProduct
     *
     * @param \Database\Entity\Products $childProduct
     * @return Bundles
     */
    public function setChildProduct(\Database\Entity\Products $childProduct = null)
    {
        $this->childProduct = $childProduct;

        return $this;
    }

    /**
     * Get childProduct
     *
     * @return \Database\Entity\Products 
     */
    public function getChildProduct()
    {
        return $this->childProduct;
    }
}
