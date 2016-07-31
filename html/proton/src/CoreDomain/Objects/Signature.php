<?php

namespace CoreDomain\Objects;


/**
 * Class Signature
 * @package CoreDomain\Objects
 */
class Signature extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $signatoryFullName;
    /**
     * @var
     */
    protected $signatoryInstitutionDepartment;
    /**
     * @var
     */
    protected $signatoryInstitutionDepartmentAddress;
    /**
     * @var
     */
    protected $signatoryInstitutionID;
    /**
     * @var
     */
    protected $signatoryTitle;
    /**
     * @var
     */
    protected $signatureAttachment;
    /**
     * @var
     */
    protected $signatureDate;
    /**
     * @var
     */
    protected $signatureType;

    /**
     * @return mixed
     */
    public function getSignatoryFullName()
    {
        return $this->signatoryFullName;
    }

    /**
     * @param mixed $signatoryFullName
     *
     * @return Signature
     */
    public function setSignatoryFullName($signatoryFullName)
    {
        $this->signatoryFullName = $signatoryFullName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignatoryInstitutionDepartment()
    {
        return $this->signatoryInstitutionDepartment;
    }

    /**
     * @param mixed $signatoryInstitutionDepartment
     *
     * @return Signature
     */
    public function setSignatoryInstitutionDepartment($signatoryInstitutionDepartment)
    {
        $this->signatoryInstitutionDepartment = $signatoryInstitutionDepartment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignatoryInstitutionDepartmentAddress()
    {
        return $this->signatoryInstitutionDepartmentAddress;
    }

    /**
     * @param mixed $signatoryInstitutionDepartmentAddress
     *
     * @return Signature
     */
    public function setSignatoryInstitutionDepartmentAddress($signatoryInstitutionDepartmentAddress)
    {
        $this->signatoryInstitutionDepartmentAddress = $signatoryInstitutionDepartmentAddress;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignatoryInstitutionID()
    {
        return $this->signatoryInstitutionID;
    }

    /**
     * @param mixed $signatoryInstitutionID
     *
     * @return Signature
     */
    public function setSignatoryInstitutionID($signatoryInstitutionID)
    {
        $this->signatoryInstitutionID = $signatoryInstitutionID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignatoryTitle()
    {
        return $this->signatoryTitle;
    }

    /**
     * @param mixed $signatoryTitle
     *
     * @return Signature
     */
    public function setSignatoryTitle($signatoryTitle)
    {
        $this->signatoryTitle = $signatoryTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignatureAttachment()
    {
        return $this->signatureAttachment;
    }

    /**
     * @param mixed $signatureAttachment
     *
     * @return Signature
     */
    public function setSignatureAttachment($signatureAttachment)
    {
        $this->signatureAttachment = $signatureAttachment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignatureDate()
    {
        return $this->signatureDate;
    }

    /**
     * @param mixed $signatureDate
     *
     * @return Signature
     */
    public function setSignatureDate($signatureDate)
    {
        $this->signatureDate = $signatureDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignatureType()
    {
        return $this->signatureType;
    }

    /**
     * @param mixed $signatureType
     *
     * @return Signature
     */
    public function setSignatureType($signatureType)
    {
        $this->signatureType = $signatureType;
        return $this;
    }

}