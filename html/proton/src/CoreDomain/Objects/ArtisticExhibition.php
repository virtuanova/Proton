<?php

namespace CoreDomain\Objects;


/**
 * Class ArtisticExhibition
 * @package CoreDomain\Objects
 */
class ArtisticExhibition extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $collaborators;
    /**
     * @var
     */
    protected $dateofFirstPerformance;
    /**
     * @var
     */
    protected $dateofSubsequentPerformance;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $theTitleofWork;
    /**
     * @var
     */
    protected $venue;

    /**
     * @return mixed
     */
    public function getCollaborators()
    {
        return $this->collaborators;
    }

    /**
     * @param mixed $collaborators
     * @return ArtisticExhibition
     */
    public function setCollaborators($collaborators)
    {
        $this->collaborators = $collaborators;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateofFirstPerformance()
    {
        return $this->dateofFirstPerformance;
    }

    /**
     * @param mixed $dateofFirstPerformance
     * @return ArtisticExhibition
     */
    public function setDateofFirstPerformance($dateofFirstPerformance)
    {
        $this->dateofFirstPerformance = $dateofFirstPerformance;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateofSubsequentPerformance()
    {
        return $this->dateofSubsequentPerformance;
    }

    /**
     * @param mixed $dateofSubsequentPerformance
     * @return ArtisticExhibition
     */
    public function setDateofSubsequentPerformance($dateofSubsequentPerformance)
    {
        $this->dateofSubsequentPerformance = $dateofSubsequentPerformance;
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
     * @return ArtisticExhibition
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTheTitleofWork()
    {
        return $this->theTitleofWork;
    }

    /**
     * @param mixed $theTitleofWork
     * @return ArtisticExhibition
     */
    public function setTheTitleofWork($theTitleofWork)
    {
        $this->theTitleofWork = $theTitleofWork;
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
     * @return ArtisticExhibition
     */
    public function setVenue($venue)
    {
        $this->venue = $venue;
        return $this;
    }

}