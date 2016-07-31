<?php

namespace CoreDomain\Objects;


/**
 * Class PersonalLeaveofAbsence
 * @package CoreDomain\Objects
 */
class PersonalLeaveofAbsence extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $endDate;
    /**
     * @var
     */
    protected $leaveType;
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
     *
     * @return PersonalLeaveofAbsence
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
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
     *
     * @return PersonalLeaveofAbsence
     */
    public function setLeaveType($leaveType)
    {
        $this->leaveType = $leaveType;
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
     * @return PersonalLeaveofAbsence
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

}