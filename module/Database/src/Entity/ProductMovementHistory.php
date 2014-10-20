<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductMovementHistory
 *
 * @ORM\Table(name="Product_Movement_History", indexes={@ORM\Index(name="fk_Product_Movement_History_Product_Inventories1_idx", columns={"inventory_id"}), @ORM\Index(name="fk_Product_Movement_History_Sales1_idx", columns={"sales_id"})})
 * @ORM\Entity
 */
class ProductMovementHistory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pmh_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pmhId;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $stock;

    /**
     * @var integer
     *
     * @ORM\Column(name="delta", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $delta;

    /**
     * @var integer
     *
     * @ORM\Column(name="balance", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $balance;

    /**
     * @var integer
     *
     * @ORM\Column(name="shipment_id", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $shipmentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="adjustment_id", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $adjustmentId;

    /**
     * @var \Database\Entity\ProductInventories
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\ProductInventories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="inventory_id", referencedColumnName="inventory_id", nullable=true)
     * })
     */
    private $inventory;

    /**
     * @var \Database\Entity\Sales
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Sales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sales_id", referencedColumnName="sales_id", nullable=true)
     * })
     */
    private $sales;


    /**
     * Get pmhId
     *
     * @return integer 
     */
    public function getPmhId()
    {
        return $this->pmhId;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return ProductMovementHistory
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
     * Set delta
     *
     * @param integer $delta
     * @return ProductMovementHistory
     */
    public function setDelta($delta)
    {
        $this->delta = $delta;

        return $this;
    }

    /**
     * Get delta
     *
     * @return integer 
     */
    public function getDelta()
    {
        return $this->delta;
    }

    /**
     * Set balance
     *
     * @param integer $balance
     * @return ProductMovementHistory
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get balance
     *
     * @return integer 
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set shipmentId
     *
     * @param integer $shipmentId
     * @return ProductMovementHistory
     */
    public function setShipmentId($shipmentId)
    {
        $this->shipmentId = $shipmentId;

        return $this;
    }

    /**
     * Get shipmentId
     *
     * @return integer 
     */
    public function getShipmentId()
    {
        return $this->shipmentId;
    }

    /**
     * Set adjustmentId
     *
     * @param integer $adjustmentId
     * @return ProductMovementHistory
     */
    public function setAdjustmentId($adjustmentId)
    {
        $this->adjustmentId = $adjustmentId;

        return $this;
    }

    /**
     * Get adjustmentId
     *
     * @return integer 
     */
    public function getAdjustmentId()
    {
        return $this->adjustmentId;
    }

    /**
     * Set inventory
     *
     * @param \Database\Entity\ProductInventories $inventory
     * @return ProductMovementHistory
     */
    public function setInventory(\Database\Entity\ProductInventories $inventory = null)
    {
        $this->inventory = $inventory;

        return $this;
    }

    /**
     * Get inventory
     *
     * @return \Database\Entity\ProductInventories 
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * Set sales
     *
     * @param \Database\Entity\Sales $sales
     * @return ProductMovementHistory
     */
    public function setSales(\Database\Entity\Sales $sales = null)
    {
        $this->sales = $sales;

        return $this;
    }

    /**
     * Get sales
     *
     * @return \Database\Entity\Sales 
     */
    public function getSales()
    {
        return $this->sales;
    }
}
