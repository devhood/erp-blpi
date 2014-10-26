<?php

namespace Database\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DesignationPermissions
 *
 * @ORM\Table(name="Designation_Permissions", indexes={@ORM\Index(name="fk_Designation_Permissions_Permissions1_idx", columns={"permission_id"}), @ORM\Index(name="fk_Designation_Permissions_Designations1_idx", columns={"designation_id"})})
 * @ORM\Entity
 */
class DesignationPermissions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dp_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dpId;

    /**
     * @var \Database\Entity\Permissions
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Permissions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="permission_id", referencedColumnName="permission_id", nullable=true)
     * })
     */
    private $permission;

    /**
     * @var \Database\Entity\Designations
     *
     * @ORM\ManyToOne(targetEntity="Database\Entity\Designations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="designation_id", referencedColumnName="designation_id", nullable=true)
     * })
     */
    private $designation;


    /**
     * Get dpId
     *
     * @return integer 
     */
    public function getDpId()
    {
        return $this->dpId;
    }

    /**
     * Set permission
     *
     * @param \Database\Entity\Permissions $permission
     * @return DesignationPermissions
     */
    public function setPermission(\Database\Entity\Permissions $permission = null)
    {
        $this->permission = $permission;

        return $this;
    }

    /**
     * Get permission
     *
     * @return \Database\Entity\Permissions 
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Set designation
     *
     * @param \Database\Entity\Designations $designation
     * @return DesignationPermissions
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
