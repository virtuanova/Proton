<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ProjectHQPTraining as BaseProjectHQPTraining;

/**
 * ProjectHQPTraining
 *
 * @ORM\Table(name="project_hqp_training")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ProjectHQPTrainingRepository")
 */
class ProjectHQPTraining extends BaseProjectHQPTraining
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
     * @ORM\Column(name="percentage_training_time", type="string", length=255, nullable=true, unique=false)
     */
    protected $percentageTrainingTime;

    /**
     * @var string
     *
     * @ORM\Column(name="trainee_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $traineeName;

    /**
     * @var string
     *
     * @ORM\Column(name="trainee_position", type="string", length=255, nullable=true, unique=false)
     */
    protected $traineePosition;

    /**
     * @var string
     *
     * @ORM\Column(name="trainee_role_description", type="string", length=255, nullable=true, unique=false)
     */
    protected $traineeRoleDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="training_attributes", type="string", length=255, nullable=true, unique=false)
     */
    protected $trainingAttributes;

    /**
     * @var string
     *
     * @ORM\Column(name="training_duration", type="string", length=255, nullable=true, unique=false)
     */
    protected $trainingDuration;

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