<?php

namespace CoreDomain\Objects;


/**
 * Class HEInstitutionEmployment
 * @package CoreDomain\Objects
 */
class HEInstitutionEmployment extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $campus;
    /**
     * @var
     */
    protected $country;
    /**
     * @var
     */
    protected $departmentUnitDivision;
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
    protected $institutionType;
    /**
     * @var
     */
    protected $monthYearTenureAchieved;
    /**
     * @var
     */
    protected $positionTitle;
    /**
     * @var
     */
    protected $positionType;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $startDate;
    /**
     * @var
     */
    protected $tenuredPosition;

    /**
     * @return mixed
     */
    public function getCampus()
    {
        return $this->campus;
    }

    /**
     * @param mixed $campus
     *
     * @return HEInstitutionEmployment
     */
    public function setCampus($campus)
    {
        $this->campus = $campus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     *
     * @return HEInstitutionEmployment
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDepartmentUnitDivision()
    {
        return $this->departmentUnitDivision;
    }

    /**
     * @param mixed $departmentUnitDivision
     *
     * @return HEInstitutionEmployment
     */
    public function setDepartmentUnitDivision($departmentUnitDivision)
    {
        $this->departmentUnitDivision = $departmentUnitDivision;
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
     *
     * @return HEInstitutionEmployment
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
     * @return HEInstitutionEmployment
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstitutionType()
    {
        return $this->institutionType;
    }

    /**
     * @param mixed $institutionType
     *
     * @return HEInstitutionEmployment
     */
    public function setInstitutionType($institutionType)
    {
        $this->institutionType = $institutionType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMonthYearTenureAchieved()
    {
        return $this->monthYearTenureAchieved;
    }

    /**
     * @param mixed $monthYearTenureAchieved
     *
     * @return HEInstitutionEmployment
     */
    public function setMonthYearTenureAchieved($monthYearTenureAchieved)
    {
        $this->monthYearTenureAchieved = $monthYearTenureAchieved;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPositionTitle()
    {
        return $this->positionTitle;
    }

    /**
     * @param mixed $positionTitle
     *
     * @return HEInstitutionEmployment
     */
    public function setPositionTitle($positionTitle)
    {
        $this->positionTitle = $positionTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPositionType()
    {
        return $this->positionType;
    }

    /**
     * @param mixed $positionType
     *
     * @return HEInstitutionEmployment
     */
    public function setPositionType($positionType)
    {
        $this->positionType = $positionType;
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
     *
     * @return HEInstitutionEmployment
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
     *
     * @return HEInstitutionEmployment
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTenuredPosition()
    {
        return $this->tenuredPosition;
    }

    /**
     * @param mixed $tenuredPosition
     *
     * @return HEInstitutionEmployment
     */
    public function setTenuredPosition($tenuredPosition)
    {
        $this->tenuredPosition = $tenuredPosition;
        return $this;
    }

}