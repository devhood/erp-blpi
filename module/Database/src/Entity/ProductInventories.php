<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductInventories
 *
 * @ORM\Table(name="Product_Inventories", indexes={@ORM\Index(name="fk_Product_Inventories_Inventory_Locations1_idx", columns={"location_id"}), @ORM\Index(name="fk_Product_Inventories_Product_Conditions1_idx", columns={"condition_id"}), @ORM\Index(name="fk_Product_Inventories_Products1_idx", columns={"product_id"})})
 * @ORM\Entity
 */
class ProductInventories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="inventory_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $inventoryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $stock;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_stock_limit", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $maxStockLimit;

    /**
     * @var integer
     *
     * @ORM\Column(name="min_stock_limit", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $minStockLimit;

    /**
     * @var integer
     *
     * @ORM\Column(name="reorder_limit", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $reorderLimit;

    /**
     * @var integer
     *
     * @ORM\Column(name="cycle_count", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $cycleCount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_cycle_count", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $lastCycleCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="variance", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $variance;

    /**
     * @var integer
     *
     * @ORM\Column(name="cycle_count_by", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $cycleCountBy;

    /**
     * @var \Database\Entity\InventoryLocations
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\InventoryLocations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_id", referencedColumnName="location_id", nullable=true)
     * })
     */
    private $location;

    /**
     * @var \Database\Entity\ProductConditions
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\ProductConditions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="condition_id", referencedColumnName="condition_id", nullable=true)
     * })
     */
    private $condition;

    /**
     * @var \Database\Entity\Products
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="product_id", nullable=true)
     * })
     */
    private $product;


    /**
     * Get inventoryId
     *
     * @return integer 
     */
    public function getInventoryId()
    {
        return $this->inventoryId;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return ProductInventories
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set maxStockLimit
     *
     * @param integer $maxStockLimit
     * @return ProductInventories
     */
    public function setMaxStockLimit($maxStockLimit)
    {
        $this->maxStockLimit = $maxStockLimit;

        return $this;
    }

    /**
     * Get maxStockLimit
     *
     * @return integer 
     */
    public function getMaxStockLimit()
    {
        return $this->maxStockLimit;
    }

    /**
     * Set minStockLimit
     *
     * @param integer $minStockLimit
     * @return ProductInventories
     */
    public function setMinStockLimit($minStockLimit)
    {
        $this->minStockLimit = $minStockLimit;

        return $this;
    }

    /**
     * Get minStockLimit
     *
     * @return integer 
     */
    public function getMinStockLimit()
    {
        return $this->minStockLimit;
    }

    /**
     * Set reorderLimit
     *
     * @param integer $reorderLimit
     * @return ProductInventories
     */
    public function setReorderLimit($reorderLimit)
    {
        $this->reorderLimit = $reorderLimit;

        return $this;
    }

    /**
     * Get reorderLimit
     *
     * @return integer 
     */
    public function getReorderLimit()
    {
        return $this->reorderLimit;
    }

    /**
     * Set cycleCount
     *
     * @param integer $cycleCount
     * @return ProductInventories
     */
    public function setCycleCount($cycleCount)
    {
        $this->cycleCount = $cycleCount;

        return $this;
    }

    /**
     * Get cycleCount
     *
     * @return integer 
     */
    public function getCycleCount()
    {
        return $this->cycleCount;
    }

    /**
     * Set lastCycleCount
     *
     * @param \DateTime $lastCycleCount
     * @return ProductInventories
     */
    public function setLastCycleCount($lastCycleCount)
    {
        $this->lastCycleCount = $lastCycleCount;

        return $this;
    }

    /**
     * Get lastCycleCount
     *
     * @return \DateTime 
     */
    public function getLastCycleCount()
    {
        return $this->lastCycleCount;
    }

    /**
     * Set variance
     *
     * @param integer $variance
     * @return ProductInventories
     */
    public function setVariance($variance)
    {
        $this->variance = $variance;

        return $this;
    }

    /**
     * Get variance
     *
     * @return integer 
     */
    public function getVariance()
    {
        return $this->variance;
    }

    /**
     * Set cycleCountBy
     *
     * @param integer $cycleCountBy
     * @return ProductInventories
     */
    public function setCycleCountBy($cycleCountBy)
    {
        $this->cycleCountBy = $cycleCountBy;

        return $this;
    }

    /**
     * Get cycleCountBy
     *
     * @return integer 
     */
    public function getCycleCountBy()
    {
        return $this->cycleCountBy;
    }

    /**
     * Set location
     *
     * @param \Database\Entity\InventoryLocations $location
     * @return ProductInventories
     */
    public function setLocation(\Database\Entity\InventoryLocations $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \Database\Entity\InventoryLocations 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set condition
     *
     * @param \Database\Entity\ProductConditions $condition
     * @return ProductInventories
     */
    public function setCondition(\Database\Entity\ProductConditions $condition = null)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Get condition
     *
     * @return \Database\Entity\ProductConditions 
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Set product
     *
     * @param \Database\Entity\Products $product
     * @return ProductInventories
     */
    public function setProduct(\Database\Entity\Products $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Database\Entity\Products 
     */
    public function getProduct()
    {
        return $this->product;
    }
}
