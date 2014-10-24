<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalesHistory
 *
 * @ORM\Table(name="Sales_History", indexes={@ORM\Index(name="fk_Sales_History_Sales1", columns={"sales_id"})})
 * @ORM\Entity
 */
class SalesHistory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sh_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $shId;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_status_id", type="integer", nullable=true)
     */
    private $transactionStatusId;

    /**
     * @var string
     *
     * @ORM\Column(name="sales_notes", type="string", length=45, nullable=true)
     */
    private $salesNotes;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="transaction_date", type="datetime", nullable=true)
     */
    private $transactionDate = 'CURRENT_TIMESTAMP';

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
     * Get shId
     *
     * @return integer 
     */
    public function getShId()
    {
        return $this->shId;
    }

    /**
     * Set transactionStatusId
     *
     * @param integer $transactionStatusId
     * @return SalesHistory
     */
    public function setTransactionStatusId($transactionStatusId)
    {
        $this->transactionStatusId = $transactionStatusId;

        return $this;
    }

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
     * Set salesNotes
     *
     * @param string $salesNotes
     * @return SalesHistory
     */
    public function setSalesNotes($salesNotes)
    {
        $this->salesNotes = $salesNotes;

        return $this;
    }

    /**
     * Get salesNotes
     *
     * @return string 
     */
    public function getSalesNotes()
    {
        return $this->salesNotes;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return SalesHistory
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set transactionDate
     *
     * @param \DateTime $transactionDate
     * @return SalesHistory
     */
    public function setTransactionDate($transactionDate)
    {
        $this->transactionDate = $transactionDate;

        return $this;
    }

    /**
     * Get transactionDate
     *
     * @return \DateTime 
     */
    public function getTransactionDate()
    {
        return $this->transactionDate;
    }

    /**
     * Set sales
     *
     * @param \Database\Entity\Sales $sales
     * @return SalesHistory
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
