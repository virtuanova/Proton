<?php

namespace CoreDomain\Objects;


/**
 * Class PersonInfo
 * @package CoreDomain\Objects
 */
class PersonInfo extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $correspondenceLanguage;
    /**
     * @var
     */
    protected $dateofBirth;
    /**
     * @var
     */
    protected $designatedGroup;
    /**
     * @var
     */
    protected $familyName;
    /**
     * @var
     */
    protected $firstName;
    /**
     * @var
     */
    protected $gender;
    /**
     * @var
     */
    protected $middleName;
    /**
     * @var
     */
    protected $presentedName;
    /**
     * @var
     */
    protected $previousFamilyName;
    /**
     * @var
     */
    protected $salutation;

    /**
     * @return mixed
     */
    public function getCorrespondenceLanguage()
    {
        return $this->correspondenceLanguage;
    }

    /**
     * @param mixed $correspondenceLanguage
     */
    public function setCorrespondenceLanguage($correspondenceLanguage)
    {
        $this->correspondenceLanguage = $correspondenceLanguage;
    }

    /**
     * @return mixed
     */
    public function getDateofBirth()
    {
        return $this->dateofBirth;
    }

    /**
     * @param mixed $dateofBirth
     */
    public function setDateofBirth($dateofBirth)
    {
        $this->dateofBirth = $dateofBirth;
    }

    /**
     * @return mixed
     */
    public function getDesignatedGroup()
    {
        return $this->designatedGroup;
    }

    /**
     * @param mixed $designatedGroup
     */
    public function setDesignatedGroup($designatedGroup)
    {
        $this->designatedGroup = $designatedGroup;
    }

    /**
     * @return mixed
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * @param mixed $familyName
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param mixed $middleName
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
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
     */
    public function setPresentedName($presentedName)
    {
        $this->presentedName = $presentedName;
    }

    /**
     * @return mixed
     */
    public function getPreviousFamilyName()
    {
        return $this->previousFamilyName;
    }

    /**
     * @param mixed $previousFamilyName
     */
    public function setPreviousFamilyName($previousFamilyName)
    {
        $this->previousFamilyName = $previousFamilyName;
    }

    /**
     * @return mixed
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @param mixed $salutation
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;
    }

}