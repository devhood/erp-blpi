<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalesItems
 *
 * @ORM\Table(name="Sales_Items", indexes={@ORM\Index(name="fk_Sales_Items_Sales1_idx", columns={"sales_id"})})
 * @ORM\Entity
 */
class SalesItems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sales_item_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $salesItemId;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $productId;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $quantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_return", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $quantityReturn;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $price;

    /**
     * @var float
     *
     * @ORM\Column(name="discount", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $discount;

    /**
     * @var string
     *
     * @ORM\Column(name="freebie", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $freebie;

    /**
     * @var float
     *
     * @ORM\Column(name="vat", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $vat;

    /**
     * @var float
     *
     * @ORM\Column(name="sales", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $sales;

    /**
     * @var float
     *
     * @ORM\Column(name="vat_return", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $vatReturn;

    /**
     * @var float
     *
     * @ORM\Column(name="sales_return", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $salesReturn;

    /**
     * @var string
     *
     * @ORM\Column(name="return_status", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $returnStatus;

    /**
     * @var \Database\Entity\Sales
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Sales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sales_id", referencedColumnName="sales_id", nullable=true)
     * })
     */
    private $sales2;


    /**
     * Get salesItemId
     *
     * @return integer 
     */
    public function getSalesItemId()
    {
        return $this->salesItemId;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     * @return SalesItems
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

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
     * Set quantity
     *
     * @param integer $quantity
     * @return SalesItems
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
     * Set quantityReturn
     *
     * @param integer $quantityReturn
     * @return SalesItems
     */
    public function setQuantityReturn($quantityReturn)
    {
        $this->quantityReturn = $quantityReturn;

        return $this;
    }

    /**
     * Get quantityReturn
     *
     * @return integer 
     */
    public function getQuantityReturn()
    {
        return $this->quantityReturn;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return SalesItems
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set discount
     *
     * @param float $discount
     * @return SalesItems
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return float 
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set freebie
     *
     * @param string $freebie
     * @return SalesItems
     */
    public function setFreebie($freebie)
    {
        $this->freebie = $freebie;

        return $this;
    }

    /**
     * Get freebie
     *
     * @return string 
     */
    public function getFreebie()
    {
        return $this->freebie;
    }

    /**
     * Set vat
     *
     * @param float $vat
     * @return SalesItems
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return float 
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Set sales
     *
     * @param float $sales
     * @return SalesItems
     */
    public function setSales($sales)
    {
        $this->sales = $sales;

        return $this;
    }

    /**
     * Get sales
     *
     * @return float 
     */
    public function getSales()
    {
        return $this->sales;
    }

    /**
     * Set vatReturn
     *
     * @param float $vatReturn
     * @return SalesItems
     */
    public function setVatReturn($vatReturn)
    {
        $this->vatReturn = $vatReturn;

        return $this;
    }

    /**
     * Get vatReturn
     *
     * @return float 
     */
    public function getVatReturn()
    {
        return $this->vatReturn;
    }

    /**
     * Set salesReturn
     *
     * @param float $salesReturn
     * @return SalesItems
     */
    public function setSalesReturn($salesReturn)
    {
        $this->salesReturn = $salesReturn;

        return $this;
    }

    /**
     * Get salesReturn
     *
     * @return float 
     */
    public function getSalesReturn()
    {
        return $this->salesReturn;
    }

    /**
     * Set returnStatus
     *
     * @param string $returnStatus
     * @return SalesItems
     */
    public function setReturnStatus($returnStatus)
    {
        $this->returnStatus = $returnStatus;

        return $this;
    }

    /**
     * Get returnStatus
     *
     * @return string 
     */
    public function getReturnStatus()
    {
        return $this->returnStatus;
    }

    /**
     * Set sales2
     *
     * @param \Database\Entity\Sales $sales2
     * @return SalesItems
     */
    public function setSales2(\Database\Entity\Sales $sales2 = null)
    {
        $this->sales2 = $sales2;

        return $this;
    }

    /**
     * Get sales2
     *
     * @return \Database\Entity\Sales 
     */
    public function getSales2()
    {
        return $this->sales2;
    }
}
