<?php

namespace CoreDomain\Objects;


/**
 * Class Reviewer
 * @package CoreDomain\Objects
 */
class Reviewer extends BaseObjectInterface
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
    protected $id;
    /**
     * @var
     */
    protected $IdType;
    /**
     * @var
     */
    protected $middleName;
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
     * @return Reviewer
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
     * @return Reviewer
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return Reviewer
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdType()
    {
        return $this->IdType;
    }

    /**
     * @param mixed $IdType
     *
     * @return Reviewer
     */
    public function setIdType($IdType)
    {
        $this->IdType = $IdType;
        return $this;
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
     *
     * @return Reviewer
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
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
     * @return Reviewer
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

}