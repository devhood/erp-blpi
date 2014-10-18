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
     * @ORM\Column(name="uom_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uomId;

    /**
     * @var string
     *
     * @ORM\Column(name="uom_name", type="string", length=45, nullable=false)
     */
    private $uomName;

    /**
     * @var string
     *
     * @ORM\Column(name="uom_status", type="string", length=45, nullable=false)
     */
    private $uomStatus = 'Active';



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
     * Set uomStatus
     *
     * @param string $uomStatus
     * @return Uoms
     */
    public function setUomStatus($uomStatus)
    {
        $this->uomStatus = $uomStatus;

        return $this;
    }

    /**
     * Get uomStatus
     *
     * @return string 
     */
    public function getUomStatus()
    {
        return $this->uomStatus;
    }
}
