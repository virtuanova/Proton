<?php

namespace CoreDomain\Objects;


/**
 * Class Trademark
 * @package CoreDomain\Objects
 */
class Trademark extends BaseObjectInterface
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
    protected $trademarkStatus;
    /**
     * @var
     */
    protected $trademarkTitle;

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
     * @return Trademark
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
     * @return Trademark
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
     * @return Trademark
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTrademarkStatus()
    {
        return $this->trademarkStatus;
    }

    /**
     * @param mixed $trademarkStatus
     *
     * @return Trademark
     */
    public function setTrademarkStatus($trademarkStatus)
    {
        $this->trademarkStatus = $trademarkStatus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTrademarkTitle()
    {
        return $this->trademarkTitle;
    }

    /**
     * @param mixed $trademarkTitle
     *
     * @return Trademark
     */
    public function setTrademarkTitle($trademarkTitle)
    {
        $this->trademarkTitle = $trademarkTitle;
        return $this;
    }

}