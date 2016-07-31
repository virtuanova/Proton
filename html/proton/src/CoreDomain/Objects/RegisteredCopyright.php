<?php

namespace CoreDomain\Objects;


/**
 * Class RegisteredCopyright
 * @package CoreDomain\Objects
 */
class RegisteredCopyright extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $applicationDate;
    /**
     * @var
     */
    protected $copyrightStatus;
    /**
     * @var
     */
    protected $copyrightTitle;
    /**
     * @var
     */
    protected $dateIssued;
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
     * @return RegisteredCopyright
     */
    public function setApplicationDate($applicationDate)
    {
        $this->applicationDate = $applicationDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCopyrightStatus()
    {
        return $this->copyrightStatus;
    }

    /**
     * @param mixed $copyrightStatus
     *
     * @return RegisteredCopyright
     */
    public function setCopyrightStatus($copyrightStatus)
    {
        $this->copyrightStatus = $copyrightStatus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCopyrightTitle()
    {
        return $this->copyrightTitle;
    }

    /**
     * @param mixed $copyrightTitle
     *
     * @return RegisteredCopyright
     */
    public function setCopyrightTitle($copyrightTitle)
    {
        $this->copyrightTitle = $copyrightTitle;
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
     * @return RegisteredCopyright
     */
    public function setDateIssued($dateIssued)
    {
        $this->dateIssued = $dateIssued;
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
     * @return RegisteredCopyright
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

}