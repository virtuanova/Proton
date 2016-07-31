<?php

namespace CoreDomain\Objects;


/**
 * Class Distinction
 * @package CoreDomain\Objects
 */
class Distinction extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $amount;
    /**
     * @var
     */
    protected $awardedBy;
    /**
     * @var
     */
    protected $country;
    /**
     * @var
     */
    protected $currency;
    /**
     * @var
     */
    protected $description;
    /**
     * @var
     */
    protected $distinctionName;
    /**
     * @var
     */
    protected $distinctionType;
    /**
     * @var
     */
    protected $effectiveDate;
    /**
     * @var
     */
    protected $endDate;
    /**
     * @var
     */
    protected $researchClassification;

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     *
     * @return Distinction
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAwardedBy()
    {
        return $this->awardedBy;
    }

    /**
     * @param mixed $awardedBy
     *
     * @return Distinction
     */
    public function setAwardedBy($awardedBy)
    {
        $this->awardedBy = $awardedBy;
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
     * @return Distinction
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     *
     * @return Distinction
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     *
     * @return Distinction
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDistinctionName()
    {
        return $this->distinctionName;
    }

    /**
     * @param mixed $distinctionName
     *
     * @return Distinction
     */
    public function setDistinctionName($distinctionName)
    {
        $this->distinctionName = $distinctionName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDistinctionType()
    {
        return $this->distinctionType;
    }

    /**
     * @param mixed $distinctionType
     *
     * @return Distinction
     */
    public function setDistinctionType($distinctionType)
    {
        $this->distinctionType = $distinctionType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * @param mixed $effectiveDate
     *
     * @return Distinction
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
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
     * @return Distinction
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
     *
     * @return Distinction
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

}