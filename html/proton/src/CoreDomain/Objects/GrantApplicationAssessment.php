<?php

namespace CoreDomain\Objects;


/**
 * Class GrantApplicationAssessment
 * @package CoreDomain\Objects
 */
class GrantApplicationAssessment extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $assessmentType;
    /**
     * @var
     */
    protected $departmentDivision;
    /**
     * @var
     */
    protected $descriptionofGrantScholarship;
    /**
     * @var
     */
    protected $endDate;
    /**
     * @var
     */
    protected $fundingOrganization;
    /**
     * @var
     */
    protected $institution;
    /**
     * @var
     */
    protected $numberofApplicationsAssessed;
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
    public function getAssessmentType()
    {
        return $this->assessmentType;
    }

    /**
     * @param mixed $assessmentType
     *
     * @return GrantApplicationAssessment
     */
    public function setAssessmentType($assessmentType)
    {
        $this->assessmentType = $assessmentType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDepartmentDivision()
    {
        return $this->departmentDivision;
    }

    /**
     * @param mixed $departmentDivision
     *
     * @return GrantApplicationAssessment
     */
    public function setDepartmentDivision($departmentDivision)
    {
        $this->departmentDivision = $departmentDivision;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescriptionofGrantScholarship()
    {
        return $this->descriptionofGrantScholarship;
    }

    /**
     * @param mixed $descriptionofGrantScholarship
     *
     * @return GrantApplicationAssessment
     */
    public function setDescriptionofGrantScholarship($descriptionofGrantScholarship)
    {
        $this->descriptionofGrantScholarship = $descriptionofGrantScholarship;
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
     * @return GrantApplicationAssessment
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFundingOrganization()
    {
        return $this->fundingOrganization;
    }

    /**
     * @param mixed $fundingOrganization
     *
     * @return GrantApplicationAssessment
     */
    public function setFundingOrganization($fundingOrganization)
    {
        $this->fundingOrganization = $fundingOrganization;
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
     * @return GrantApplicationAssessment
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberofApplicationsAssessed()
    {
        return $this->numberofApplicationsAssessed;
    }

    /**
     * @param mixed $numberofApplicationsAssessed
     *
     * @return GrantApplicationAssessment
     */
    public function setNumberofApplicationsAssessed($numberofApplicationsAssessed)
    {
        $this->numberofApplicationsAssessed = $numberofApplicationsAssessed;
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
     * @return GrantApplicationAssessment
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
     * @return GrantApplicationAssessment
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

}