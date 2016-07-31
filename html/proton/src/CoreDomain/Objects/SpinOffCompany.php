<?php

namespace CoreDomain\Objects;


/**
 * Class SpinOffCompany
 * @package CoreDomain\Objects
 */
class SpinOffCompany extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $areaofActivity;
    /**
     * @var
     */
    protected $companyName;
    /**
     * @var
     */
    protected $companyStatus;
    /**
     * @var
     */
    protected $dateEstablished;
    /**
     * @var
     */
    protected $numberofEmployees;

    /**
     * @return mixed
     */
    public function getAreaofActivity()
    {
        return $this->areaofActivity;
    }

    /**
     * @param mixed $areaofActivity
     *
     * @return SpinOffCompany
     */
    public function setAreaofActivity($areaofActivity)
    {
        $this->areaofActivity = $areaofActivity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param mixed $companyName
     *
     * @return SpinOffCompany
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompanyStatus()
    {
        return $this->companyStatus;
    }

    /**
     * @param mixed $companyStatus
     *
     * @return SpinOffCompany
     */
    public function setCompanyStatus($companyStatus)
    {
        $this->companyStatus = $companyStatus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateEstablished()
    {
        return $this->dateEstablished;
    }

    /**
     * @param mixed $dateEstablished
     *
     * @return SpinOffCompany
     */
    public function setDateEstablished($dateEstablished)
    {
        $this->dateEstablished = $dateEstablished;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberofEmployees()
    {
        return $this->numberofEmployees;
    }

    /**
     * @param mixed $numberofEmployees
     *
     * @return SpinOffCompany
     */
    public function setNumberofEmployees($numberofEmployees)
    {
        $this->numberofEmployees = $numberofEmployees;
        return $this;
    }

}