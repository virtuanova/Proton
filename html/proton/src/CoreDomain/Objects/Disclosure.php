<?php

namespace CoreDomain\Objects;


/**
 * Class Disclosure
 * @package CoreDomain\Objects
 */
class Disclosure extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $applicationDate;
    /**
     * @var
     */
    protected $dateIssued;
    /**
     * @var
     */
    protected $disclosureStatus;
    /**
     * @var
     */
    protected $disclosureTitle;
    /**
     * @var
     */
    protected $endDate;

    /**
     * @return mixed
     */
    public function getApplicationDate()
    {
        return $this->applicationDate;
    }

    /**
     * @param mixed $applicationDate
     *
     * @return Disclosure
     */
    public function setApplicationDate($applicationDate)
    {
        $this->applicationDate = $applicationDate;
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
     * @return Disclosure
     */
    public function setDateIssued($dateIssued)
    {
        $this->dateIssued = $dateIssued;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDisclosureStatus()
    {
        return $this->disclosureStatus;
    }

    /**
     * @param mixed $disclosureStatus
     *
     * @return Disclosure
     */
    public function setDisclosureStatus($disclosureStatus)
    {
        $this->disclosureStatus = $disclosureStatus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDisclosureTitle()
    {
        return $this->disclosureTitle;
    }

    /**
     * @param mixed $disclosureTitle
     *
     * @return Disclosure
     */
    public function setDisclosureTitle($disclosureTitle)
    {
        $this->disclosureTitle = $disclosureTitle;
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
     *
     * @return Disclosure
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

}