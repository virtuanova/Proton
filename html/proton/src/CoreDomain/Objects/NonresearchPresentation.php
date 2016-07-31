<?php

namespace CoreDomain\Objects;


/**
 * Class NonresearchPresentation
 * @package CoreDomain\Objects
 */
class NonresearchPresentation extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $copresenters;
    /**
     * @var
     */
    protected $competitive;
    /**
     * @var
     */
    protected $conferenceEvent;
    /**
     * @var
     */
    protected $conferenceEventLocation;
    /**
     * @var
     */
    protected $invited;
    /**
     * @var
     */
    protected $keynote;
    /**
     * @var
     */
    protected $organizationPresentedto;
    /**
     * @var
     */
    protected $presentationDate;
    /**
     * @var
     */
    protected $title;

    /**
     * @return mixed
     */
    public function getCopresenters()
    {
        return $this->copresenters;
    }

    /**
     * @param mixed $copresenters
     *
     * @return NonresearchPresentation
     */
    public function setCopresenters($copresenters)
    {
        $this->copresenters = $copresenters;
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
     *
     * @return NonresearchPresentation
     */
    public function setCompetitive($competitive)
    {
        $this->competitive = $competitive;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConferenceEvent()
    {
        return $this->conferenceEvent;
    }

    /**
     * @param mixed $conferenceEvent
     *
     * @return NonresearchPresentation
     */
    public function setConferenceEvent($conferenceEvent)
    {
        $this->conferenceEvent = $conferenceEvent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConferenceEventLocation()
    {
        return $this->conferenceEventLocation;
    }

    /**
     * @param mixed $conferenceEventLocation
     *
     * @return NonresearchPresentation
     */
    public function setConferenceEventLocation($conferenceEventLocation)
    {
        $this->conferenceEventLocation = $conferenceEventLocation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvited()
    {
        return $this->invited;
    }

    /**
     * @param mixed $invited
     *
     * @return NonresearchPresentation
     */
    public function setInvited($invited)
    {
        $this->invited = $invited;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKeynote()
    {
        return $this->keynote;
    }

    /**
     * @param mixed $keynote
     *
     * @return NonresearchPresentation
     */
    public function setKeynote($keynote)
    {
        $this->keynote = $keynote;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrganizationPresentedto()
    {
        return $this->organizationPresentedto;
    }

    /**
     * @param mixed $organizationPresentedto
     *
     * @return NonresearchPresentation
     */
    public function setOrganizationPresentedto($organizationPresentedto)
    {
        $this->organizationPresentedto = $organizationPresentedto;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPresentationDate()
    {
        return $this->presentationDate;
    }

    /**
     * @param mixed $presentationDate
     *
     * @return NonresearchPresentation
     */
    public function setPresentationDate($presentationDate)
    {
        $this->presentationDate = $presentationDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     *
     * @return NonresearchPresentation
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

}