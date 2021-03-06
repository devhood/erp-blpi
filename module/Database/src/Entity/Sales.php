<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sales
 *
 * @ORM\Table(name="Sales", uniqueConstraints={@ORM\UniqueConstraint(name="sono_UNIQUE", columns={"sono"}), @ORM\UniqueConstraint(name="drno_UNIQUE", columns={"drno"}), @ORM\UniqueConstraint(name="sino_UNIQUE", columns={"sino"}), @ORM\UniqueConstraint(name="rmrno_UNIQUE", columns={"rmrno"}), @ORM\UniqueConstraint(name="cmno_UNIQUE", columns={"cmno"}), @ORM\UniqueConstraint(name="pmno_UNIQUE", columns={"pmno"})}, indexes={@ORM\Index(name="fk_Sales_Transaction_Status1_idx", columns={"transaction_status_id"}), @ORM\Index(name="fk_Sales_Inventory_Locations1_idx", columns={"location_id"}), @ORM\Index(name="fk_Sales_Address1_idx", columns={"shipping_address_id"}), @ORM\Index(name="fk_Sales_Address2_idx", columns={"billing_address_id"}), @ORM\Index(name="fk_Sales_Customers1_idx", columns={"customer_id"}), @ORM\Index(name="fk_Sales_Transaction_Types1_idx", columns={"transaction_type_id"}), @ORM\Index(name="fk_Sales_Order_Source1_idx", columns={"order_source_id"}), @ORM\Index(name="fk_Sales_Payment_Terms1_idx", columns={"payment_term_id"}), @ORM\Index(name="fk_Sales_Price_Types1_idx", columns={"price_type_id"}), @ORM\Index(name="fk_Sales_Shipping_Modes1_idx", columns={"shipping_mode_id"}), @ORM\Index(name="fk_Sales_Users1_idx", columns={"sales_executive_id"})})
 * @ORM\Entity
 */
