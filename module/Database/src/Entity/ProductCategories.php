<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductCategories
 *
 * @ORM\Table(name="Product_Categories", indexes={@ORM\Index(name="fk_Product_Categories_Products1_idx", columns={"product_id"}), @ORM\Index(name="fk_Product_Categories_Categories1_idx", columns={"category_id"})})
 * @ORM\Entity
 */
class ProductCategories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pc_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pcId;

    /**
     * @var \Database\Entity\Categories
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="category_id", nullable=true)
     * })
     */
    private $category;

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
     * Get pcId
     *
     * @return integer 
     */
    public function getPcId()
    {
        return $this->pcId;
    }

    /**
     * Set category
     *
     * @param \Database\Entity\Categories $category
     * @return ProductCategories
     */
    public function setCategory(\Database\Entity\Categories $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Database\Entity\Categories 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set product
     *
     * @param \Database\Entity\Products $product
     * @return ProductCategories
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
