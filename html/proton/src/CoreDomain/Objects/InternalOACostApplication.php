<?php

namespace CoreDomain\Objects;


/**
 * Class InternalOACostApplication
 * @package CoreDomain\Objects
 */
class InternalOACostApplication extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $authorID;
    /**
     * @var
     */
    protected $authorIDType;
    /**
     * @var
     */
    protected $authorName;
    /**
     * @var
     */
    protected $authorOrganisationalUnit;
    /**
     * @var
     */
    protected $currency;
    /**
     * @var
     */
    protected $date;
    /**
     * @var
     */
    protected $estimatedCharge;
    /**
     * @var
     */
    protected $externalNotes;

    /**
     * @return mixed
     */
    public function getAuthorID()
    {
        return $this->authorID;
    }

    /**
     * @param mixed $authorID
     *
     * @return InternalOACostApplication
     */
    public function setAuthorID($authorID)
    {
        $this->authorID = $authorID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthorIDType()
    {
        return $this->authorIDType;
    }

    /**
     * @param mixed $authorIDType
     *
     * @return InternalOACostApplication
     */
    public function setAuthorIDType($authorIDType)
    {
        $this->authorIDType = $authorIDType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

    /**
     * @param mixed $authorName
     *
     * @return InternalOACostApplication
     */
    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthorOrganisationalUnit()
    {
        return $this->authorOrganisationalUnit;
    }

    /**
     * @param mixed $authorOrganisationalUnit
     *
     * @return InternalOACostApplication
     */
    public function setAuthorOrganisationalUnit($authorOrganisationalUnit)
    {
        $this->authorOrganisationalUnit = $authorOrganisationalUnit;
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
     * @return InternalOACostApplication
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     *
     * @return InternalOACostApplication
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstimatedCharge()
    {
        return $this->estimatedCharge;
    }

    /**
     * @param mixed $estimatedCharge
     *
     * @return InternalOACostApplication
     */
    public function setEstimatedCharge($estimatedCharge)
    {
        $this->estimatedCharge = $estimatedCharge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExternalNotes()
    {
        return $this->externalNotes;
    }

    /**
     * @param mixed $externalNotes
     *
     * @return InternalOACostApplication
     */
    public function setExternalNotes($externalNotes)
    {
        $this->externalNotes = $externalNotes;
        return $this;
    }

}