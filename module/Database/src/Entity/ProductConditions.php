<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductConditions
 *
 * @ORM\Table(name="Product_Conditions")
 * @ORM\Entity
 */
class ProductConditions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="condition_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $conditionId;

    /**
     * @var string
     *
     * @ORM\Column(name="condtion_name", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $condtionName;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $recordStatus;


    /**
     * Get conditionId
     *
     * @return integer 
     */
    public function getConditionId()
    {
        return $this->conditionId;
    }

    /**
     * Set condtionName
     *
     * @param string $condtionName
     * @return ProductConditions
     */
    public function setCondtionName($condtionName)
    {
        $this->condtionName = $condtionName;

        return $this;
    }

    /**
     * Get condtionName
     *
     * @return string 
     */
    public function getCondtionName()
    {
        return $this->condtionName;
    }

    /**
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return ProductConditions
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
