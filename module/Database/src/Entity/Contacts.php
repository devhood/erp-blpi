<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contacts
 *
 * @ORM\Table(name="Contacts", indexes={@ORM\Index(name="fk_Contacts_Customers1_idx", columns={"customer_id"})})
 * @ORM\Entity
 */
class Contacts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="contact_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contactId;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="primary", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $primary;

    /**
     * @var string
     *
     * @ORM\Column(name="full_name", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $fullName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $recordStatus;

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
     * Get contactId
     *
     * @return integer 
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set position
     *
     * @param string $position
     * @return Contacts
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set primary
     *
     * @param string $primary
     * @return Contacts
     */
    public function setPrimary($primary)
    {
        $this->primary = $primary;

        return $this;
    }

    /**
     * Get primary
     *
     * @return string 
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     * @return Contacts
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Contacts
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Contacts
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return Contacts
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
     * Set customer
     *
     * @param \Database\Entity\Customers $customer
     * @return Contacts
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
}
