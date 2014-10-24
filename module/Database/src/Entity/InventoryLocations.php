<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InventoryLocations
 *
 * @ORM\Table(name="Inventory_Locations", indexes={@ORM\Index(name="fk_Inventory_Locations_Address1_idx", columns={"address_id"})})
 * @ORM\Entity
 */
class InventoryLocations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="location_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $locationId;

    /**
     * @var string
     *
     * @ORM\Column(name="location_name", type="string", length=100, nullable=true)
     */
    private $locationName;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, nullable=true)
     */
    private $recordStatus = 'Active';

    /**
     * @var \Database\Entity\Address
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_id", referencedColumnName="address_id")
     * })
     */
    private $address;



    /**
     * Get locationId
     *
     * @return integer 
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Set locationName
     *
     * @param string $locationName
     * @return InventoryLocations
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;

        return $this;
    }

    /**
     * Get locationName
     *
     * @return string 
     */
    public function getLocationName()
    {
        return $this->locationName;
    }

    /**
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return InventoryLocations
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

    /**
     * Set address
     *
     * @param \Database\Entity\Address $address
     * @return InventoryLocations
     */
    public function setAddress(\Database\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \Database\Entity\Address 
     */
    public function getAddress()
    {
        return $this->address;
    }
}
