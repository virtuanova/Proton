<?php

namespace CoreDomain\Objects;


/**
 * Class InstitutionalReview
 * @package CoreDomain\Objects
 */
class InstitutionalReview extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $departmentDivision;
    /**
     * @var
     */
    protected $descriptionofReviewingActivity;
    /**
     * @var
     */
    protected $endDate;
    /**
     * @var
     */
    protected $institutionReveiwed;
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
     * @return InstitutionalReview
     */
    public function setDepartmentDivision($departmentDivision)
    {
        $this->departmentDivision = $departmentDivision;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescriptionofReviewingActivity()
    {
        return $this->descriptionofReviewingActivity;
    }

    /**
     * @param mixed $descriptionofReviewingActivity
     *
     * @return InstitutionalReview
     */
    public function setDescriptionofReviewingActivity($descriptionofReviewingActivity)
    {
        $this->descriptionofReviewingActivity = $descriptionofReviewingActivity;
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
     * @return InstitutionalReview
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstitutionReveiwed()
    {
        return $this->institutionReveiwed;
    }

    /**
     * @param mixed $institutionReveiwed
     *
     * @return InstitutionalReview
     */
    public function setInstitutionReveiwed($institutionReveiwed)
    {
        $this->institutionReveiwed = $institutionReveiwed;
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
     * @return InstitutionalReview
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
     * @return InstitutionalReview
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

}