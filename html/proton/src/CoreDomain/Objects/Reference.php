<?php

namespace CoreDomain\Objects;


/**
 * Class Reference
 * @package CoreDomain\Objects
 */
class Reference extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $CASRAIID;
    /**
     * @var
     */
    protected $dateGiven;
    /**
     * @var
     */
    protected $institutionID;
    /**
     * @var
     */
    protected $presentedName;
    /**
     * @var
     */
    protected $primaryAddress;
    /**
     * @var
     */
    protected $primaryEmail;
    /**
     * @var
     */
    protected $primaryPhone;
    /**
     * @var
     */
    protected $referenceAttachment;
    /**
     * @var
     */
    protected $referenceSummary;

    /**
     * @return mixed
     */
    public function getCASRAIID()
    {
        return $this->CASRAIID;
    }

    /**
     * @param mixed $CASRAIID
     *
     * @return Reference
     */
    public function setCASRAIID($CASRAIID)
    {
        $this->CASRAIID = $CASRAIID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateGiven()
    {
        return $this->dateGiven;
    }

    /**
     * @param mixed $dateGiven
     *
     * @return Reference
     */
    public function setDateGiven($dateGiven)
    {
        $this->dateGiven = $dateGiven;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstitutionID()
    {
        return $this->institutionID;
    }

    /**
     * @param mixed $institutionID
     *
     * @return Reference
     */
    public function setInstitutionID($institutionID)
    {
        $this->institutionID = $institutionID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPresentedName()
    {
        return $this->presentedName;
    }

    /**
     * @param mixed $presentedName
     *
     * @return Reference
     */
    public function setPresentedName($presentedName)
    {
        $this->presentedName = $presentedName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrimaryAddress()
    {
        return $this->primaryAddress;
    }

    /**
     * @param mixed $primaryAddress
     *
     * @return Reference
     */
    public function setPrimaryAddress($primaryAddress)
    {
        $this->primaryAddress = $primaryAddress;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrimaryEmail()
    {
        return $this->primaryEmail;
    }

    /**
     * @param mixed $primaryEmail
     *
     * @return Reference
     */
    public function setPrimaryEmail($primaryEmail)
    {
        $this->primaryEmail = $primaryEmail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrimaryPhone()
    {
        return $this->primaryPhone;
    }

    /**
     * @param mixed $primaryPhone
     *
     * @return Reference
     */
    public function setPrimaryPhone($primaryPhone)
    {
        $this->primaryPhone = $primaryPhone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReferenceAttachment()
    {
        return $this->referenceAttachment;
    }

    /**
     * @param mixed $referenceAttachment
     *
     * @return Reference
     */
    public function setReferenceAttachment($referenceAttachment)
    {
        $this->referenceAttachment = $referenceAttachment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReferenceSummary()
    {
        return $this->referenceSummary;
    }

    /**
     * @param mixed $referenceSummary
     *
     * @return Reference
     */
    public function setReferenceSummary($referenceSummary)
    {
        $this->referenceSummary = $referenceSummary;
        return $this;
    }

}