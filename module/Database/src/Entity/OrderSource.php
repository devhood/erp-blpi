<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderSource
 *
 * @ORM\Table(name="Order_Source")
 * @ORM\Entity
 */
class OrderSource
{
    /**
     * @var integer
     *
     * @ORM\Column(name="order_source_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderSourceId;

    /**
     * @var string
     *
     * @ORM\Column(name="order_source_name", type="string", length=45, nullable=true)
     */
    private $orderSourceName;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, nullable=true)
     */
    private $recordStatus;



    /**
     * Get orderSourceId
     *
     * @return integer 
     */
    public function getOrderSourceId()
    {
        return $this->orderSourceId;
    }

    /**
     * Set orderSourceName
     *
     * @param string $orderSourceName
     * @return OrderSource
     */
    public function setOrderSourceName($orderSourceName)
    {
        $this->orderSourceName = $orderSourceName;

        return $this;
    }

    /**
     * Get orderSourceName
     *
     * @return string 
     */
    public function getOrderSourceName()
    {
        return $this->orderSourceName;
    }

    /**
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return OrderSource
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
