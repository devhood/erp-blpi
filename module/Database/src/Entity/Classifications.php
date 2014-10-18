<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classifications
 *
 * @ORM\Table(name="Classifications")
 * @ORM\Entity
 */
class Classifications
{
    /**
     * @var integer
     *
     * @ORM\Column(name="classification_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $classificationId;

    /**
     * @var string
     *
     * @ORM\Column(name="classification_name", type="string", length=45, nullable=false)
     */
    private $classificationName;

    /**
     * @var string
     *
     * @ORM\Column(name="classification_status", type="string", length=45, nullable=false)
     */
    private $classificationStatus = 'Active';



    /**
     * Get classificationId
     *
     * @return integer 
     */
    public function getClassificationId()
    {
        return $this->classificationId;
    }

    /**
     * Set classificationName
     *
     * @param string $classificationName
     * @return Classifications
     */
    public function setClassificationName($classificationName)
    {
        $this->classificationName = $classificationName;

        return $this;
    }

    /**
     * Get classificationName
     *
     * @return string 
     */
    public function getClassificationName()
    {
        return $this->classificationName;
    }

    /**
     * Set classificationStatus
     *
     * @param string $classificationStatus
     * @return Classifications
     */
    public function setClassificationStatus($classificationStatus)
    {
        $this->classificationStatus = $classificationStatus;

        return $this;
    }

    /**
     * Get classificationStatus
     *
     * @return string 
     */
    public function getClassificationStatus()
    {
        return $this->classificationStatus;
    }
}
