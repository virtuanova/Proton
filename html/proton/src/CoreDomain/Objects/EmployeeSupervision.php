<?php

namespace CoreDomain\Objects;


/**
 * Class EmployeeSupervision
 * @package CoreDomain\Objects
 */
class EmployeeSupervision extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $cosupervisors;
    /**
     * @var
     */
    protected $consentObtainedforNameRelease;
    /**
     * @var
     */
    protected $degreeSubject;
    /**
     * @var
     */
    protected $employeeFirstName;
    /**
     * @var
     */
    protected $employeeLastName;
    /**
     * @var
     */
    protected $employeeType;
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
    protected $researchClassification;
    /**
     * @var
     */
    protected $startDate;
    /**
     * @var
     */
    protected $supervisoryRole;

    /**
     * @return mixed
     */
    public function getCosupervisors()
    {
        return $this->cosupervisors;
    }

    /**
     * @param mixed $cosupervisors
     *
     * @return EmployeeSupervision
     */
    public function setCosupervisors($cosupervisors)
    {
        $this->cosupervisors = $cosupervisors;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConsentObtainedforNameRelease()
    {
        return $this->consentObtainedforNameRelease;
    }

    /**
     * @param mixed $consentObtainedforNameRelease
     *
     * @return EmployeeSupervision
     */
    public function setConsentObtainedforNameRelease($consentObtainedforNameRelease)
    {
        $this->consentObtainedforNameRelease = $consentObtainedforNameRelease;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDegreeSubject()
    {
        return $this->degreeSubject;
    }

    /**
     * @param mixed $degreeSubject
     *
     * @return EmployeeSupervision
     */
    public function setDegreeSubject($degreeSubject)
    {
        $this->degreeSubject = $degreeSubject;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmployeeFirstName()
    {
        return $this->employeeFirstName;
    }

    /**
     * @param mixed $employeeFirstName
     *
     * @return EmployeeSupervision
     */
    public function setEmployeeFirstName($employeeFirstName)
    {
        $this->employeeFirstName = $employeeFirstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmployeeLastName()
    {
        return $this->employeeLastName;
    }

    /**
     * @param mixed $employeeLastName
     *
     * @return EmployeeSupervision
     */
    public function setEmployeeLastName($employeeLastName)
    {
        $this->employeeLastName = $employeeLastName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmployeeType()
    {
        return $this->employeeType;
    }

    /**
     * @param mixed $employeeType
     *
     * @return EmployeeSupervision
     */
    public function setEmployeeType($employeeType)
    {
        $this->employeeType = $employeeType;
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
     * @return EmployeeSupervision
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
     * @return EmployeeSupervision
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;
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
     * @return EmployeeSupervision
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
     * @return EmployeeSupervision
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupervisoryRole()
    {
        return $this->supervisoryRole;
    }

    /**
     * @param mixed $supervisoryRole
     *
     * @return EmployeeSupervision
     */
    public function setSupervisoryRole($supervisoryRole)
    {
        $this->supervisoryRole = $supervisoryRole;
        return $this;
    }

}