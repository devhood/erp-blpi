<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerTypes
 *
 * @ORM\Table(name="Customer_Types")
 * @ORM\Entity
 */
class CustomerTypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="customer_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $customerTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_type_name", type="string", length=45, nullable=false)
     */
    private $customerTypeName;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, nullable=true)
     */
    private $recordStatus = 'Active';



    /**
     * Get customerTypeId
     *
     * @return integer 
     */
    public function getCustomerTypeId()
    {
        return $this->customerTypeId;
    }

    /**
     * Set customerTypeName
     *
     * @param string $customerTypeName
     * @return CustomerTypes
     */
    public function setCustomerTypeName($customerTypeName)
    {
        $this->customerTypeName = $customerTypeName;

        return $this;
    }

    /**
     * Get customerTypeName
     *
     * @return string 
     */
    public function getCustomerTypeName()
    {
        return $this->customerTypeName;
    }

    /**
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return CustomerTypes
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
