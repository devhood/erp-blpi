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
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="category_type", type="string", length=45, nullable=false)
     */
    private $categoryType;

    /**
     * @var string
     *
     * @ORM\Column(name="category_name", type="string", length=45, nullable=false)
     */
    private $categoryName;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, nullable=false)
     */
    private $recordStatus = 'Active';



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
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return Categories
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
}
