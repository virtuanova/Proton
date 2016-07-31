<?php

namespace CoreDomain\Objects;


/**
 * Class FundsRequest
 * @package CoreDomain\Objects
 */
class FundsRequest extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $areaofApplication;
    /**
     * @var
     */
    protected $fundingSourceDeadline;
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
    protected $periodicAmountsRequested;
    /**
     * @var
     */
    protected $priorityArea;

    /**
     * @return mixed
     */
    public function getAreaofApplication()
    {
        return $this->areaofApplication;
    }

    /**
     * @param mixed $areaofApplication
     *
     * @return FundsRequest
     */
    public function setAreaofApplication($areaofApplication)
    {
        $this->areaofApplication = $areaofApplication;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFundingSourceDeadline()
    {
        return $this->fundingSourceDeadline;
    }

    /**
     * @param mixed $fundingSourceDeadline
     *
     * @return FundsRequest
     */
    public function setFundingSourceDeadline($fundingSourceDeadline)
    {
        $this->fundingSourceDeadline = $fundingSourceDeadline;
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
     *
     * @return FundsRequest
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
     * @return FundsRequest
     */
    public function setFundingSourceProgram($fundingSourceProgram)
    {
        $this->fundingSourceProgram = $fundingSourceProgram;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPeriodicAmountsRequested()
    {
        return $this->periodicAmountsRequested;
    }

    /**
     * @param mixed $periodicAmountsRequested
     *
     * @return FundsRequest
     */
    public function setPeriodicAmountsRequested($periodicAmountsRequested)
    {
        $this->periodicAmountsRequested = $periodicAmountsRequested;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriorityArea()
    {
        return $this->priorityArea;
    }

    /**
     * @param mixed $priorityArea
     *
     * @return FundsRequest
     */
    public function setPriorityArea($priorityArea)
    {
        $this->priorityArea = $priorityArea;
        return $this;
    }

}