<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PurchaseItems
 *
 * @ORM\Table(name="Purchase_Items", indexes={@ORM\Index(name="fk_Purchase_Items_Purchases1_idx", columns={"purchase_id"}), @ORM\Index(name="fk_Purchase_Items_Products1_idx", columns={"product_id"}), @ORM\Index(name="fk_Purchase_Items_Currencies1_idx", columns={"currency_id"})})
 * @ORM\Entity
 */
class PurchaseItems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="purchase_item_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $purchaseItemId;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $quantity;

    /**
     * @var float
     *
     * @ORM\Column(name="cost", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $cost;

    /**
     * @var \Database\Entity\Currencies
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Currencies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_id", referencedColumnName="currency_id", nullable=true)
     * })
     */
    private $currency;

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
     * @var \Database\Entity\Purchases
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Purchases")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="purchase_id", referencedColumnName="purchase_id", nullable=true)
     * })
     */
    private $purchase;


    /**
     * Get purchaseItemId
     *
     * @return integer 
     */
    public function getPurchaseItemId()
    {
        return $this->purchaseItemId;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return PurchaseItems
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
     * @return PurchaseItems
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
     * Set currency
     *
     * @param \Database\Entity\Currencies $currency
     * @return PurchaseItems
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
     * Set product
     *
     * @param \Database\Entity\Products $product
     * @return PurchaseItems
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
     * Set purchase
     *
     * @param \Database\Entity\Purchases $purchase
     * @return PurchaseItems
     */
    public function setPurchase(\Database\Entity\Purchases $purchase = null)
    {
        $this->purchase = $purchase;

        return $this;
    }

    /**
     * Get purchase
     *
     * @return \Database\Entity\Purchases 
     */
    public function getPurchase()
    {
        return $this->purchase;
    }
}