class Sales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sales_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $salesId;

    /**
     * @var string
     *
     * @ORM\Column(name="sono", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $sono;

    /**
     * @var string
     *
     * @ORM\Column(name="drno", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $drno;

    /**
     * @var string
     *
     * @ORM\Column(name="sino", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $sino;

    /**
     * @var string
     *
     * @ORM\Column(name="rmrno", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $rmrno;

    /**
     * @var string
     *
     * @ORM\Column(name="cmno", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $cmno;

    /**
     * @var string
     *
     * @ORM\Column(name="pmno", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $pmno;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="delivery_date", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $deliveryDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ordered_by", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $orderedBy;

    /**
     * @var integer
     *
     * @ORM\Column(name="promo_id", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $promoId;

    /**
     * @var float
     *
     * @ORM\Column(name="percent_vat", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $percentVat;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_items", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $totalItems;

    /**
     * @var float
     *
     * @ORM\Column(name="total_vat", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $totalVat;

    /**
     * @var float
     *
     * @ORM\Column(name="total_sales", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $totalSales;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_items_return", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $totalItemsReturn;

    /**
     * @var float
     *
     * @ORM\Column(name="total_vat_return", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $totalVatReturn;

    /**
     * @var float
     *
     * @ORM\Column(name="total_sales_return", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $totalSalesReturn;

    /**
     * @var float
     *
     * @ORM\Column(name="grand_total", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $grandTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="orno", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $orno;

    /**
     * @var string
     *
     * @ORM\Column(name="prno", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $prno;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_status", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $paymentStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="sales_notes", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $salesNotes;

    /**
     * @var \Database\Entity\TransactionStatus
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\TransactionStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="transaction_status_id", referencedColumnName="transaction_status_id", nullable=true)
     * })
     */
    private $transactionStatus;

    /**
     * @var \Database\Entity\InventoryLocations
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\InventoryLocations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_id", referencedColumnName="location_id", nullable=true)
     * })
     */
    private $location;

    /**
     * @var \Database\Entity\Address
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shipping_address_id", referencedColumnName="address_id", nullable=true)
     * })
     */
    private $shippingAddress;

    /**
     * @var \Database\Entity\Address
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="billing_address_id", referencedColumnName="address_id", nullable=true)
     * })
     */
    private $billingAddress;

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
     * @var \Database\Entity\TransactionTypes
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\TransactionTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="transaction_type_id", referencedColumnName="transaction_type_id", nullable=true)
     * })
     */
    private $transactionType;

    /**
     * @var \Database\Entity\OrderSource
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\OrderSource")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_source_id", referencedColumnName="order_source_id", nullable=true)
     * })
     */
    private $orderSource;

    /**
     * @var \Database\Entity\PaymentTerms
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\PaymentTerms")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_term_id", referencedColumnName="payment_term_id", nullable=true)
     * })
     */
    private $paymentTerm;

    /**
     * @var \Database\Entity\PriceTypes
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\PriceTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="price_type_id", referencedColumnName="price_type_id", nullable=true)
     * })
     */
    private $priceType;

    /**
     * @var \Database\Entity\ShippingModes
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\ShippingModes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shipping_mode_id", referencedColumnName="shipping_mode_id", nullable=true)
     * })
     */
    private $shippingMode;

    /**
     * @var \Database\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sales_executive_id", referencedColumnName="user_id", nullable=true)
     * })
     */
    private $salesExecutive;


    /**
     * Get salesId
     *
     * @return integer 
     */
    public function getSalesId()
    {
        return $this->salesId;
    }

    /**
     * Set sono
     *
     * @param string $sono
     * @return Sales
     */
    public function setSono($sono)
    {
        $this->sono = $sono;

        return $this;
    }

    /**
     * Get sono
     *
     * @return string 
     */
    public function getSono()
    {
        return $this->sono;
    }

    /**
     * Set drno
     *
     * @param string $drno
     * @return Sales
     */
    public function setDrno($drno)
    {
        $this->drno = $drno;

        return $this;
    }

    /**
     * Get drno
     *
     * @return string 
     */
    public function getDrno()
    {
        return $this->drno;
    }

    /**
     * Set sino
     *
     * @param string $sino
     * @return Sales
     */
    public function setSino($sino)
    {
        $this->sino = $sino;

        return $this;
    }

    /**
     * Get sino
     *
     * @return string 
     */
    public function getSino()
    {
        return $this->sino;
    }

    /**
     * Set rmrno
     *
     * @param string $rmrno
     * @return Sales
     */
    public function setRmrno($rmrno)
    {
        $this->rmrno = $rmrno;

        return $this;
    }

    /**
     * Get rmrno
     *
     * @return string 
     */
    public function getRmrno()
    {
        return $this->rmrno;
    }

    /**
     * Set cmno
     *
     * @param string $cmno
     * @return Sales
     */
    public function setCmno($cmno)
    {
        $this->cmno = $cmno;

        return $this;
    }

    /**
     * Get cmno
     *
     * @return string 
     */
    public function getCmno()
    {
        return $this->cmno;
    }

    /**
     * Set pmno
     *
     * @param string $pmno
     * @return Sales
     */
    public function setPmno($pmno)
    {
        $this->pmno = $pmno;

        return $this;
    }

    /**
     * Get pmno
     *
     * @return string 
     */
    public function getPmno()
    {
        return $this->pmno;
    }

    /**
     * Set deliveryDate
     *
     * @param \DateTime $deliveryDate
     * @return Sales
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * Get deliveryDate
     *
     * @return \DateTime 
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Set orderedBy
     *
     * @param string $orderedBy
     * @return Sales
     */
    public function setOrderedBy($orderedBy)
    {
        $this->orderedBy = $orderedBy;

        return $this;
    }

    /**
     * Get orderedBy
     *
     * @return string 
     */
    public function getOrderedBy()
    {
        return $this->orderedBy;
    }

    /**
     * Set promoId
     *
     * @param integer $promoId
     * @return Sales
     */
    public function setPromoId($promoId)
    {
        $this->promoId = $promoId;

        return $this;
    }

    /**
     * Get promoId
     *
     * @return integer 
     */
    public function getPromoId()
    {
        return $this->promoId;
    }

    /**
     * Set percentVat
     *
     * @param float $percentVat
     * @return Sales
     */
    public function setPercentVat($percentVat)
    {
        $this->percentVat = $percentVat;

        return $this;
    }

    /**
     * Get percentVat
     *
     * @return float 
     */
    public function getPercentVat()
    {
        return $this->percentVat;
    }

    /**
     * Set totalItems
     *
     * @param integer $totalItems
     * @return Sales
     */
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;

        return $this;
    }

    /**
     * Get totalItems
     *
     * @return integer 
     */
    public function getTotalItems()
    {
        return $this->totalItems;
    }

    /**
     * Set totalVat
     *
     * @param float $totalVat
     * @return Sales
     */
    public function setTotalVat($totalVat)
    {
        $this->totalVat = $totalVat;

        return $this;
    }

    /**
     * Get totalVat
     *
     * @return float 
     */
    public function getTotalVat()
    {
        return $this->totalVat;
    }

    /**
     * Set totalSales
     *
     * @param float $totalSales
     * @return Sales
     */
    public function setTotalSales($totalSales)
    {
        $this->totalSales = $totalSales;

        return $this;
    }

    /**
     * Get totalSales
     *
     * @return float 
     */
    public function getTotalSales()
    {
        return $this->totalSales;
    }

    /**
     * Set totalItemsReturn
     *
     * @param integer $totalItemsReturn
     * @return Sales
     */
    public function setTotalItemsReturn($totalItemsReturn)
    {
        $this->totalItemsReturn = $totalItemsReturn;

        return $this;
    }

    /**
     * Get totalItemsReturn
     *
     * @return integer 
     */
    public function getTotalItemsReturn()
    {
        return $this->totalItemsReturn;
    }

    /**
     * Set totalVatReturn
     *
     * @param float $totalVatReturn
     * @return Sales
     */
    public function setTotalVatReturn($totalVatReturn)
    {
        $this->totalVatReturn = $totalVatReturn;

        return $this;
    }

    /**
     * Get totalVatReturn
     *
     * @return float 
     */
    public function getTotalVatReturn()
    {
        return $this->totalVatReturn;
    }

    /**
     * Set totalSalesReturn
     *
     * @param float $totalSalesReturn
     * @return Sales
     */
    public function setTotalSalesReturn($totalSalesReturn)
    {
        $this->totalSalesReturn = $totalSalesReturn;

        return $this;
    }

    /**
     * Get totalSalesReturn
     *
     * @return float 
     */
    public function getTotalSalesReturn()
    {
        return $this->totalSalesReturn;
    }

    /**
     * Set grandTotal
     *
     * @param float $grandTotal
     * @return Sales
     */
    public function setGrandTotal($grandTotal)
    {
        $this->grandTotal = $grandTotal;

        return $this;
    }

    /**
     * Get grandTotal
     *
     * @return float 
     */
    public function getGrandTotal()
    {
        return $this->grandTotal;
    }

    /**
     * Set orno
     *
     * @param string $orno
     * @return Sales
     */
    public function setOrno($orno)
    {
        $this->orno = $orno;

        return $this;
    }

    /**
     * Get orno
     *
     * @return string 
     */
    public function getOrno()
    {
        return $this->orno;
    }

    /**
     * Set prno
     *
     * @param string $prno
     * @return Sales
     */
    public function setPrno($prno)
    {
        $this->prno = $prno;

        return $this;
    }

    /**
     * Get prno
     *
     * @return string 
     */
    public function getPrno()
    {
        return $this->prno;
    }

    /**
     * Set paymentStatus
     *
     * @param string $paymentStatus
     * @return Sales
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * Get paymentStatus
     *
     * @return string 
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * Set salesNotes
     *
     * @param string $salesNotes
     * @return Sales
     */
    public function setSalesNotes($salesNotes)
    {
        $this->salesNotes = $salesNotes;

        return $this;
    }

    /**
     * Get salesNotes
     *
     * @return string 
     */
    public function getSalesNotes()
    {
        return $this->salesNotes;
    }

    /**
     * Set transactionStatus
     *
     * @param \Database\Entity\TransactionStatus $transactionStatus
     * @return Sales
     */
    public function setTransactionStatus(\Database\Entity\TransactionStatus $transactionStatus = null)
    {
        $this->transactionStatus = $transactionStatus;

        return $this;
    }

    /**
     * Get transactionStatus
     *
     * @return \Database\Entity\TransactionStatus 
     */
    public function getTransactionStatus()
    {
        return $this->transactionStatus;
    }

    /**
     * Set location
     *
     * @param \Database\Entity\InventoryLocations $location
     * @return Sales
     */
    public function setLocation(\Database\Entity\InventoryLocations $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \Database\Entity\InventoryLocations 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set shippingAddress
     *
     * @param \Database\Entity\Address $shippingAddress
     * @return Sales
     */
    public function setShippingAddress(\Database\Entity\Address $shippingAddress = null)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * Get shippingAddress
     *
     * @return \Database\Entity\Address 
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * Set billingAddress
     *
     * @param \Database\Entity\Address $billingAddress
     * @return Sales
     */
    public function setBillingAddress(\Database\Entity\Address $billingAddress = null)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * Get billingAddress
     *
     * @return \Database\Entity\Address 
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * Set customer
     *
     * @param \Database\Entity\Customers $customer
     * @return Sales
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
     * Set transactionType
     *
     * @param \Database\Entity\TransactionTypes $transactionType
     * @return Sales
     */
    public function setTransactionType(\Database\Entity\TransactionTypes $transactionType = null)
    {
        $this->transactionType = $transactionType;

        return $this;
    }

    /**
     * Get transactionType
     *
     * @return \Database\Entity\TransactionTypes 
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * Set orderSource
     *
     * @param \Database\Entity\OrderSource $orderSource
     * @return Sales
     */
    public function setOrderSource(\Database\Entity\OrderSource $orderSource = null)
    {
        $this->orderSource = $orderSource;

        return $this;
    }

    /**
     * Get orderSource
     *
     * @return \Database\Entity\OrderSource 
     */
    public function getOrderSource()
    {
        return $this->orderSource;
    }

    /**
     * Set paymentTerm
     *
     * @param \Database\Entity\PaymentTerms $paymentTerm
     * @return Sales
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
     * @return Sales
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
     * Set shippingMode
     *
     * @param \Database\Entity\ShippingModes $shippingMode
     * @return Sales
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

    /**
     * Set salesExecutive
     *
     * @param \Database\Entity\Users $salesExecutive
     * @return Sales
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
}
