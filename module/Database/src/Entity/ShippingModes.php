<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShippingModes
 *
 * @ORM\Table(name="Shipping_Modes")
 * @ORM\Entity
 */
class ShippingModes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="shipping_mode_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $shippingModeId;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_mode_name", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $shippingModeName;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $recordStatus;


    /**
     * Get shippingModeId
     *
     * @return integer 
     */
    public function getShippingModeId()
    {
        return $this->shippingModeId;
    }

    /**
     * Set shippingModeName
     *
     * @param string $shippingModeName
     * @return ShippingModes
     */
    public function setShippingModeName($shippingModeName)
    {
        $this->shippingModeName = $shippingModeName;

        return $this;
    }

    /**
     * Get shippingModeName
     *
     * @return string 
     */
    public function getShippingModeName()
    {
        return $this->shippingModeName;
    }

    /**
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return ShippingModes
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
