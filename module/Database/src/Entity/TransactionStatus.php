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
     * @ORM\Column(name="transaction_status_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $transactionStatusId;

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_status_name", type="string", length=45, nullable=true)
     */
    private $transactionStatusName;

    /**
     * @var string
     *
     * @ORM\Column(name="recod_status", type="string", length=45, nullable=true)
     */
    private $recodStatus = 'Active';



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
