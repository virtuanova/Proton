<?php

namespace CoreDomain\Objects;


/**
 * Class ProfessionalLeaveofAbsence
 * @package CoreDomain\Objects
 */
class ProfessionalLeaveofAbsence extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $endDate;
    /**
     * @var
     */
    protected $hostInstitution;
    /**
     * @var
     */
    protected $leaveType;
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
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getHostInstitution()
    {
        return $this->hostInstitution;
    }

    /**
     * @param mixed $hostInstitution
     */
    public function setHostInstitution($hostInstitution)
    {
        $this->hostInstitution = $hostInstitution;
    }

    /**
     * @return mixed
     */
    public function getLeaveType()
    {
        return $this->leaveType;
    }

    /**
     * @param mixed $leaveType
     */
    public function setLeaveType($leaveType)
    {
        $this->leaveType = $leaveType;
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
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
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
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

}