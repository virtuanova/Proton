<?php

namespace CoreDomain\Objects;


/**
 * Class Invention
 * @package CoreDomain\Objects
 */
class Invention extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $audienceType;
    /**
     * @var
     */
    protected $description;
    /**
     * @var
     */
    protected $releaseDate;

    /**
     * @return mixed
     */
    public function getAudienceType()
    {
        return $this->audienceType;
    }

    /**
     * @param mixed $audienceType
     *
     * @return Invention
     */
    public function setAudienceType($audienceType)
    {
        $this->audienceType = $audienceType;
        return $this;
    }

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
     * @return Invention
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param mixed $releaseDate
     *
     * @return Invention
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

}