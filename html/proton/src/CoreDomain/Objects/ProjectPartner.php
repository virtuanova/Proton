<?php

namespace CoreDomain\Objects;


/**
 * Class ProjectPartner
 * @package CoreDomain\Objects
 */
class ProjectPartner extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $organizationName;
    /**
     * @var
     */
    protected $partnerCollaborationLevel;
    /**
     * @var
     */
    protected $partnerContactAddress;
    /**
     * @var
     */
    protected $partnerContactEmail;
    /**
     * @var
     */
    protected $partnerContactName;
    /**
     * @var
     */
    protected $partnerContactTelephone;
    /**
     * @var
     */
    protected $partnerInclusionRationale;
    /**
     * @var
     */
    protected $partnerType;
    /**
     * @var
     */
    protected $partnerUtilization;

    /**
     * @return mixed
     */
    public function getOrganizationName()
    {
        return $this->organizationName;
    }

    /**
     * @param mixed $organizationName
     */
    public function setOrganizationName($organizationName)
    {
        $this->organizationName = $organizationName;
    }

    /**
     * @return mixed
     */
    public function getPartnerCollaborationLevel()
    {
        return $this->partnerCollaborationLevel;
    }

    /**
     * @param mixed $partnerCollaborationLevel
     */
    public function setPartnerCollaborationLevel($partnerCollaborationLevel)
    {
        $this->partnerCollaborationLevel = $partnerCollaborationLevel;
    }

    /**
     * @return mixed
     */
    public function getPartnerContactAddress()
    {
        return $this->partnerContactAddress;
    }

    /**
     * @param mixed $partnerContactAddress
     */
    public function setPartnerContactAddress($partnerContactAddress)
    {
        $this->partnerContactAddress = $partnerContactAddress;
    }

    /**
     * @return mixed
     */
    public function getPartnerContactEmail()
    {
        return $this->partnerContactEmail;
    }

    /**
     * @param mixed $partnerContactEmail
     */
    public function setPartnerContactEmail($partnerContactEmail)
    {
        $this->partnerContactEmail = $partnerContactEmail;
    }

    /**
     * @return mixed
     */
    public function getPartnerContactName()
    {
        return $this->partnerContactName;
    }

    /**
     * @param mixed $partnerContactName
     */
    public function setPartnerContactName($partnerContactName)
    {
        $this->partnerContactName = $partnerContactName;
    }

    /**
     * @return mixed
     */
    public function getPartnerContactTelephone()
    {
        return $this->partnerContactTelephone;
    }

    /**
     * @param mixed $partnerContactTelephone
     */
    public function setPartnerContactTelephone($partnerContactTelephone)
    {
        $this->partnerContactTelephone = $partnerContactTelephone;
    }

    /**
     * @return mixed
     */
    public function getPartnerInclusionRationale()
    {
        return $this->partnerInclusionRationale;
    }

    /**
     * @param mixed $partnerInclusionRationale
     */
    public function setPartnerInclusionRationale($partnerInclusionRationale)
    {
        $this->partnerInclusionRationale = $partnerInclusionRationale;
    }

    /**
     * @return mixed
     */
    public function getPartnerType()
    {
        return $this->partnerType;
    }

    /**
     * @param mixed $partnerType
     */
    public function setPartnerType($partnerType)
    {
        $this->partnerType = $partnerType;
    }

    /**
     * @return mixed
     */
    public function getPartnerUtilization()
    {
        return $this->partnerUtilization;
    }

    /**
     * @param mixed $partnerUtilization
     */
    public function setPartnerUtilization($partnerUtilization)
    {
        $this->partnerUtilization = $partnerUtilization;
    }

}