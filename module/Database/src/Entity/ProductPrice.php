<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductPrice
 *
 * @ORM\Table(name="Product_Price", indexes={@ORM\Index(name="fk_Product_Price_Price_Types1_idx", columns={"price_type_id"}), @ORM\Index(name="fk_Product_Price_Currencies1_idx", columns={"currency_id"}), @ORM\Index(name="fk_Product_Price_Products1_idx", columns={"product_id"})})
 * @ORM\Entity
 */
class ProductPrice
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pp_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ppId;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price;

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
     * @var \Database\Entity\PriceTypes
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\PriceTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="price_type_id", referencedColumnName="price_type_id")
     * })
     */
    private $priceType;

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
     * Get ppId
     *
     * @return integer 
     */
    public function getPpId()
    {
        return $this->ppId;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return ProductPrice
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
     * Set currency
     *
     * @param \Database\Entity\Currencies $currency
     * @return ProductPrice
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
     * Set priceType
     *
     * @param \Database\Entity\PriceTypes $priceType
     * @return ProductPrice
     */
    public function setPriceType(\Database\Entity\PriceTypes $priceType = null)
    {
        $this->priceType = $priceType;

        return $this;
    }

    /**
     * Get priceType
     *
     * @return \Database\Entity\PriceTypes 
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Set product
     *
     * @param \Database\Entity\Products $product
     * @return ProductPrice
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
