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
     * @ORM\Column(name="shipment_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $shipmentId;

    /**
     * @var string
     *
     * @ORM\Column(name="reference_no", type="string", length=45, nullable=true)
     */
    private $referenceNo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="arrival_date", type="date", nullable=true)
     */
    private $arrivalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="confirmed_by", type="integer", nullable=true)
     */
    private $confirmedBy;

    /**
     * @var integer
     *
     * @ORM\Column(name="approved_by", type="integer", nullable=true)
     */
    private $approvedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="shipment_status", type="string", length=45, nullable=true)
     */
    private $shipmentStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="shipment_notes", type="text", nullable=true)
     */
    private $shipmentNotes;

    /**
     * @var \Database\Entity\Suppliers
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Suppliers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supplier_id", referencedColumnName="supplier_id")
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
     * Set shipmentNotes
     *
     * @param string $shipmentNotes
     * @return Shipments
     */
    public function setShipmentNotes($shipmentNotes)
    {
        $this->shipmentNotes = $shipmentNotes;

        return $this;
    }

    /**
     * Get shipmentNotes
     *
     * @return string 
     */
    public function getShipmentNotes()
    {
        return $this->shipmentNotes;
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
