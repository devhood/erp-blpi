<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PriceTypes
 *
 * @ORM\Table(name="Price_Types", uniqueConstraints={@ORM\UniqueConstraint(name="price_type_name_UNIQUE", columns={"price_type_name"})})
 * @ORM\Entity
 */
class PriceTypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="price_type_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $priceTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="price_type_name", type="string", length=45, precision=0, scale=0, nullable=false, unique=false)
     */
    private $priceTypeName;

    /**
     * @var string
     *
     * @ORM\Column(name="price_type_status", type="string", length=45, precision=0, scale=0, nullable=false, unique=false)
     */
    private $priceTypeStatus;


    /**
     * Get priceTypeId
     *
     * @return integer 
     */
    public function getPriceTypeId()
    {
        return $this->priceTypeId;
    }

    /**
     * Set priceTypeName
     *
     * @param string $priceTypeName
     * @return PriceTypes
     */
    public function setPriceTypeName($priceTypeName)
    {
        $this->priceTypeName = $priceTypeName;

        return $this;
    }

    /**
     * Get priceTypeName
     *
     * @return string 
     */
    public function getPriceTypeName()
    {
        return $this->priceTypeName;
    }

    /**
     * Set priceTypeStatus
     *
     * @param string $priceTypeStatus
     * @return PriceTypes
     */
    public function setPriceTypeStatus($priceTypeStatus)
    {
        $this->priceTypeStatus = $priceTypeStatus;

        return $this;
    }

    /**
     * Get priceTypeStatus
     *
     * @return string 
     */
    public function getPriceTypeStatus()
    {
        return $this->priceTypeStatus;
    }
}
