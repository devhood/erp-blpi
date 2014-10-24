<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="Address", indexes={@ORM\Index(name="fk_Address_provinces1_idx", columns={"province_id"}), @ORM\Index(name="fk_Address_cities1_idx", columns={"city_id"}), @ORM\Index(name="fk_Address_Countries1_idx", columns={"country_id"}), @ORM\Index(name="fk_Address_Customers1_idx", columns={"customer_id"})})
 * @ORM\Entity
 */
class Address
{
    /**
     * @var integer
     *
     * @ORM\Column(name="address_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $addressId;

    /**
     * @var string
     *
     * @ORM\Column(name="address_type", type="string", length=45, nullable=true)
     */
    private $addressType;

    /**
     * @var string
     *
     * @ORM\Column(name="street_landmark", type="string", length=45, nullable=true)
     */
    private $streetLandmark;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=45, nullable=true)
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, nullable=true)
     */
    private $recordStatus = 'Active';

    /**
     * @var \Database\Entity\Countries
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Countries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="country_id")
     * })
     */
    private $country;

    /**
     * @var \Database\Entity\Customers
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="customer_id")
     * })
     */
    private $customer;

    /**
     * @var \Database\Entity\Cities
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Cities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_id", referencedColumnName="city_id")
     * })
     */
    private $city;

    /**
     * @var \Database\Entity\Provinces
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Provinces")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="province_id", referencedColumnName="province_id")
     * })
     */
    private $province;



    /**
     * Get addressId
     *
     * @return integer 
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * Set addressType
     *
     * @param string $addressType
     * @return Address
     */
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;

        return $this;
    }

    /**
     * Get addressType
     *
     * @return string 
     */
    public function getAddressType()
    {
        return $this->addressType;
    }

    /**
     * Set streetLandmark
     *
     * @param string $streetLandmark
     * @return Address
     */
    public function setStreetLandmark($streetLandmark)
    {
        $this->streetLandmark = $streetLandmark;

        return $this;
    }

    /**
     * Get streetLandmark
     *
     * @return string 
     */
    public function getStreetLandmark()
    {
        return $this->streetLandmark;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     * @return Address
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return Address
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
     * Set country
     *
     * @param \Database\Entity\Countries $country
     * @return Address
     */
    public function setCountry(\Database\Entity\Countries $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Database\Entity\Countries 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set customer
     *
     * @param \Database\Entity\Customers $customer
     * @return Address
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
     * Set city
     *
     * @param \Database\Entity\Cities $city
     * @return Address
     */
    public function setCity(\Database\Entity\Cities $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \Database\Entity\Cities 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set province
     *
     * @param \Database\Entity\Provinces $province
     * @return Address
     */
    public function setProvince(\Database\Entity\Provinces $province = null)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return \Database\Entity\Provinces 
     */
    public function getProvince()
    {
        return $this->province;
    }
}
