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
     * @ORM\Column(name="condition_name", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $conditionName;

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
     * Set conditionName
     *
     * @param string $conditionName
     * @return ProductConditions
     */
    public function setConditionName($conditionName)
    {
        $this->conditionName = $conditionName;

        return $this;
    }

    /**
     * Get conditionName
     *
     * @return string 
     */
    public function getConditionName()
    {
        return $this->conditionName;
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
