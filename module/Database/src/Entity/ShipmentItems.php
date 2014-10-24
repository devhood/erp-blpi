<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShipmentItems
 *
 * @ORM\Table(name="Shipment_Items", indexes={@ORM\Index(name="fk_Shipment_Items_Shipments1_idx", columns={"shipment_id"}), @ORM\Index(name="fk_Shipment_Items_Products1_idx", columns={"product_id"}), @ORM\Index(name="fk_Shipment_Items_Currencies1_idx", columns={"currency_id"}), @ORM\Index(name="fk_Shipment_Items_Product_Conditions1_idx", columns={"condition_id"})})
 * @ORM\Entity
 */
class ShipmentItems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="shipment_item_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $shipmentItemId;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var float
     *
     * @ORM\Column(name="cost", type="float", precision=10, scale=0, nullable=true)
     */
    private $cost;

    /**
     * @var string
     *
     * @ORM\Column(name="expiry_date", type="string", length=45, nullable=true)
     */
    private $expiryDate;

    /**
     * @var \Database\Entity\Currencies
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Currencies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_id", referencedColumnName="currency_id")
     * })
     */
    private $currency;

    /**
     * @var \Database\Entity\ProductConditions
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\ProductConditions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="condition_id", referencedColumnName="condition_id")
     * })
     */
    private $condition;

    /**
     * @var \Database\Entity\Products
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="product_id")
     * })
     */
    private $product;

    /**
     * @var \Database\Entity\Shipments
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Shipments")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shipment_id", referencedColumnName="shipment_id")
     * })
     */
    private $shipment;



    /**
     * Get shipmentItemId
     *
     * @return integer 
     */
    public function getShipmentItemId()
    {
        return $this->shipmentItemId;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return ShipmentItems
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set cost
     *
     * @param float $cost
     * @return ShipmentItems
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return float 
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set expiryDate
     *
     * @param string $expiryDate
     * @return ShipmentItems
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }

    /**
     * Get expiryDate
     *
     * @return string 
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Set currency
     *
     * @param \Database\Entity\Currencies $currency
     * @return ShipmentItems
     */
    public function setCurrency(\Database\Entity\Currencies $currency = null)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return \Database\Entity\Currencies 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set condition
     *
     * @param \Database\Entity\ProductConditions $condition
     * @return ShipmentItems
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
     * @return ShipmentItems
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

    /**
     * Set shipment
     *
     * @param \Database\Entity\Shipments $shipment
     * @return ShipmentItems
     */
    public function setShipment(\Database\Entity\Shipments $shipment = null)
    {
        $this->shipment = $shipment;

        return $this;
    }

    /**
     * Get shipment
     *
     * @return \Database\Entity\Shipments 
     */
    public function getShipment()
    {
        return $this->shipment;
    }
}
