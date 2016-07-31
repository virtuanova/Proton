<?php

namespace CoreDomain\Objects;


/**
 * Class Review
 * @package CoreDomain\Objects
 */
class Review extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $completionDate;
    /**
     * @var
     */
    protected $conveningOrgID;
    /**
     * @var
     */
    protected $conveningOrgIDType;
    /**
     * @var
     */
    protected $conveningOrgName;
    /**
     * @var
     */
    protected $referenceID;
    /**
     * @var
     */
    protected $type;
    /**
     * @var
     */
    protected $uRL;

    /**
     * @return mixed
     */
    public function getCompletionDate()
    {
        return $this->completionDate;
    }

    /**
     * @param mixed $completionDate
     *
     * @return Review
     */
    public function setCompletionDate($completionDate)
    {
        $this->completionDate = $completionDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConveningOrgID()
    {
        return $this->conveningOrgID;
    }

    /**
     * @param mixed $conveningOrgID
     *
     * @return Review
     */
    public function setConveningOrgID($conveningOrgID)
    {
        $this->conveningOrgID = $conveningOrgID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConveningOrgIDType()
    {
        return $this->conveningOrgIDType;
    }

    /**
     * @param mixed $conveningOrgIDType
     *
     * @return Review
     */
    public function setConveningOrgIDType($conveningOrgIDType)
    {
        $this->conveningOrgIDType = $conveningOrgIDType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConveningOrgName()
    {
        return $this->conveningOrgName;
    }

    /**
     * @param mixed $conveningOrgName
     *
     * @return Review
     */
    public function setConveningOrgName($conveningOrgName)
    {
        $this->conveningOrgName = $conveningOrgName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReferenceID()
    {
        return $this->referenceID;
    }

    /**
     * @param mixed $referenceID
     *
     * @return Review
     */
    public function setReferenceID($referenceID)
    {
        $this->referenceID = $referenceID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     *
     * @return Review
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * @param mixed $uRL
     *
     * @return Review
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

}