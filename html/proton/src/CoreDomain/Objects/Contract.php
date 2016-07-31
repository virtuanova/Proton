<?php

namespace CoreDomain\Objects;


/**
 * Class Contract
 * @package CoreDomain\Objects
 */
class Contract extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $competitive;
    /**
     * @var
     */
    protected $contractStatus;
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
    protected $otherInvestigators;
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
    protected $totalAmount;

    /**
     * @return mixed
     */
    public function getCompetitive()
    {
        return $this->competitive;
    }

    /**
     * @param mixed $competitive
     * @return Contract
     */
    public function setCompetitive($competitive)
    {
        $this->competitive = $competitive;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContractStatus()
    {
        return $this->contractStatus;
    }

    /**
     * @param mixed $contractStatus
     * @return Contract
     */
    public function setContractStatus($contractStatus)
    {
        $this->contractStatus = $contractStatus;
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
     * @return Contract
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
     * @return Contract
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
     * @return Contract
     */
    public function setFundingOrganization($fundingOrganization)
    {
        $this->fundingOrganization = $fundingOrganization;
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
     * @return Contract
     */
    public function setOtherInvestigators($otherInvestigators)
    {
        $this->otherInvestigators = $otherInvestigators;
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
     * @return Contract
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
     * @return Contract
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
     * @return Contract
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
     * @return Contract
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
     * @return Contract
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
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
     * @return Contract
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

}