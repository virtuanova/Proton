<?php

namespace CoreDomain\Objects;


/**
 * Class InkindFunding
 * @package CoreDomain\Objects
 */
class InkindFunding extends BaseObjectInterface
{

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
    protected $inKindFundingType;
    /**
     * @var
     */
    protected $periodicAmounts;

    /**
     * @return mixed
     */
    public function getFundingSourceID()
    {
        return $this->fundingSourceID;
    }

    /**
     * @param mixed $fundingSourceID
     *
     * @return InkindFunding
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
     *
     * @return InkindFunding
     */
    public function setFundingSourceProgram($fundingSourceProgram)
    {
        $this->fundingSourceProgram = $fundingSourceProgram;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInKindFundingType()
    {
        return $this->inKindFundingType;
    }

    /**
     * @param mixed $inKindFundingType
     *
     * @return InkindFunding
     */
    public function setInKindFundingType($inKindFundingType)
    {
        $this->inKindFundingType = $inKindFundingType;
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
     *
     * @return InkindFunding
     */
    public function setPeriodicAmounts($periodicAmounts)
    {
        $this->periodicAmounts = $periodicAmounts;
        return $this;
    }

}