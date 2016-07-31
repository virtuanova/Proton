<?php

namespace CoreDomain\Objects;


/**
 * Class ConferenceReviewingRefereeing
 * @package CoreDomain\Objects
 */
class ConferenceReviewingRefereeing extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $conference;
    /**
     * @var
     */
    protected $conferenceHost;
    /**
     * @var
     */
    protected $endDate;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $reviewType;
    /**
     * @var
     */
    protected $startDate;
    /**
     * @var
     */
    protected $worksReviewedRefereedDuringTimeFrame;

    /**
     * @return mixed
     */
    public function getConference()
    {
        return $this->conference;
    }

    /**
     * @param mixed $conference
     * @return ConferenceReviewingRefereeing
     */
    public function setConference($conference)
    {
        $this->conference = $conference;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConferenceHost()
    {
        return $this->conferenceHost;
    }

    /**
     * @param mixed $conferenceHost
     * @return ConferenceReviewingRefereeing
     */
    public function setConferenceHost($conferenceHost)
    {
        $this->conferenceHost = $conferenceHost;
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
     * @return ConferenceReviewingRefereeing
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
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
     * @return ConferenceReviewingRefereeing
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReviewType()
    {
        return $this->reviewType;
    }

    /**
     * @param mixed $reviewType
     * @return ConferenceReviewingRefereeing
     */
    public function setReviewType($reviewType)
    {
        $this->reviewType = $reviewType;
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
     * @return ConferenceReviewingRefereeing
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWorksReviewedRefereedDuringTimeFrame()
    {
        return $this->worksReviewedRefereedDuringTimeFrame;
    }

    /**
     * @param mixed $worksReviewedRefereedDuringTimeFrame
     * @return ConferenceReviewingRefereeing
     */
    public function setWorksReviewedRefereedDuringTimeFrame($worksReviewedRefereedDuringTimeFrame)
    {
        $this->worksReviewedRefereedDuringTimeFrame = $worksReviewedRefereedDuringTimeFrame;
        return $this;
    }

}