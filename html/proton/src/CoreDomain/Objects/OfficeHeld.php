<?php

namespace CoreDomain\Objects;


/**
 * Class OfficeHeld
 * @package CoreDomain\Objects
 */
class OfficeHeld extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $endDate;
    /**
     * @var
     */
    protected $institution;
    /**
     * @var
     */
    protected $officeHeldType;
    /**
     * @var
     */
    protected $officeName;
    /**
     * @var
     */
    protected $otherOrganization;
    /**
     * @var
     */
    protected $startDate;

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     *
     * @return OfficeHeld
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * @param mixed $institution
     *
     * @return OfficeHeld
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOfficeHeldType()
    {
        return $this->officeHeldType;
    }

    /**
     * @param mixed $officeHeldType
     *
     * @return OfficeHeld
     */
    public function setOfficeHeldType($officeHeldType)
    {
        $this->officeHeldType = $officeHeldType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOfficeName()
    {
        return $this->officeName;
    }

    /**
     * @param mixed $officeName
     *
     * @return OfficeHeld
     */
    public function setOfficeName($officeName)
    {
        $this->officeName = $officeName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOtherOrganization()
    {
        return $this->otherOrganization;
    }

    /**
     * @param mixed $otherOrganization
     *
     * @return OfficeHeld
     */
    public function setOtherOrganization($otherOrganization)
    {
        $this->otherOrganization = $otherOrganization;
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
     *
     * @return OfficeHeld
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

}