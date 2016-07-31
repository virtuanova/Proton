<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ProjectMilestone as BaseProjectMilestone;

/**
 * ProjectMilestone
 *
 * @ORM\Table(name="project_milestone")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ProjectMilestoneRepository")
 */
class ProjectMilestone extends BaseProjectMilestone
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
     * @ORM\Column(name="milestone_dependency", type="string", length=255, nullable=true, unique=false)
     */
    protected $milestoneDependency;

    /**
     * @var string
     *
     * @ORM\Column(name="milestone_description", type="string", length=255, nullable=true, unique=false)
     */
    protected $milestoneDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="milestone_end_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $milestoneEndDate;

    /**
     * @var string
     *
     * @ORM\Column(name="milestone_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $milestoneID;

    /**
     * @var string
     *
     * @ORM\Column(name="milestone_quarter", type="string", length=255, nullable=true, unique=false)
     */
    protected $milestoneQuarter;

    /**
     * @var string
     *
     * @ORM\Column(name="milestone_start_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $milestoneStartDate;

    /**
     * @var string
     *
     * @ORM\Column(name="milestone_year", type="string", length=255, nullable=true, unique=false)
     */
    protected $milestoneYear;

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