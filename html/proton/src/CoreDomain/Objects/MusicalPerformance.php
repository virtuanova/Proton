<?php

namespace CoreDomain\Objects;


/**
 * Class MusicalPerformance
 * @package CoreDomain\Objects
 */
class MusicalPerformance extends BaseObjectInterface
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
    protected $performanceRole;
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
     *
     * @return MusicalPerformance
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
     *
     * @return MusicalPerformance
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
     *
     * @return MusicalPerformance
     */
    public function setDateofSubsequentPerformance($dateofSubsequentPerformance)
    {
        $this->dateofSubsequentPerformance = $dateofSubsequentPerformance;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerformanceRole()
    {
        return $this->performanceRole;
    }

    /**
     * @param mixed $performanceRole
     *
     * @return MusicalPerformance
     */
    public function setPerformanceRole($performanceRole)
    {
        $this->performanceRole = $performanceRole;
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
     * @return MusicalPerformance
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
     *
     * @return MusicalPerformance
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
     *
     * @return MusicalPerformance
     */
    public function setVenue($venue)
    {
        $this->venue = $venue;
        return $this;
    }

}