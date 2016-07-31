<?php

namespace CoreDomain\Objects;


/**
 * Class License
 * @package CoreDomain\Objects
 */
class License extends BaseObjectInterface
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
    protected $endDate;
    /**
     * @var
     */
    protected $licenseStatus;
    /**
     * @var
     */
    protected $licenseTitle;

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
     * @return License
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
     * @return License
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
     * @return License
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLicenseStatus()
    {
        return $this->licenseStatus;
    }

    /**
     * @param mixed $licenseStatus
     *
     * @return License
     */
    public function setLicenseStatus($licenseStatus)
    {
        $this->licenseStatus = $licenseStatus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLicenseTitle()
    {
        return $this->licenseTitle;
    }

    /**
     * @param mixed $licenseTitle
     *
     * @return License
     */
    public function setLicenseTitle($licenseTitle)
    {
        $this->licenseTitle = $licenseTitle;
        return $this;
    }

}