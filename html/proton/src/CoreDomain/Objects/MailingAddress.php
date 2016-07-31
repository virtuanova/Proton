<?php

namespace CoreDomain\Objects;


/**
 * Class MailingAddress
 * @package CoreDomain\Objects
 */
class MailingAddress extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $addressType;
    /**
     * @var
     */
    protected $city;
    /**
     * @var
     */
    protected $country;
    /**
     * @var
     */
    protected $endDate;
    /**
     * @var
     */
    protected $postalCode;
    /**
     * @var
     */
    protected $provinceState;
    /**
     * @var
     */
    protected $startDate;
    /**
     * @var
     */
    protected $streetAddress1;
    /**
     * @var
     */
    protected $streetAddress2;
    /**
     * @var
     */
    protected $streetAddress3;
    /**
     * @var
     */
    protected $streetAddress4;

    /**
     * @return mixed
     */
    public function getAddressType()
    {
        return $this->addressType;
    }

    /**
     * @param mixed $addressType
     *
     * @return MailingAddress
     */
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     *
     * @return MailingAddress
     */
    public function setCity($city)
    {
        $this->city = $city;
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
     * @return MailingAddress
     */
    public function setCountry($country)
    {
        $this->country = $country;
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
     * @return MailingAddress
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     *
     * @return MailingAddress
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProvinceState()
    {
        return $this->provinceState;
    }

    /**
     * @param mixed $provinceState
     *
     * @return MailingAddress
     */
    public function setProvinceState($provinceState)
    {
        $this->provinceState = $provinceState;
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
     * @return MailingAddress
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStreetAddress1()
    {
        return $this->streetAddress1;
    }

    /**
     * @param mixed $streetAddress1
     *
     * @return MailingAddress
     */
    public function setStreetAddress1($streetAddress1)
    {
        $this->streetAddress1 = $streetAddress1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStreetAddress2()
    {
        return $this->streetAddress2;
    }

    /**
     * @param mixed $streetAddress2
     *
     * @return MailingAddress
     */
    public function setStreetAddress2($streetAddress2)
    {
        $this->streetAddress2 = $streetAddress2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStreetAddress3()
    {
        return $this->streetAddress3;
    }

    /**
     * @param mixed $streetAddress3
     *
     * @return MailingAddress
     */
    public function setStreetAddress3($streetAddress3)
    {
        $this->streetAddress3 = $streetAddress3;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStreetAddress4()
    {
        return $this->streetAddress4;
    }

    /**
     * @param mixed $streetAddress4
     *
     * @return MailingAddress
     */
    public function setStreetAddress4($streetAddress4)
    {
        $this->streetAddress4 = $streetAddress4;
        return $this;
    }

}