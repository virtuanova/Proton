<?php

namespace CoreDomain\Objects;


/**
 * Class ConsultingAdvisory
 * @package CoreDomain\Objects
 */
class ConsultingAdvisory extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $activityDescription;
    /**
     * @var
     */
    protected $departmentUnit;
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
    protected $organizationType;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $startDate;

    /**
     * @return mixed
     */
    public function getActivityDescription()
    {
        return $this->activityDescription;
    }

    /**
     * @param mixed $activityDescription
     * @return ConsultingAdvisory
     */
    public function setActivityDescription($activityDescription)
    {
        $this->activityDescription = $activityDescription;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDepartmentUnit()
    {
        return $this->departmentUnit;
    }

    /**
     * @param mixed $departmentUnit
     * @return ConsultingAdvisory
     */
    public function setDepartmentUnit($departmentUnit)
    {
        $this->departmentUnit = $departmentUnit;
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
     * @return ConsultingAdvisory
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
     * @return ConsultingAdvisory
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrganizationType()
    {
        return $this->organizationType;
    }

    /**
     * @param mixed $organizationType
     * @return ConsultingAdvisory
     */
    public function setOrganizationType($organizationType)
    {
        $this->organizationType = $organizationType;
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
     * @return ConsultingAdvisory
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
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
     * @return ConsultingAdvisory
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

}