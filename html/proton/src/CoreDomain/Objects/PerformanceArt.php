<?php

namespace CoreDomain\Objects;


/**
 * Class PerformanceArt
 * @package CoreDomain\Objects
 */
class PerformanceArt extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $dateofSubsequentPerformance;
    /**
     * @var
     */
    protected $keyCollaborators;
    /**
     * @var
     */
    protected $performanceDate;
    /**
     * @var
     */
    protected $performanceTitle;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $venue;

    /**
     * @return mixed
     */
    public function getDateofSubsequentPerformance()
    {
        return $this->dateofSubsequentPerformance;
    }

    /**
     * @param mixed $dateofSubsequentPerformance
     *
     * @return PerformanceArt
     */
    public function setDateofSubsequentPerformance($dateofSubsequentPerformance)
    {
        $this->dateofSubsequentPerformance = $dateofSubsequentPerformance;
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
     *
     * @return PerformanceArt
     */
    public function setKeyCollaborators($keyCollaborators)
    {
        $this->keyCollaborators = $keyCollaborators;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerformanceDate()
    {
        return $this->performanceDate;
    }

    /**
     * @param mixed $performanceDate
     *
     * @return PerformanceArt
     */
    public function setPerformanceDate($performanceDate)
    {
        $this->performanceDate = $performanceDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerformanceTitle()
    {
        return $this->performanceTitle;
    }

    /**
     * @param mixed $performanceTitle
     *
     * @return PerformanceArt
     */
    public function setPerformanceTitle($performanceTitle)
    {
        $this->performanceTitle = $performanceTitle;
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
     * @return PerformanceArt
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * @param mixed $venue
     *
     * @return PerformanceArt
     */
    public function setVenue($venue)
    {
        $this->venue = $venue;
        return $this;
    }

}