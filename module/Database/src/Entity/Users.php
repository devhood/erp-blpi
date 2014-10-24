<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="Users", indexes={@ORM\Index(name="fk_Users_Designations1_idx", columns={"designation_id"})})
 * @ORM\Entity
 */
class Users
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=45, nullable=true)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=45, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="full_name", type="string", length=45, nullable=true)
     */
    private $fullName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=45, nullable=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="user_status", type="string", length=45, nullable=true)
     */
    private $userStatus;

    /**
     * @var \Database\Entity\Designations
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Designations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="designation_id", referencedColumnName="designation_id")
     * })
     */
    private $designation;



    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return Users
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     * @return Users
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
     * @return Users
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
     * Set mobile
     *
     * @param string $mobile
     * @return Users
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set userStatus
     *
     * @param string $userStatus
     * @return Users
     */
    public function setUserStatus($userStatus)
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    /**
     * Get userStatus
     *
     * @return string 
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * Set designation
     *
     * @param \Database\Entity\Designations $designation
     * @return Users
     */
    public function setDesignation(\Database\Entity\Designations $designation = null)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return \Database\Entity\Designations 
     */
    public function getDesignation()
    {
        return $this->designation;
    }
}
