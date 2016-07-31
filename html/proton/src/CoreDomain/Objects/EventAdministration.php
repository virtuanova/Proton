<?php

namespace CoreDomain\Objects;


/**
 * Class EventAdministration
 * @package CoreDomain\Objects
 */
class EventAdministration extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $activityEndDate;
    /**
     * @var
     */
    protected $activityStartDate;
    /**
     * @var
     */
    protected $administrativeRole;
    /**
     * @var
     */
    protected $eventDescription;
    /**
     * @var
     */
    protected $eventEndDate;
    /**
     * @var
     */
    protected $eventStartDate;
    /**
     * @var
     */
    protected $eventType;
    /**
     * @var
     */
    protected $primaryEventOrganizaer;
    /**
     * @var
     */
    protected $researchClassification;

    /**
     * @return mixed
     */
    public function getActivityEndDate()
    {
        return $this->activityEndDate;
    }

    /**
     * @param mixed $activityEndDate
     *
     * @return EventAdministration
     */
    public function setActivityEndDate($activityEndDate)
    {
        $this->activityEndDate = $activityEndDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActivityStartDate()
    {
        return $this->activityStartDate;
    }

    /**
     * @param mixed $activityStartDate
     *
     * @return EventAdministration
     */
    public function setActivityStartDate($activityStartDate)
    {
        $this->activityStartDate = $activityStartDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdministrativeRole()
    {
        return $this->administrativeRole;
    }

    /**
     * @param mixed $administrativeRole
     *
     * @return EventAdministration
     */
    public function setAdministrativeRole($administrativeRole)
    {
        $this->administrativeRole = $administrativeRole;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEventDescription()
    {
        return $this->eventDescription;
    }

    /**
     * @param mixed $eventDescription
     *
     * @return EventAdministration
     */
    public function setEventDescription($eventDescription)
    {
        $this->eventDescription = $eventDescription;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEventEndDate()
    {
        return $this->eventEndDate;
    }

    /**
     * @param mixed $eventEndDate
     *
     * @return EventAdministration
     */
    public function setEventEndDate($eventEndDate)
    {
        $this->eventEndDate = $eventEndDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEventStartDate()
    {
        return $this->eventStartDate;
    }

    /**
     * @param mixed $eventStartDate
     *
     * @return EventAdministration
     */
    public function setEventStartDate($eventStartDate)
    {
        $this->eventStartDate = $eventStartDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @param mixed $eventType
     *
     * @return EventAdministration
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrimaryEventOrganizaer()
    {
        return $this->primaryEventOrganizaer;
    }

    /**
     * @param mixed $primaryEventOrganizaer
     *
     * @return EventAdministration
     */
    public function setPrimaryEventOrganizaer($primaryEventOrganizaer)
    {
        $this->primaryEventOrganizaer = $primaryEventOrganizaer;
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
     * @return EventAdministration
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

}