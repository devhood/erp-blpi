<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documents
 *
 * @ORM\Table(name="Documents", indexes={@ORM\Index(name="fk_Documents_Products1_idx", columns={"product_id"}), @ORM\Index(name="fk_Documents_Customers1_idx", columns={"customer_id"}), @ORM\Index(name="fk_Documents_Sales1_idx", columns={"sales_id"}), @ORM\Index(name="fk_Documents_DocumentTypes1_idx", columns={"document_type_id"})})
 * @ORM\Entity
 */
class Documents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="document_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $documentId;

    /**
     * @var string
     *
     * @ORM\Column(name="document_name", type="string", length=250, precision=0, scale=0, nullable=true, unique=false)
     */
    private $documentName;

    /**
     * @var string
     *
     * @ORM\Column(name="document_link", type="string", length=250, precision=0, scale=0, nullable=true, unique=false)
     */
    private $documentLink;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $recordStatus;

    /**
     * @var \Database\Entity\Products
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="product_id", nullable=true)
     * })
     */
    private $product;

    /**
     * @var \Database\Entity\Customers
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="customer_id", nullable=true)
     * })
     */
    private $customer;

    /**
     * @var \Database\Entity\Sales
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Sales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sales_id", referencedColumnName="sales_id", nullable=true)
     * })
     */
    private $sales;

    /**
     * @var \Database\Entity\DocumentTypes
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\DocumentTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="document_type_id", referencedColumnName="document_type_id", nullable=true)
     * })
     */
    private $documentType;


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
     * Set customer
     *
     * @param \Database\Entity\Customers $customer
     * @return Documents
     */
    public function setCustomer(\Database\Entity\Customers $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \Database\Entity\Customers 
     */
    public function getCustomer()
    {
        return $this->customer;
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

    /**
     * Set documentType
     *
     * @param \Database\Entity\DocumentTypes $documentType
     * @return Documents
     */
    public function setDocumentType(\Database\Entity\DocumentTypes $documentType = null)
    {
        $this->documentType = $documentType;

        return $this;
    }

    /**
     * Get documentType
     *
     * @return \Database\Entity\DocumentTypes 
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }
}
