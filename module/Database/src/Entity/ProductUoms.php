<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductUoms
 *
 * @ORM\Table(name="Product_Uoms", indexes={@ORM\Index(name="fk_Product_Uoms_Products1_idx", columns={"product_id"}), @ORM\Index(name="fk_Product_Uoms_Uoms1_idx", columns={"uom_id"})})
 * @ORM\Entity
 */
class ProductUoms
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pu_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $puId;

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
     * @var \Database\Entity\Uoms
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Uoms")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uom_id", referencedColumnName="uom_id", nullable=true)
     * })
     */
    private $uom;


    /**
     * Get puId
     *
     * @return integer 
     */
    public function getPuId()
    {
        return $this->puId;
    }

    /**
     * Set product
     *
     * @param \Database\Entity\Products $product
     * @return ProductUoms
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
     * Set uom
     *
     * @param \Database\Entity\Uoms $uom
     * @return ProductUoms
     */
    public function setUom(\Database\Entity\Uoms $uom = null)
    {
        $this->uom = $uom;

        return $this;
    }

    /**
     * Get uom
     *
     * @return \Database\Entity\Uoms 
     */
    public function getUom()
    {
        return $this->uom;
    }
}
