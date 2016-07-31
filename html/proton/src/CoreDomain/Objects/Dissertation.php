<?php

namespace CoreDomain\Objects;


/**
 * Class Dissertation
 * @package CoreDomain\Objects
 */
class Dissertation extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $completionDate;
    /**
     * @var
     */
    protected $degreeType;
    /**
     * @var
     */
    protected $institution;
    /**
     * @var
     */
    protected $pubmedID;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $supervisorFirstName;
    /**
     * @var
     */
    protected $supervisorLastName;
    /**
     * @var
     */
    protected $title;
    /**
     * @var
     */
    protected $uRL;
    /**
     * @var
     */
    protected $volume;

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
     * @return Dissertation
     */
    public function setCompletionDate($completionDate)
    {
        $this->completionDate = $completionDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDegreeType()
    {
        return $this->degreeType;
    }

    /**
     * @param mixed $degreeType
     *
     * @return Dissertation
     */
    public function setDegreeType($degreeType)
    {
        $this->degreeType = $degreeType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * @param mixed $institution
     *
     * @return Dissertation
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPubmedID()
    {
        return $this->pubmedID;
    }

    /**
     * @param mixed $pubmedID
     *
     * @return Dissertation
     */
    public function setPubmedID($pubmedID)
    {
        $this->pubmedID = $pubmedID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResearchClassification()
    {
        return $this->researchClassification;
    }

    /**
     * @param mixed $researchClassification
     *
     * @return Dissertation
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupervisorFirstName()
    {
        return $this->supervisorFirstName;
    }

    /**
     * @param mixed $supervisorFirstName
     *
     * @return Dissertation
     */
    public function setSupervisorFirstName($supervisorFirstName)
    {
        $this->supervisorFirstName = $supervisorFirstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupervisorLastName()
    {
        return $this->supervisorLastName;
    }

    /**
     * @param mixed $supervisorLastName
     *
     * @return Dissertation
     */
    public function setSupervisorLastName($supervisorLastName)
    {
        $this->supervisorLastName = $supervisorLastName;
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
     * @return Dissertation
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
     *
     * @return Dissertation
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param mixed $volume
     *
     * @return Dissertation
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }

}