<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permissions
 *
 * @ORM\Table(name="Permissions")
 * @ORM\Entity
 */
class Permissions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="permission_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $permissionId;

    /**
     * @var string
     *
     * @ORM\Column(name="permission_name", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $permissionName;

    /**
     * @var string
     *
     * @ORM\Column(name="permission_link", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $permissionLink;

    /**
     * @var string
     *
     * @ORM\Column(name="record_status", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $recordStatus;


    /**
     * Get permissionId
     *
     * @return integer 
     */
    public function getPermissionId()
    {
        return $this->permissionId;
    }

    /**
     * Set permissionName
     *
     * @param string $permissionName
     * @return Permissions
     */
    public function setPermissionName($permissionName)
    {
        $this->permissionName = $permissionName;

        return $this;
    }

    /**
     * Get permissionName
     *
     * @return string 
     */
    public function getPermissionName()
    {
        return $this->permissionName;
    }

    /**
     * Set permissionLink
     *
     * @param string $permissionLink
     * @return Permissions
     */
    public function setPermissionLink($permissionLink)
    {
        $this->permissionLink = $permissionLink;

        return $this;
    }

    /**
     * Get permissionLink
     *
     * @return string 
     */
    public function getPermissionLink()
    {
        return $this->permissionLink;
    }

    /**
     * Set recordStatus
     *
     * @param string $recordStatus
     * @return Permissions
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
