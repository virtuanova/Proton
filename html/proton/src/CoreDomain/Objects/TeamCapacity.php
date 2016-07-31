<?php

namespace CoreDomain\Objects;


/**
 * Class TeamCapacity
 * @package CoreDomain\Objects
 */
class TeamCapacity extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $teamApproach;
    /**
     * @var
     */
    protected $teamCollaborativeCapacity;
    /**
     * @var
     */
    protected $teamInnovationLeverage;
    /**
     * @var
     */
    protected $teamKMLeadershipRating;
    /**
     * @var
     */
    protected $teamOutputCapacity;
    /**
     * @var
     */
    protected $teamPreviousSuccessLinks;
    /**
     * @var
     */
    protected $teamRelevance;
    /**
     * @var
     */
    protected $teamTrainingCapacity;

    /**
     * @return mixed
     */
    public function getTeamApproach()
    {
        return $this->teamApproach;
    }

    /**
     * @param mixed $teamApproach
     *
     * @return TeamCapacity
     */
    public function setTeamApproach($teamApproach)
    {
        $this->teamApproach = $teamApproach;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTeamCollaborativeCapacity()
    {
        return $this->teamCollaborativeCapacity;
    }

    /**
     * @param mixed $teamCollaborativeCapacity
     *
     * @return TeamCapacity
     */
    public function setTeamCollaborativeCapacity($teamCollaborativeCapacity)
    {
        $this->teamCollaborativeCapacity = $teamCollaborativeCapacity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTeamInnovationLeverage()
    {
        return $this->teamInnovationLeverage;
    }

    /**
     * @param mixed $teamInnovationLeverage
     *
     * @return TeamCapacity
     */
    public function setTeamInnovationLeverage($teamInnovationLeverage)
    {
        $this->teamInnovationLeverage = $teamInnovationLeverage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTeamKMLeadershipRating()
    {
        return $this->teamKMLeadershipRating;
    }

    /**
     * @param mixed $teamKMLeadershipRating
     *
     * @return TeamCapacity
     */
    public function setTeamKMLeadershipRating($teamKMLeadershipRating)
    {
        $this->teamKMLeadershipRating = $teamKMLeadershipRating;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTeamOutputCapacity()
    {
        return $this->teamOutputCapacity;
    }

    /**
     * @param mixed $teamOutputCapacity
     *
     * @return TeamCapacity
     */
    public function setTeamOutputCapacity($teamOutputCapacity)
    {
        $this->teamOutputCapacity = $teamOutputCapacity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTeamPreviousSuccessLinks()
    {
        return $this->teamPreviousSuccessLinks;
    }

    /**
     * @param mixed $teamPreviousSuccessLinks
     *
     * @return TeamCapacity
     */
    public function setTeamPreviousSuccessLinks($teamPreviousSuccessLinks)
    {
        $this->teamPreviousSuccessLinks = $teamPreviousSuccessLinks;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTeamRelevance()
    {
        return $this->teamRelevance;
    }

    /**
     * @param mixed $teamRelevance
     *
     * @return TeamCapacity
     */
    public function setTeamRelevance($teamRelevance)
    {
        $this->teamRelevance = $teamRelevance;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTeamTrainingCapacity()
    {
        return $this->teamTrainingCapacity;
    }

    /**
     * @param mixed $teamTrainingCapacity
     *
     * @return TeamCapacity
     */
    public function setTeamTrainingCapacity($teamTrainingCapacity)
    {
        $this->teamTrainingCapacity = $teamTrainingCapacity;
        return $this;
    }

}