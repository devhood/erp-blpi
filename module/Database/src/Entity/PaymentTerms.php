<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentTerms
 *
 * @ORM\Table(name="Payment_Terms")
 * @ORM\Entity
 */
class PaymentTerms
{
    /**
     * @var integer
     *
     * @ORM\Column(name="payment_term_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paymentTermId;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_term_name", type="string", length=45, precision=0, scale=0, nullable=false, unique=false)
     */
    private $paymentTermName;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $recordStatus;


    /**
     * Get paymentTermId
     *
     * @return integer 
     */
    public function getPaymentTermId()
    {
        return $this->paymentTermId;
    }

    /**
     * Set paymentTermName
     *
     * @param string $paymentTermName
     * @return PaymentTerms
     */
    public function setPaymentTermName($paymentTermName)
    {
        $this->paymentTermName = $paymentTermName;

        return $this;
    }

    /**
     * Get paymentTermName
     *
     * @return string 
     */
    public function getPaymentTermName()
    {
        return $this->paymentTermName;
    }

    /**
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return PaymentTerms
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
