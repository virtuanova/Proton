<?php

namespace CoreDomain\Objects;


/**
 * Class JournalReviewingRefereeing
 * @package CoreDomain\Objects
 */
class JournalReviewingRefereeing extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $endDate;
    /**
     * @var
     */
    protected $journal;
    /**
     * @var
     */
    protected $press;
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
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     *
     * @return JournalReviewingRefereeing
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getJournal()
    {
        return $this->journal;
    }

    /**
     * @param mixed $journal
     *
     * @return JournalReviewingRefereeing
     */
    public function setJournal($journal)
    {
        $this->journal = $journal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPress()
    {
        return $this->press;
    }

    /**
     * @param mixed $press
     *
     * @return JournalReviewingRefereeing
     */
    public function setPress($press)
    {
        $this->press = $press;
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
     * @return JournalReviewingRefereeing
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
     *
     * @return JournalReviewingRefereeing
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
     *
     * @return JournalReviewingRefereeing
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
     *
     * @return JournalReviewingRefereeing
     */
    public function setWorksReviewedRefereedDuringTimeFrame($worksReviewedRefereedDuringTimeFrame)
    {
        $this->worksReviewedRefereedDuringTimeFrame = $worksReviewedRefereedDuringTimeFrame;
        return $this;
    }

}