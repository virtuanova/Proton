<?php

namespace CoreDomain\Objects;


/**
 * Class Website
 * @package CoreDomain\Objects
 */
class Website extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $description;
    /**
     * @var
     */
    protected $launchDate;
    /**
     * @var
     */
    protected $title;
    /**
     * @var
     */
    protected $uRL;

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return Website
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLaunchDate()
    {
        return $this->launchDate;
    }

    /**
     * @param mixed $launchDate
     * @return Website
     */
    public function setLaunchDate($launchDate)
    {
        $this->launchDate = $launchDate;
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
     * @return Website
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * @return Website
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

}