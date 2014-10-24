<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uoms
 *
 * @ORM\Table(name="Uoms")
 * @ORM\Entity
 */
class Uoms
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uom_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uomId;

    /**
     * @var string
     *
     * @ORM\Column(name="uom_name", type="string", length=45, precision=0, scale=0, nullable=false, unique=false)
     */
    private $uomName;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, precision=0, scale=0, nullable=false, unique=false)
     */
    private $recordStatus;


    /**
     * Get uomId
     *
     * @return integer 
     */
    public function getUomId()
    {
        return $this->uomId;
    }

    /**
     * Set uomName
     *
     * @param string $uomName
     * @return Uoms
     */
    public function setUomName($uomName)
    {
        $this->uomName = $uomName;

        return $this;
    }

    /**
     * Get uomName
     *
     * @return string 
     */
    public function getUomName()
    {
        return $this->uomName;
    }

    /**
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return Uoms
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
