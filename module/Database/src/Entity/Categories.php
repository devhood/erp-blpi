<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="Categories")
 * @ORM\Entity
 */
class Categories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="category_type", type="string", length=45, precision=0, scale=0, nullable=false, unique=false)
     */
    private $categoryType;

    /**
     * @var string
     *
     * @ORM\Column(name="category_name", type="string", length=45, precision=0, scale=0, nullable=false, unique=false)
     */
    private $categoryName;

    /**
     * @var string
     *
     * @ORM\Column(name="category_status", type="string", length=45, precision=0, scale=0, nullable=false, unique=false)
     */
    private $categoryStatus;


    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set categoryType
     *
     * @param string $categoryType
     * @return Categories
     */
    public function setCategoryType($categoryType)
    {
        $this->categoryType = $categoryType;

        return $this;
    }

    /**
     * Get categoryType
     *
     * @return string 
     */
    public function getCategoryType()
    {
        return $this->categoryType;
    }

    /**
     * Set categoryName
     *
     * @param string $categoryName
     * @return Categories
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName
     *
     * @return string 
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Set categoryStatus
     *
     * @param string $categoryStatus
     * @return Categories
     */
    public function setCategoryStatus($categoryStatus)
    {
        $this->categoryStatus = $categoryStatus;

        return $this;
    }

    /**
     * Get categoryStatus
     *
     * @return string 
     */
    public function getCategoryStatus()
    {
        return $this->categoryStatus;
    }
}
