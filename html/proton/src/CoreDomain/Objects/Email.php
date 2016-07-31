<?php

namespace CoreDomain\Objects;


/**
 * Class Email
 * @package CoreDomain\Objects
 */
class Email extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $emailType;
    /**
     * @var
     */
    protected $emailAddress;
    /**
     * @var
     */
    protected $endDate;
    /**
     * @var
     */
    protected $startDate;

    /**
     * @return mixed
     */
    public function getEmailType()
    {
        return $this->emailType;
    }

    /**
     * @param mixed $emailType
     *
     * @return Email
     */
    public function setEmailType($emailType)
    {
        $this->emailType = $emailType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param mixed $emailAddress
     *
     * @return Email
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
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
     * @return Email
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
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
     * @return Email
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

}