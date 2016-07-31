<?php

namespace CoreDomain\Objects;


/**
 * Class Choreography
 * @package CoreDomain\Objects
 */
class Choreography extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $company;
    /**
     * @var
     */
    protected $composer;
    /**
     * @var
     */
    protected $keyCollaborators;
    /**
     * @var
     */
    protected $majorPerformanceDates;
    /**
     * @var
     */
    protected $mediaReleaseDates;
    /**
     * @var
     */
    protected $premierDate;
    /**
     * @var
     */
    protected $principalDancers;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $showTitle;

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     * @return Choreography
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getComposer()
    {
        return $this->composer;
    }

    /**
     * @param mixed $composer
     * @return Choreography
     */
    public function setComposer($composer)
    {
        $this->composer = $composer;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKeyCollaborators()
    {
        return $this->keyCollaborators;
    }

    /**
     * @param mixed $keyCollaborators
     * @return Choreography
     */
    public function setKeyCollaborators($keyCollaborators)
    {
        $this->keyCollaborators = $keyCollaborators;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMajorPerformanceDates()
    {
        return $this->majorPerformanceDates;
    }

    /**
     * @param mixed $majorPerformanceDates
     * @return Choreography
     */
    public function setMajorPerformanceDates($majorPerformanceDates)
    {
        $this->majorPerformanceDates = $majorPerformanceDates;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMediaReleaseDates()
    {
        return $this->mediaReleaseDates;
    }

    /**
     * @param mixed $mediaReleaseDates
     * @return Choreography
     */
    public function setMediaReleaseDates($mediaReleaseDates)
    {
        $this->mediaReleaseDates = $mediaReleaseDates;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPremierDate()
    {
        return $this->premierDate;
    }

    /**
     * @param mixed $premierDate
     * @return Choreography
     */
    public function setPremierDate($premierDate)
    {
        $this->premierDate = $premierDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrincipalDancers()
    {
        return $this->principalDancers;
    }

    /**
     * @param mixed $principalDancers
     * @return Choreography
     */
    public function setPrincipalDancers($principalDancers)
    {
        $this->principalDancers = $principalDancers;
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
     * @return Choreography
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShowTitle()
    {
        return $this->showTitle;
    }

    /**
     * @param mixed $showTitle
     * @return Choreography
     */
    public function setShowTitle($showTitle)
    {
        $this->showTitle = $showTitle;
        return $this;
    }

}