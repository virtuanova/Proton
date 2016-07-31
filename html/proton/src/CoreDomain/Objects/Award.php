<?php

namespace CoreDomain\Objects;


/**
 * Class Award
 * @package CoreDomain\Objects
 */
class Award extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $awardStatus;
    /**
     * @var
     */
    protected $awardType;
    /**
     * @var
     */
    protected $competitive;
    /**
     * @var
     */
    protected $currency;
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
    protected $fundingRenewable;
    /**
     * @var
     */
    protected $fundingType;
    /**
     * @var
     */
    protected $investigationRole;
    /**
     * @var
     */
    protected $multiyearDetails;
    /**
     * @var
     */
    protected $otherInvestigators;
    /**
     * @var
     */
    protected $portionofFunding;
    /**
     * @var
     */
    protected $programName;
    /**
     * @var
     */
    protected $projectDescription;
    /**
     * @var
     */
    protected $projectTitle;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $roleofOtherInvestigators;
    /**
     * @var
     */
    protected $startDate;
    /**
     * @var
     */
    protected $timeCommitmentPerYear;
    /**
     * @var
     */
    protected $totalAmount;
    /**
     * @var
     */
    protected $yearAwarded;

    /**
     * @return mixed
     */
    public function getAwardStatus()
    {
        return $this->awardStatus;
    }

    /**
     * @param mixed $awardStatus
     * @return Award
     */
    public function setAwardStatus($awardStatus)
    {
        $this->awardStatus = $awardStatus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAwardType()
    {
        return $this->awardType;
    }

    /**
     * @param mixed $awardType
     * @return Award
     */
    public function setAwardType($awardType)
    {
        $this->awardType = $awardType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompetitive()
    {
        return $this->competitive;
    }

    /**
     * @param mixed $competitive
     * @return Award
     */
    public function setCompetitive($competitive)
    {
        $this->competitive = $competitive;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     * @return Award
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
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
     * @return Award
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
     * @return Award
     */
    public function setFundingOrganization($fundingOrganization)
    {
        $this->fundingOrganization = $fundingOrganization;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFundingRenewable()
    {
        return $this->fundingRenewable;
    }

    /**
     * @param mixed $fundingRenewable
     * @return Award
     */
    public function setFundingRenewable($fundingRenewable)
    {
        $this->fundingRenewable = $fundingRenewable;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFundingType()
    {
        return $this->fundingType;
    }

    /**
     * @param mixed $fundingType
     * @return Award
     */
    public function setFundingType($fundingType)
    {
        $this->fundingType = $fundingType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvestigationRole()
    {
        return $this->investigationRole;
    }

    /**
     * @param mixed $investigationRole
     * @return Award
     */
    public function setInvestigationRole($investigationRole)
    {
        $this->investigationRole = $investigationRole;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMultiyearDetails()
    {
        return $this->multiyearDetails;
    }

    /**
     * @param mixed $multiyearDetails
     * @return Award
     */
    public function setMultiyearDetails($multiyearDetails)
    {
        $this->multiyearDetails = $multiyearDetails;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOtherInvestigators()
    {
        return $this->otherInvestigators;
    }

    /**
     * @param mixed $otherInvestigators
     * @return Award
     */
    public function setOtherInvestigators($otherInvestigators)
    {
        $this->otherInvestigators = $otherInvestigators;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPortionofFunding()
    {
        return $this->portionofFunding;
    }

    /**
     * @param mixed $portionofFunding
     * @return Award
     */
    public function setPortionofFunding($portionofFunding)
    {
        $this->portionofFunding = $portionofFunding;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProgramName()
    {
        return $this->programName;
    }

    /**
     * @param mixed $programName
     * @return Award
     */
    public function setProgramName($programName)
    {
        $this->programName = $programName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectDescription()
    {
        return $this->projectDescription;
    }

    /**
     * @param mixed $projectDescription
     * @return Award
     */
    public function setProjectDescription($projectDescription)
    {
        $this->projectDescription = $projectDescription;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectTitle()
    {
        return $this->projectTitle;
    }

    /**
     * @param mixed $projectTitle
     * @return Award
     */
    public function setProjectTitle($projectTitle)
    {
        $this->projectTitle = $projectTitle;
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
     * @return Award
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRoleofOtherInvestigators()
    {
        return $this->roleofOtherInvestigators;
    }

    /**
     * @param mixed $roleofOtherInvestigators
     * @return Award
     */
    public function setRoleofOtherInvestigators($roleofOtherInvestigators)
    {
        $this->roleofOtherInvestigators = $roleofOtherInvestigators;
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
     * @return Award
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimeCommitmentPerYear()
    {
        return $this->timeCommitmentPerYear;
    }

    /**
     * @param mixed $timeCommitmentPerYear
     * @return Award
     */
    public function setTimeCommitmentPerYear($timeCommitmentPerYear)
    {
        $this->timeCommitmentPerYear = $timeCommitmentPerYear;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param mixed $totalAmount
     * @return Award
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getYearAwarded()
    {
        return $this->yearAwarded;
    }

    /**
     * @param mixed $yearAwarded
     * @return Award
     */
    public function setYearAwarded($yearAwarded)
    {
        $this->yearAwarded = $yearAwarded;
        return $this;
    }

}