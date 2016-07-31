<?php

namespace CoreDomain\Objects;


/**
 * Class Citizenship
 * @package CoreDomain\Objects
 */
class Citizenship extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $appliedforPermanentResidency;
    /**
     * @var
     */
    protected $citizenshipType;
    /**
     * @var
     */
    protected $country;
    /**
     * @var
     */
    protected $startDate;

    /**
     * @return mixed
     */
    public function getAppliedforPermanentResidency()
    {
        return $this->appliedforPermanentResidency;
    }

    /**
     * @param mixed $appliedforPermanentResidency
     * @return Citizenship
     */
    public function setAppliedforPermanentResidency($appliedforPermanentResidency)
    {
        $this->appliedforPermanentResidency = $appliedforPermanentResidency;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCitizenshipType()
    {
        return $this->citizenshipType;
    }

    /**
     * @param mixed $citizenshipType
     * @return Citizenship
     */
    public function setCitizenshipType($citizenshipType)
    {
        $this->citizenshipType = $citizenshipType;
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
     * @return Citizenship
     */
    public function setCountry($country)
    {
        $this->country = $country;
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
     * @return Citizenship
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

}