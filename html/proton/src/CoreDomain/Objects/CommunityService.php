<?php

namespace CoreDomain\Objects;


/**
 * Class CommunityService
 * @package CoreDomain\Objects
 */
class CommunityService extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $descriptionofDuties;
    /**
     * @var
     */
    protected $endDate;
    /**
     * @var
     */
    protected $organization;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $serviceRole;
    /**
     * @var
     */
    protected $serviceType;
    /**
     * @var
     */
    protected $startDate;

    /**
     * @return mixed
     */
    public function getDescriptionofDuties()
    {
        return $this->descriptionofDuties;
    }

    /**
     * @param mixed $descriptionofDuties
     * @return CommunityService
     */
    public function setDescriptionofDuties($descriptionofDuties)
    {
        $this->descriptionofDuties = $descriptionofDuties;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     * @return CommunityService
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param mixed $organization
     * @return CommunityService
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResearchClassification()
    {
        return $this->researchClassification;
    }

    /**
     * @param mixed $researchClassification
     * @return CommunityService
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getServiceRole()
    {
        return $this->serviceRole;
    }

    /**
     * @param mixed $serviceRole
     * @return CommunityService
     */
    public function setServiceRole($serviceRole)
    {
        $this->serviceRole = $serviceRole;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * @param mixed $serviceType
     * @return CommunityService
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     * @return CommunityService
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

}