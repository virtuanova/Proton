<?php

namespace CoreDomain\Objects;


/**
 * Class DataSet
 * @package CoreDomain\Objects
 */
class DataSet extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $description;
    /**
     * @var
     */
    protected $locationLodged;
    /**
     * @var
     */
    protected $primaryUsers;
    /**
     * @var
     */
    protected $title;

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     *
     * @return DataSet
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocationLodged()
    {
        return $this->locationLodged;
    }

    /**
     * @param mixed $locationLodged
     *
     * @return DataSet
     */
    public function setLocationLodged($locationLodged)
    {
        $this->locationLodged = $locationLodged;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrimaryUsers()
    {
        return $this->primaryUsers;
    }

    /**
     * @param mixed $primaryUsers
     *
     * @return DataSet
     */
    public function setPrimaryUsers($primaryUsers)
    {
        $this->primaryUsers = $primaryUsers;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     *
     * @return DataSet
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

}