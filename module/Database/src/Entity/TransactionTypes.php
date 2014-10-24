<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransactionTypes
 *
 * @ORM\Table(name="Transaction_Types")
 * @ORM\Entity
 */
class TransactionTypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_type_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $transactionTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_type_name", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $transactionTypeName;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $recordStatus;


    /**
     * Get transactionTypeId
     *
     * @return integer 
     */
    public function getTransactionTypeId()
    {
        return $this->transactionTypeId;
    }

    /**
     * Set transactionTypeName
     *
     * @param string $transactionTypeName
     * @return TransactionTypes
     */
    public function setTransactionTypeName($transactionTypeName)
    {
        $this->transactionTypeName = $transactionTypeName;

        return $this;
    }

    /**
     * Get transactionTypeName
     *
     * @return string 
     */
    public function getTransactionTypeName()
    {
        return $this->transactionTypeName;
    }

    /**
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return TransactionTypes
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
