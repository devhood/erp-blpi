<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentTypes
 *
 * @ORM\Table(name="Document_Types")
 * @ORM\Entity
 */
class DocumentTypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="document_type_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $documentTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="document_type_name", type="string", length=250, precision=0, scale=0, nullable=true, unique=false)
     */
    private $documentTypeName;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
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
     * @return DocumentTypes
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
     * @return DocumentTypes
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
