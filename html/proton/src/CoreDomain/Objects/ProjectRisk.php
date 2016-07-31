<?php

namespace CoreDomain\Objects;


/**
 * Class ProjectRisk
 * @package CoreDomain\Objects
 */
class ProjectRisk extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $milestoneID;
    /**
     * @var
     */
    protected $riskImpact;
    /**
     * @var
     */
    protected $riskMitigationStrategy;
    /**
     * @var
     */
    protected $riskMonitoringStrategy;
    /**
     * @var
     */
    protected $riskProbability;
    /**
     * @var
     */
    protected $riskType;

    /**
     * @return mixed
     */
    public function getMilestoneID()
    {
        return $this->milestoneID;
    }

    /**
     * @param mixed $milestoneID
     *
     * @return ProjectRisk
     */
    public function setMilestoneID($milestoneID)
    {
        $this->milestoneID = $milestoneID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRiskImpact()
    {
        return $this->riskImpact;
    }

    /**
     * @param mixed $riskImpact
     *
     * @return ProjectRisk
     */
    public function setRiskImpact($riskImpact)
    {
        $this->riskImpact = $riskImpact;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRiskMitigationStrategy()
    {
        return $this->riskMitigationStrategy;
    }

    /**
     * @param mixed $riskMitigationStrategy
     *
     * @return ProjectRisk
     */
    public function setRiskMitigationStrategy($riskMitigationStrategy)
    {
        $this->riskMitigationStrategy = $riskMitigationStrategy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRiskMonitoringStrategy()
    {
        return $this->riskMonitoringStrategy;
    }

    /**
     * @param mixed $riskMonitoringStrategy
     *
     * @return ProjectRisk
     */
    public function setRiskMonitoringStrategy($riskMonitoringStrategy)
    {
        $this->riskMonitoringStrategy = $riskMonitoringStrategy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRiskProbability()
    {
        return $this->riskProbability;
    }

    /**
     * @param mixed $riskProbability
     *
     * @return ProjectRisk
     */
    public function setRiskProbability($riskProbability)
    {
        $this->riskProbability = $riskProbability;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRiskType()
    {
        return $this->riskType;
    }

    /**
     * @param mixed $riskType
     *
     * @return ProjectRisk
     */
    public function setRiskType($riskType)
    {
        $this->riskType = $riskType;
        return $this;
    }

}