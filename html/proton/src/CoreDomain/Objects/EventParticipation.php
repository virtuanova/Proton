<?php

namespace CoreDomain\Objects;


/**
 * Class EventParticipation
 * @package CoreDomain\Objects
 */
class EventParticipation extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $eventDate;
    /**
     * @var
     */
    protected $eventDescription;
    /**
     * @var
     */
    protected $eventType;
    /**
     * @var
     */
    protected $researchClassification;

    /**
     * @return mixed
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * @param mixed $eventDate
     *
     * @return EventParticipation
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;
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
     * @return EventParticipation
     */
    public function setEventDescription($eventDescription)
    {
        $this->eventDescription = $eventDescription;
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
     * @return EventParticipation
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
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
     * @return EventParticipation
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

}