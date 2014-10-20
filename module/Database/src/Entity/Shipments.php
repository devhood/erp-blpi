<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shipments
 *
 * @ORM\Table(name="Shipments", indexes={@ORM\Index(name="fk_Shipments_Suppliers1_idx", columns={"supplier_id"})})
 * @ORM\Entity
 */
class Shipments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="shipment_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $shipmentId;

    /**
     * @var string
     *
     * @ORM\Column(name="reference_no", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $referenceNo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="arrival_date", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $arrivalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="confirmed_by", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $confirmedBy;

    /**
     * @var integer
     *
     * @ORM\Column(name="approved_by", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $approvedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="shipment_status", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $shipmentStatus;

    /**
     * @var \Database\Entity\Suppliers
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Suppliers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supplier_id", referencedColumnName="supplier_id", nullable=true)
     * })
     */
    private $supplier;


    /**
     * Get shipmentId
     *
     * @return integer 
     */
    public function getShipmentId()
    {
        return $this->shipmentId;
    }

    /**
     * Set referenceNo
     *
     * @param string $referenceNo
     * @return Shipments
     */
    public function setReferenceNo($referenceNo)
    {
        $this->referenceNo = $referenceNo;

        return $this;
    }

    /**
     * Get referenceNo
     *
     * @return string 
     */
    public function getReferenceNo()
    {
        return $this->referenceNo;
    }

    /**
     * Set arrivalDate
     *
     * @param \DateTime $arrivalDate
     * @return Shipments
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    /**
     * Get arrivalDate
     *
     * @return \DateTime 
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * Set confirmedBy
     *
     * @param integer $confirmedBy
     * @return Shipments
     */
    public function setConfirmedBy($confirmedBy)
    {
        $this->confirmedBy = $confirmedBy;

        return $this;
    }

    /**
     * Get confirmedBy
     *
     * @return integer 
     */
    public function getConfirmedBy()
    {
        return $this->confirmedBy;
    }

    /**
     * Set approvedBy
     *
     * @param integer $approvedBy
     * @return Shipments
     */
    public function setApprovedBy($approvedBy)
    {
        $this->approvedBy = $approvedBy;

        return $this;
    }

    /**
     * Get approvedBy
     *
     * @return integer 
     */
    public function getApprovedBy()
    {
        return $this->approvedBy;
    }

    /**
     * Set shipmentStatus
     *
     * @param string $shipmentStatus
     * @return Shipments
     */
    public function setShipmentStatus($shipmentStatus)
    {
        $this->shipmentStatus = $shipmentStatus;

        return $this;
    }

    /**
     * Get shipmentStatus
     *
     * @return string 
     */
    public function getShipmentStatus()
    {
        return $this->shipmentStatus;
    }

    /**
     * Set supplier
     *
     * @param \Database\Entity\Suppliers $supplier
     * @return Shipments
     */
    public function setSupplier(\Database\Entity\Suppliers $supplier = null)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier
     *
     * @return \Database\Entity\Suppliers 
     */
    public function getSupplier()
    {
        return $this->supplier;
    }
}
