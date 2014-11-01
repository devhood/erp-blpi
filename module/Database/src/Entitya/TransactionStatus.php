<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransactionStatus
 *
 * @ORM\Table(name="Transaction_Status")
 * @ORM\Entity
 */
class TransactionStatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_status_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $transactionStatusId;

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_status_name", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $transactionStatusName;

    /**
     * @var string
     *
     * @ORM\Column(name="recod_status", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $recodStatus;


    /**
     * Get transactionStatusId
     *
     * @return integer 
     */
    public function getTransactionStatusId()
    {
        return $this->transactionStatusId;
    }

    /**
     * Set transactionStatusName
     *
     * @param string $transactionStatusName
     * @return TransactionStatus
     */
    public function setTransactionStatusName($transactionStatusName)
    {
        $this->transactionStatusName = $transactionStatusName;

        return $this;
    }

    /**
     * Get transactionStatusName
     *
     * @return string 
     */
    public function getTransactionStatusName()
    {
        return $this->transactionStatusName;
    }

    /**
     * Set recodStatus
     *
     * @param string $recodStatus
     * @return TransactionStatus
     */
    public function setRecodStatus($recodStatus)
    {
        $this->recodStatus = $recodStatus;

        return $this;
    }

    /**
     * Get recodStatus
     *
     * @return string 
     */
    public function getRecodStatus()
    {
        return $this->recodStatus;
    }
}
