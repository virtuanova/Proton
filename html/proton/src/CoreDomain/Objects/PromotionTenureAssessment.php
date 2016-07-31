<?php

namespace CoreDomain\Objects;


/**
 * Class PromotionTenureAssessment
 * @package CoreDomain\Objects
 */
class PromotionTenureAssessment extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $departmentDivision;
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
    protected $numberofAssessments;
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
    public function getDepartmentDivision()
    {
        return $this->departmentDivision;
    }

    /**
     * @param mixed $departmentDivision
     *
     * @return PromotionTenureAssessment
     */
    public function setDepartmentDivision($departmentDivision)
    {
        $this->departmentDivision = $departmentDivision;
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
     * @return PromotionTenureAssessment
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
     * @return PromotionTenureAssessment
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberofAssessments()
    {
        return $this->numberofAssessments;
    }

    /**
     * @param mixed $numberofAssessments
     *
     * @return PromotionTenureAssessment
     */
    public function setNumberofAssessments($numberofAssessments)
    {
        $this->numberofAssessments = $numberofAssessments;
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
     * @return PromotionTenureAssessment
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
     * @return PromotionTenureAssessment
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

}