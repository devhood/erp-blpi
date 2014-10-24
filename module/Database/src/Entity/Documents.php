<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documents
 *
 * @ORM\Table(name="Documents", indexes={@ORM\Index(name="fk_Documents_Products1_idx", columns={"product_id"}), @ORM\Index(name="fk_Documents_Customers1_idx", columns={"cutomer_id"}), @ORM\Index(name="fk_Documents_Sales1_idx", columns={"sales_id"}), @ORM\Index(name="fk_Documents_DocumentTypes1_idx", columns={"document_type_id"})})
 * @ORM\Entity
 */
class Documents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="document_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $documentId;

    /**
     * @var string
     *
     * @ORM\Column(name="document_name", type="string", length=250, nullable=true)
     */
    private $documentName;

    /**
     * @var string
     *
     * @ORM\Column(name="document_link", type="string", length=250, nullable=true)
     */
    private $documentLink;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, nullable=true)
     */
    private $recordStatus;

    /**
     * @var \Database\Entity\Customers
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutomer_id", referencedColumnName="customer_id")
     * })
     */
    private $cutomer;

    /**
     * @var \Database\Entity\Documenttypes
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Documenttypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="document_type_id", referencedColumnName="document_type_id")
     * })
     */
    private $documentType;

    /**
     * @var \Database\Entity\Products
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="product_id")
     * })
     */
    private $product;

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
     * Get documentId
     *
     * @return integer 
     */
    public function getDocumentId()
    {
        return $this->documentId;
    }

    /**
     * Set documentName
     *
     * @param string $documentName
     * @return Documents
     */
    public function setDocumentName($documentName)
    {
        $this->documentName = $documentName;

        return $this;
    }

    /**
     * Get documentName
     *
     * @return string 
     */
    public function getDocumentName()
    {
        return $this->documentName;
    }

    /**
     * Set documentLink
     *
     * @param string $documentLink
     * @return Documents
     */
    public function setDocumentLink($documentLink)
    {
        $this->documentLink = $documentLink;

        return $this;
    }

    /**
     * Get documentLink
     *
     * @return string 
     */
    public function getDocumentLink()
    {
        return $this->documentLink;
    }

    /**
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return Documents
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

    /**
     * Set cutomer
     *
     * @param \Database\Entity\Customers $cutomer
     * @return Documents
     */
    public function setCutomer(\Database\Entity\Customers $cutomer = null)
    {
        $this->cutomer = $cutomer;

        return $this;
    }

    /**
     * Get cutomer
     *
     * @return \Database\Entity\Customers 
     */
    public function getCutomer()
    {
        return $this->cutomer;
    }

    /**
     * Set documentType
     *
     * @param \Database\Entity\Documenttypes $documentType
     * @return Documents
     */
    public function setDocumentType(\Database\Entity\Documenttypes $documentType = null)
    {
        $this->documentType = $documentType;

        return $this;
    }

    /**
     * Get documentType
     *
     * @return \Database\Entity\Documenttypes 
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * Set product
     *
     * @param \Database\Entity\Products $product
     * @return Documents
     */
    public function setProduct(\Database\Entity\Products $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Database\Entity\Products 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set sales
     *
     * @param \Database\Entity\Sales $sales
     * @return Documents
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
