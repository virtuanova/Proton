<?php

namespace CoreDomain\Objects;


/**
 * Class Patent
 * @package CoreDomain\Objects
 */
class Patent extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $applicationStatus;
    /**
     * @var
     */
    protected $coauthors;
    /**
     * @var
     */
    protected $country;
    /**
     * @var
     */
    protected $dateIssued;
    /**
     * @var
     */
    protected $dateRequested;
    /**
     * @var
     */
    protected $dateofFilingPriority;
    /**
     * @var
     */
    protected $dateofTermEnd;
    /**
     * @var
     */
    protected $firstListedAuthor;
    /**
     * @var
     */
    protected $patentNumber;
    /**
     * @var
     */
    protected $patentTitle;
    /**
     * @var
     */
    protected $researchClassification;

    /**
     * @return mixed
     */
    public function getApplicationStatus()
    {
        return $this->applicationStatus;
    }

    /**
     * @param mixed $applicationStatus
     *
     * @return Patent
     */
    public function setApplicationStatus($applicationStatus)
    {
        $this->applicationStatus = $applicationStatus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoauthors()
    {
        return $this->coauthors;
    }

    /**
     * @param mixed $coauthors
     *
     * @return Patent
     */
    public function setCoauthors($coauthors)
    {
        $this->coauthors = $coauthors;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     *
     * @return Patent
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateIssued()
    {
        return $this->dateIssued;
    }

    /**
     * @param mixed $dateIssued
     *
     * @return Patent
     */
    public function setDateIssued($dateIssued)
    {
        $this->dateIssued = $dateIssued;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateRequested()
    {
        return $this->dateRequested;
    }

    /**
     * @param mixed $dateRequested
     *
     * @return Patent
     */
    public function setDateRequested($dateRequested)
    {
        $this->dateRequested = $dateRequested;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateofFilingPriority()
    {
        return $this->dateofFilingPriority;
    }

    /**
     * @param mixed $dateofFilingPriority
     *
     * @return Patent
     */
    public function setDateofFilingPriority($dateofFilingPriority)
    {
        $this->dateofFilingPriority = $dateofFilingPriority;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateofTermEnd()
    {
        return $this->dateofTermEnd;
    }

    /**
     * @param mixed $dateofTermEnd
     *
     * @return Patent
     */
    public function setDateofTermEnd($dateofTermEnd)
    {
        $this->dateofTermEnd = $dateofTermEnd;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstListedAuthor()
    {
        return $this->firstListedAuthor;
    }

    /**
     * @param mixed $firstListedAuthor
     *
     * @return Patent
     */
    public function setFirstListedAuthor($firstListedAuthor)
    {
        $this->firstListedAuthor = $firstListedAuthor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPatentNumber()
    {
        return $this->patentNumber;
    }

    /**
     * @param mixed $patentNumber
     *
     * @return Patent
     */
    public function setPatentNumber($patentNumber)
    {
        $this->patentNumber = $patentNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPatentTitle()
    {
        return $this->patentTitle;
    }

    /**
     * @param mixed $patentTitle
     *
     * @return Patent
     */
    public function setPatentTitle($patentTitle)
    {
        $this->patentTitle = $patentTitle;
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
     * @return Patent
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

}