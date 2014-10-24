<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documenttypes
 *
 * @ORM\Table(name="DocumentTypes")
 * @ORM\Entity
 */
class Documenttypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="document_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $documentTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="document_type_name", type="string", length=250, nullable=true)
     */
    private $documentTypeName;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, nullable=true)
     */
    private $recordStatus;



    /**
     * Get documentTypeId
     *
     * @return integer 
     */
    public function getDocumentTypeId()
    {
        return $this->documentTypeId;
    }

    /**
     * Set documentTypeName
     *
     * @param string $documentTypeName
     * @return Documenttypes
     */
    public function setDocumentTypeName($documentTypeName)
    {
        $this->documentTypeName = $documentTypeName;

        return $this;
    }

    /**
     * Get documentTypeName
     *
     * @return string 
     */
    public function getDocumentTypeName()
    {
        return $this->documentTypeName;
    }

    /**
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return Documenttypes
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
