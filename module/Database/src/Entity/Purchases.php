<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Purchases
 *
 * @ORM\Table(name="Purchases", indexes={@ORM\Index(name="fk_Purchases_Suppliers1_idx", columns={"supplier_id"})})
 * @ORM\Entity
 */
class Purchases
{
    /**
     * @var integer
     *
     * @ORM\Column(name="purchase_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $purchaseId;

    /**
     * @var string
     *
     * @ORM\Column(name="reference_no", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $referenceNo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="purchase_date", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $purchaseDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expected_arrival_date", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $expectedArrivalDate;

    /**
     * @var string
     *
     * @ORM\Column(name="purchase_status", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $purchaseStatus;

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
     * Get purchaseId
     *
     * @return integer 
     */
    public function getPurchaseId()
    {
        return $this->purchaseId;
    }

    /**
     * Set referenceNo
     *
     * @param string $referenceNo
     * @return Purchases
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
     * Set purchaseDate
     *
     * @param \DateTime $purchaseDate
     * @return Purchases
     */
    public function setPurchaseDate($purchaseDate)
    {
        $this->purchaseDate = $purchaseDate;

        return $this;
    }

    /**
     * Get purchaseDate
     *
     * @return \DateTime 
     */
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    /**
     * Set expectedArrivalDate
     *
     * @param \DateTime $expectedArrivalDate
     * @return Purchases
     */
    public function setExpectedArrivalDate($expectedArrivalDate)
    {
        $this->expectedArrivalDate = $expectedArrivalDate;

        return $this;
    }

    /**
     * Get expectedArrivalDate
     *
     * @return \DateTime 
     */
    public function getExpectedArrivalDate()
    {
        return $this->expectedArrivalDate;
    }

    /**
     * Set purchaseStatus
     *
     * @param string $purchaseStatus
     * @return Purchases
     */
    public function setPurchaseStatus($purchaseStatus)
    {
        $this->purchaseStatus = $purchaseStatus;

        return $this;
    }

    /**
     * Get purchaseStatus
     *
     * @return string 
     */
    public function getPurchaseStatus()
    {
        return $this->purchaseStatus;
    }

    /**
     * Set supplier
     *
     * @param \Database\Entity\Suppliers $supplier
     * @return Purchases
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
