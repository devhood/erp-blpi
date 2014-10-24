<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalesPayment
 *
 * @ORM\Table(name="Sales_Payment", indexes={@ORM\Index(name="fk_Sales_Payment_Sales1_idx", columns={"sales_id"})})
 * @ORM\Entity
 */
class SalesPayment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sp_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $spId;

    /**
     * @var integer
     *
     * @ORM\Column(name="payment_type_id", type="integer", nullable=true)
     */
    private $paymentTypeId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="payment_date", type="date", nullable=true)
     */
    private $paymentDate;

    /**
     * @var string
     *
     * @ORM\Column(name="check_no", type="string", length=45, nullable=true)
     */
    private $checkNo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="check_date", type="date", nullable=true)
     */
    private $checkDate;

    /**
     * @var string
     *
     * @ORM\Column(name="bank", type="string", length=100, nullable=true)
     */
    private $bank;

    /**
     * @var string
     *
     * @ORM\Column(name="branch", type="string", length=45, nullable=true)
     */
    private $branch;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=0, nullable=true)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deposit_date", type="date", nullable=true)
     */
    private $depositDate;

    /**
     * @var \Database\Entity\Sales
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Sales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sales_id", referencedColumnName="sales_id")
     * })
     */
    private $sales;



    /**
     * Get spId
     *
     * @return integer 
     */
    public function getSpId()
    {
        return $this->spId;
    }

    /**
     * Set paymentTypeId
     *
     * @param integer $paymentTypeId
     * @return SalesPayment
     */
    public function setPaymentTypeId($paymentTypeId)
    {
        $this->paymentTypeId = $paymentTypeId;

        return $this;
    }

    /**
     * Get paymentTypeId
     *
     * @return integer 
     */
    public function getPaymentTypeId()
    {
        return $this->paymentTypeId;
    }

    /**
     * Set paymentDate
     *
     * @param \DateTime $paymentDate
     * @return SalesPayment
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    /**
     * Get paymentDate
     *
     * @return \DateTime 
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * Set checkNo
     *
     * @param string $checkNo
     * @return SalesPayment
     */
    public function setCheckNo($checkNo)
    {
        $this->checkNo = $checkNo;

        return $this;
    }

    /**
     * Get checkNo
     *
     * @return string 
     */
    public function getCheckNo()
    {
        return $this->checkNo;
    }

    /**
     * Set checkDate
     *
     * @param \DateTime $checkDate
     * @return SalesPayment
     */
    public function setCheckDate($checkDate)
    {
        $this->checkDate = $checkDate;

        return $this;
    }

    /**
     * Get checkDate
     *
     * @return \DateTime 
     */
    public function getCheckDate()
    {
        return $this->checkDate;
    }

    /**
     * Set bank
     *
     * @param string $bank
     * @return SalesPayment
     */
    public function setBank($bank)
    {
        $this->bank = $bank;

        return $this;
    }

    /**
     * Get bank
     *
     * @return string 
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Set branch
     *
     * @param string $branch
     * @return SalesPayment
     */
    public function setBranch($branch)
    {
        $this->branch = $branch;

        return $this;
    }

    /**
     * Get branch
     *
     * @return string 
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return SalesPayment
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set depositDate
     *
     * @param \DateTime $depositDate
     * @return SalesPayment
     */
    public function setDepositDate($depositDate)
    {
        $this->depositDate = $depositDate;

        return $this;
    }

    /**
     * Get depositDate
     *
     * @return \DateTime 
     */
    public function getDepositDate()
    {
        return $this->depositDate;
    }

    /**
     * Set sales
     *
     * @param \Database\Entity\Sales $sales
     * @return SalesPayment
     */
    public function setSales(\Database\Entity\Sales $sales = null)
    {
        $this->sales = $sales;

        return $this;
    }

    /**
     * Get sales
     *
     * @return \Database\Entity\Sales 
     */
    public function getSales()
    {
        return $this->sales;
    }
}
