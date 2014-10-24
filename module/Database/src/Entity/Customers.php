<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customers
 *
 * @ORM\Table(name="Customers", indexes={@ORM\Index(name="fk_Customers_Price_Types1_idx", columns={"price_type_id"}), @ORM\Index(name="fk_Customers_Payment_Terms1_idx", columns={"payment_term_id"}), @ORM\Index(name="fk_Customers_Categories1_idx", columns={"category_id"}), @ORM\Index(name="fk_Customers_Customer_Types1_idx", columns={"customer_type_id"}), @ORM\Index(name="fk_Customers_Users1_idx", columns={"sales_executive"}), @ORM\Index(name="fk_Customers_shipping_modes1_idx", columns={"shipping_mode_id"})})
 * @ORM\Entity
 */
class Customers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="customer_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $customerId;

    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=250, nullable=true)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="branch", type="string", length=250, nullable=true)
     */
    private $branch;

    /**
     * @var string
     *
     * @ORM\Column(name="trade_name", type="string", length=45, nullable=true)
     */
    private $tradeName;

    /**
     * @var string
     *
     * @ORM\Column(name="tin", type="string", length=45, nullable=true)
     */
    private $tin;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=45, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=45, nullable=true)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="sec_no", type="string", length=45, nullable=true)
     */
    private $secNo;

    /**
     * @var string
     *
     * @ORM\Column(name="consignee", type="string", length=45, nullable=true)
     */
    private $consignee;

    /**
     * @var string
     *
     * @ORM\Column(name="franchisee", type="string", length=45, nullable=true)
     */
    private $franchisee;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_limit", type="float", precision=10, scale=0, nullable=true)
     */
    private $creditLimit;

    /**
     * @var float
     *
     * @ORM\Column(name="transaction_limit", type="float", precision=10, scale=0, nullable=true)
     */
    private $transactionLimit;

    /**
     * @var string
     *
     * @ORM\Column(name="percent_commision", type="string", length=45, nullable=true)
     */
    private $percentCommision;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_status", type="string", length=45, nullable=true)
     */
    private $customerStatus;

    /**
     * @var \Database\Entity\Categories
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="category_id")
     * })
     */
    private $category;

    /**
     * @var \Database\Entity\CustomerTypes
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\CustomerTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_type_id", referencedColumnName="customer_type_id")
     * })
     */
    private $customerType;

    /**
     * @var \Database\Entity\PaymentTerms
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\PaymentTerms")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_term_id", referencedColumnName="payment_term_id")
     * })
     */
    private $paymentTerm;

    /**
     * @var \Database\Entity\PriceTypes
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\PriceTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="price_type_id", referencedColumnName="price_type_id")
     * })
     */
    private $priceType;

    /**
     * @var \Database\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sales_executive", referencedColumnName="user_id")
     * })
     */
    private $salesExecutive;

    /**
     * @var \Database\Entity\ShippingModes
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\ShippingModes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shipping_mode_id", referencedColumnName="shipping_mode_id")
     * })
     */
    private $shippingMode;



    /**
     * Get customerId
     *
     * @return integer 
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set companyName
     *
     * @param string $companyName
     * @return Customers
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set branch
     *
     * @param string $branch
     * @return Customers
     */
    public function setBranch($branch)
    {
        $this->branch = $branch;

        return $this;
    }

    /**
     * Get branch
     *
     * @return string 
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * Set tradeName
     *
     * @param string $tradeName
     * @return Customers
     */
    public function setTradeName($tradeName)
    {
        $this->tradeName = $tradeName;

        return $this;
    }

    /**
     * Get tradeName
     *
     * @return string 
     */
    public function getTradeName()
    {
        return $this->tradeName;
    }

    /**
     * Set tin
     *
     * @param string $tin
     * @return Customers
     */
    public function setTin($tin)
    {
        $this->tin = $tin;

        return $this;
    }

    /**
     * Get tin
     *
     * @return string 
     */
    public function getTin()
    {
        return $this->tin;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Customers
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
     * Set email
     *
     * @param string $email
     * @return Customers
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
     * Set website
     *
     * @param string $website
     * @return Customers
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set secNo
     *
     * @param string $secNo
     * @return Customers
     */
    public function setSecNo($secNo)
    {
        $this->secNo = $secNo;

        return $this;
    }

    /**
     * Get secNo
     *
     * @return string 
     */
    public function getSecNo()
    {
        return $this->secNo;
    }

    /**
     * Set consignee
     *
     * @param string $consignee
     * @return Customers
     */
    public function setConsignee($consignee)
    {
        $this->consignee = $consignee;

        return $this;
    }

    /**
     * Get consignee
     *
     * @return string 
     */
    public function getConsignee()
    {
        return $this->consignee;
    }

    /**
     * Set franchisee
     *
     * @param string $franchisee
     * @return Customers
     */
    public function setFranchisee($franchisee)
    {
        $this->franchisee = $franchisee;

        return $this;
    }

    /**
     * Get franchisee
     *
     * @return string 
     */
    public function getFranchisee()
    {
        return $this->franchisee;
    }

    /**
     * Set creditLimit
     *
     * @param float $creditLimit
     * @return Customers
     */
    public function setCreditLimit($creditLimit)
    {
        $this->creditLimit = $creditLimit;

        return $this;
    }

    /**
     * Get creditLimit
     *
     * @return float 
     */
    public function getCreditLimit()
    {
        return $this->creditLimit;
    }

    /**
     * Set transactionLimit
     *
     * @param float $transactionLimit
     * @return Customers
     */
    public function setTransactionLimit($transactionLimit)
    {
        $this->transactionLimit = $transactionLimit;

        return $this;
    }

    /**
     * Get transactionLimit
     *
     * @return float 
     */
    public function getTransactionLimit()
    {
        return $this->transactionLimit;
    }

    /**
     * Set percentCommision
     *
     * @param string $percentCommision
     * @return Customers
     */
    public function setPercentCommision($percentCommision)
    {
        $this->percentCommision = $percentCommision;

        return $this;
    }

    /**
     * Get percentCommision
     *
     * @return string 
     */
    public function getPercentCommision()
    {
        return $this->percentCommision;
    }

    /**
     * Set customerStatus
     *
     * @param string $customerStatus
     * @return Customers
     */
    public function setCustomerStatus($customerStatus)
    {
        $this->customerStatus = $customerStatus;

        return $this;
    }

    /**
     * Get customerStatus
     *
     * @return string 
     */
    public function getCustomerStatus()
    {
        return $this->customerStatus;
    }

    /**
     * Set category
     *
     * @param \Database\Entity\Categories $category
     * @return Customers
     */
    public function setCategory(\Database\Entity\Categories $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Database\Entity\Categories 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set customerType
     *
     * @param \Database\Entity\CustomerTypes $customerType
     * @return Customers
     */
    public function setCustomerType(\Database\Entity\CustomerTypes $customerType = null)
    {
        $this->customerType = $customerType;

        return $this;
    }

    /**
     * Get customerType
     *
     * @return \Database\Entity\CustomerTypes 
     */
    public function getCustomerType()
    {
        return $this->customerType;
    }

    /**
     * Set paymentTerm
     *
     * @param \Database\Entity\PaymentTerms $paymentTerm
     * @return Customers
     */
    public function setPaymentTerm(\Database\Entity\PaymentTerms $paymentTerm = null)
    {
        $this->paymentTerm = $paymentTerm;

        return $this;
    }

    /**
     * Get paymentTerm
     *
     * @return \Database\Entity\PaymentTerms 
     */
    public function getPaymentTerm()
    {
        return $this->paymentTerm;
    }

    /**
     * Set priceType
     *
     * @param \Database\Entity\PriceTypes $priceType
     * @return Customers
     */
    public function setPriceType(\Database\Entity\PriceTypes $priceType = null)
    {
        $this->priceType = $priceType;

        return $this;
    }

    /**
     * Get priceType
     *
     * @return \Database\Entity\PriceTypes 
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Set salesExecutive
     *
     * @param \Database\Entity\Users $salesExecutive
     * @return Customers
     */
    public function setSalesExecutive(\Database\Entity\Users $salesExecutive = null)
    {
        $this->salesExecutive = $salesExecutive;

        return $this;
    }

    /**
     * Get salesExecutive
     *
     * @return \Database\Entity\Users 
     */
    public function getSalesExecutive()
    {
        return $this->salesExecutive;
    }

    /**
     * Set shippingMode
     *
     * @param \Database\Entity\ShippingModes $shippingMode
     * @return Customers
     */
    public function setShippingMode(\Database\Entity\ShippingModes $shippingMode = null)
    {
        $this->shippingMode = $shippingMode;

        return $this;
    }

    /**
     * Get shippingMode
     *
     * @return \Database\Entity\ShippingModes 
     */
    public function getShippingMode()
    {
        return $this->shippingMode;
    }
}
