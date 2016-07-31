<?php

namespace CoreDomain\Objects;


/**
 * Class ResearchDatasetContributor
 * @package CoreDomain\Objects
 */
class ResearchDatasetContributor extends BaseObjectInterface
{

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
    protected $iD;
    /**
     * @var
     */
    protected $iDType;
    /**
     * @var
     */
    protected $institutionID;
    /**
     * @var
     */
    protected $institutionIDType;
    /**
     * @var
     */
    protected $role;

    /**
     * @return mixed
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * @param mixed $familyName
     *
     * @return ResearchDatasetContributor
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
        return $this;
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
     *
     * @return ResearchDatasetContributor
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * @param mixed $iD
     *
     * @return ResearchDatasetContributor
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIDType()
    {
        return $this->iDType;
    }

    /**
     * @param mixed $iDType
     *
     * @return ResearchDatasetContributor
     */
    public function setIDType($iDType)
    {
        $this->iDType = $iDType;
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
     * @return ResearchDatasetContributor
     */
    public function setInstitutionID($institutionID)
    {
        $this->institutionID = $institutionID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstitutionIDType()
    {
        return $this->institutionIDType;
    }

    /**
     * @param mixed $institutionIDType
     *
     * @return ResearchDatasetContributor
     */
    public function setInstitutionIDType($institutionIDType)
    {
        $this->institutionIDType = $institutionIDType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     *
     * @return ResearchDatasetContributor
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

}