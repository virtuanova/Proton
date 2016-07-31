<?php

namespace CoreDomain\Objects;


/**
 * Class ExpertWitness
 * @package CoreDomain\Objects
 */
class ExpertWitness extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $case;
    /**
     * @var
     */
    protected $contributionDescription;
    /**
     * @var
     */
    protected $endDate;
    /**
     * @var
     */
    protected $locationJurisdiction;
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
    public function getCase()
    {
        return $this->case;
    }

    /**
     * @param mixed $case
     *
     * @return ExpertWitness
     */
    public function setCase($case)
    {
        $this->case = $case;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContributionDescription()
    {
        return $this->contributionDescription;
    }

    /**
     * @param mixed $contributionDescription
     *
     * @return ExpertWitness
     */
    public function setContributionDescription($contributionDescription)
    {
        $this->contributionDescription = $contributionDescription;
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
     * @return ExpertWitness
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocationJurisdiction()
    {
        return $this->locationJurisdiction;
    }

    /**
     * @param mixed $locationJurisdiction
     *
     * @return ExpertWitness
     */
    public function setLocationJurisdiction($locationJurisdiction)
    {
        $this->locationJurisdiction = $locationJurisdiction;
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
     * @return ExpertWitness
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
     * @return ExpertWitness
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

}