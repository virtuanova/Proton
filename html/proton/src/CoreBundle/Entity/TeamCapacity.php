<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\TeamCapacity as BaseTeamCapcity;
/**
 * TeamCapacity
 *
 * @ORM\Table(name="team_capacity")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\TeamCapacityRepository")
 */
class TeamCapacity extends BaseTeamCapcity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="proj_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $projId;

    /**
     * @var string
     *
     * @ORM\Column(name="team_approach", type="string", length=255, nullable=true, unique=false)
     */
    protected $teamApproach;

    /**
     * @var string
     *
     * @ORM\Column(name="team_collaborative_capacity", type="string", length=255, nullable=true, unique=false)
     */
    protected $teamCollaborativeCapacity;

    /**
     * @var string
     *
     * @ORM\Column(name="team_innovation_leverage", type="string", length=255, nullable=true, unique=false)
     */
    protected $teamInnovationLeverage;

    /**
     * @var string
     *
     * @ORM\Column(name="team_kmleadership_rating", type="string", length=255, nullable=true, unique=false)
     */
    protected $teamKMLeadershipRating;

    /**
     * @var string
     *
     * @ORM\Column(name="team_output_capacity", type="string", length=255, nullable=true, unique=false)
     */
    protected $teamOutputCapacity;

    /**
     * @var string
     *
     * @ORM\Column(name="team_previous_success_links", type="string", length=255, nullable=true, unique=false)
     */
    protected $teamPreviousSuccessLinks;

    /**
     * @var string
     *
     * @ORM\Column(name="team_relevance", type="string", length=255, nullable=true, unique=false)
     */
    protected $teamRelevance;

    /**
     * @var string
     *
     * @ORM\Column(name="team_training_capacity", type="string", length=255, nullable=true, unique=false)
     */
    protected $teamTrainingCapacity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_updated_at", type="datetime")
     */
    protected $lastUpdatedAt;

}