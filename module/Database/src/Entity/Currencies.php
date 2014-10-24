<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currencies
 *
 * @ORM\Table(name="Currencies", uniqueConstraints={@ORM\UniqueConstraint(name="currency_name_UNIQUE", columns={"currency_name"})})
 * @ORM\Entity
 */
class Currencies
{
    /**
     * @var integer
     *
     * @ORM\Column(name="currency_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $currencyId;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_name", type="string", length=45, nullable=false)
     */
    private $currencyName;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, nullable=true)
     */
    private $recordStatus = 'Active';



    /**
     * Get currencyId
     *
     * @return integer 
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set currencyName
     *
     * @param string $currencyName
     * @return Currencies
     */
    public function setCurrencyName($currencyName)
    {
        $this->currencyName = $currencyName;

        return $this;
    }

    /**
     * Get currencyName
     *
     * @return string 
     */
    public function getCurrencyName()
    {
        return $this->currencyName;
    }

    /**
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return Currencies
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
