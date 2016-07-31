<?php

namespace CoreDomain\Objects;


/**
 * Class PhoneNumber
 * @package CoreDomain\Objects
 */
class PhoneNumber extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $areaCode;
    /**
     * @var
     */
    protected $countryCode;
    /**
     * @var
     */
    protected $endDate;
    /**
     * @var
     */
    protected $extension;
    /**
     * @var
     */
    protected $localNumber;
    /**
     * @var
     */
    protected $phoneType;
    /**
     * @var
     */
    protected $startDate;
    /**
     * @var
     */
    protected $useType;

    /**
     * @return mixed
     */
    public function getAreaCode()
    {
        return $this->areaCode;
    }

    /**
     * @param mixed $areaCode
     *
     * @return PhoneNumber
     */
    public function setAreaCode($areaCode)
    {
        $this->areaCode = $areaCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param mixed $countryCode
     *
     * @return PhoneNumber
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
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
     * @return PhoneNumber
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param mixed $extension
     *
     * @return PhoneNumber
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocalNumber()
    {
        return $this->localNumber;
    }

    /**
     * @param mixed $localNumber
     *
     * @return PhoneNumber
     */
    public function setLocalNumber($localNumber)
    {
        $this->localNumber = $localNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoneType()
    {
        return $this->phoneType;
    }

    /**
     * @param mixed $phoneType
     *
     * @return PhoneNumber
     */
    public function setPhoneType($phoneType)
    {
        $this->phoneType = $phoneType;
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
     * @return PhoneNumber
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUseType()
    {
        return $this->useType;
    }

    /**
     * @param mixed $useType
     *
     * @return PhoneNumber
     */
    public function setUseType($useType)
    {
        $this->useType = $useType;
        return $this;
    }

}