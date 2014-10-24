<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Counters
 *
 * @ORM\Table(name="Counters")
 * @ORM\Entity
 */
class Counters
{
    /**
     * @var integer
     *
     * @ORM\Column(name="counter_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $counterId;

    /**
     * @var string
     *
     * @ORM\Column(name="counter_type", type="string", length=45, nullable=true)
     */
    private $counterType;

    /**
     * @var string
     *
     * @ORM\Column(name="prefix", type="string", length=45, nullable=true)
     */
    private $prefix;

    /**
     * @var string
     *
     * @ORM\Column(name="suffix", type="string", length=45, nullable=true)
     */
    private $suffix;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="integer", nullable=true)
     */
    private $count;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, nullable=true)
     */
    private $recordStatus;



    /**
     * Get counterId
     *
     * @return integer 
     */
    public function getCounterId()
    {
        return $this->counterId;
    }

    /**
     * Set counterType
     *
     * @param string $counterType
     * @return Counters
     */
    public function setCounterType($counterType)
    {
        $this->counterType = $counterType;

        return $this;
    }

    /**
     * Get counterType
     *
     * @return string 
     */
    public function getCounterType()
    {
        return $this->counterType;
    }

    /**
     * Set prefix
     *
     * @param string $prefix
     * @return Counters
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * Get prefix
     *
     * @return string 
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Set suffix
     *
     * @param string $suffix
     * @return Counters
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;

        return $this;
    }

    /**
     * Get suffix
     *
     * @return string 
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * Set count
     *
     * @param integer $count
     * @return Counters
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer 
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return Counters
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
