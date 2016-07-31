<?php

namespace CoreDomain\Objects;


/**
 * Class CashFunder
 * @package CoreDomain\Objects
 */
class CashFunder extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $cashFundingType;
    /**
     * @var
     */
    protected $fundingSourceID;
    /**
     * @var
     */
    protected $fundingSourceProgram;
    /**
     * @var
     */
    protected $periodicAmounts;

    /**
     * @return mixed
     */
    public function getCashFundingType()
    {
        return $this->cashFundingType;
    }

    /**
     * @param mixed $cashFundingType
     * @return CashFunder
     */
    public function setCashFundingType($cashFundingType)
    {
        $this->cashFundingType = $cashFundingType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFundingSourceID()
    {
        return $this->fundingSourceID;
    }

    /**
     * @param mixed $fundingSourceID
     * @return CashFunder
     */
    public function setFundingSourceID($fundingSourceID)
    {
        $this->fundingSourceID = $fundingSourceID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFundingSourceProgram()
    {
        return $this->fundingSourceProgram;
    }

    /**
     * @param mixed $fundingSourceProgram
     * @return CashFunder
     */
    public function setFundingSourceProgram($fundingSourceProgram)
    {
        $this->fundingSourceProgram = $fundingSourceProgram;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPeriodicAmounts()
    {
        return $this->periodicAmounts;
    }

    /**
     * @param mixed $periodicAmounts
     * @return CashFunder
     */
    public function setPeriodicAmounts($periodicAmounts)
    {
        $this->periodicAmounts = $periodicAmounts;
        return $this;
    }

}