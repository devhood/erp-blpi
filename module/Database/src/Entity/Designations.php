<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Designations
 *
 * @ORM\Table(name="Designations")
 * @ORM\Entity
 */
class Designations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="designation_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $designationId;

    /**
     * @var string
     *
     * @ORM\Column(name="designation_name", type="string", length=250, nullable=true)
     */
    private $designationName;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, nullable=true)
     */
    private $recordStatus;



    /**
     * Get designationId
     *
     * @return integer 
     */
    public function getDesignationId()
    {
        return $this->designationId;
    }

    /**
     * Set designationName
     *
     * @param string $designationName
     * @return Designations
     */
    public function setDesignationName($designationName)
    {
        $this->designationName = $designationName;

        return $this;
    }

    /**
     * Get designationName
     *
     * @return string 
     */
    public function getDesignationName()
    {
        return $this->designationName;
    }

    /**
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return Designations
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
