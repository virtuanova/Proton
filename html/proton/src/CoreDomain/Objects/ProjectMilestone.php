<?php

namespace CoreDomain\Objects;


/**
 * Class ProjectMilestone
 * @package CoreDomain\Objects
 */
class ProjectMilestone extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $milestoneDependency;
    /**
     * @var
     */
    protected $milestoneDescription;
    /**
     * @var
     */
    protected $milestoneEndDate;
    /**
     * @var
     */
    protected $milestoneID;
    /**
     * @var
     */
    protected $milestoneQuarter;
    /**
     * @var
     */
    protected $milestoneStartDate;
    /**
     * @var
     */
    protected $milestoneYear;

    /**
     * @return mixed
     */
    public function getMilestoneDependency()
    {
        return $this->milestoneDependency;
    }

    /**
     * @param mixed $milestoneDependency
     *
     * @return ProjectMilestone
     */
    public function setMilestoneDependency($milestoneDependency)
    {
        $this->milestoneDependency = $milestoneDependency;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMilestoneDescription()
    {
        return $this->milestoneDescription;
    }

    /**
     * @param mixed $milestoneDescription
     *
     * @return ProjectMilestone
     */
    public function setMilestoneDescription($milestoneDescription)
    {
        $this->milestoneDescription = $milestoneDescription;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMilestoneEndDate()
    {
        return $this->milestoneEndDate;
    }

    /**
     * @param mixed $milestoneEndDate
     *
     * @return ProjectMilestone
     */
    public function setMilestoneEndDate($milestoneEndDate)
    {
        $this->milestoneEndDate = $milestoneEndDate;
        return $this;
    }

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
     * @return ProjectMilestone
     */
    public function setMilestoneID($milestoneID)
    {
        $this->milestoneID = $milestoneID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMilestoneQuarter()
    {
        return $this->milestoneQuarter;
    }

    /**
     * @param mixed $milestoneQuarter
     *
     * @return ProjectMilestone
     */
    public function setMilestoneQuarter($milestoneQuarter)
    {
        $this->milestoneQuarter = $milestoneQuarter;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMilestoneStartDate()
    {
        return $this->milestoneStartDate;
    }

    /**
     * @param mixed $milestoneStartDate
     *
     * @return ProjectMilestone
     */
    public function setMilestoneStartDate($milestoneStartDate)
    {
        $this->milestoneStartDate = $milestoneStartDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMilestoneYear()
    {
        return $this->milestoneYear;
    }

    /**
     * @param mixed $milestoneYear
     *
     * @return ProjectMilestone
     */
    public function setMilestoneYear($milestoneYear)
    {
        $this->milestoneYear = $milestoneYear;
        return $this;
    }

}