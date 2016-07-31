<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ProjectRisk as BaseProjectRisk;

/**
 * ProjectRisk
 *
 * @ORM\Table(name="project_risk")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ProjectRiskRepository")
 */
class ProjectRisk extends BaseProjectRisk
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
     * @ORM\Column(name="milestone_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $milestoneID;

    /**
     * @var string
     *
     * @ORM\Column(name="risk_impact", type="string", length=255, nullable=true, unique=false)
     */
    protected $riskImpact;

    /**
     * @var string
     *
     * @ORM\Column(name="risk_mitigation_strategy", type="string", length=255, nullable=true, unique=false)
     */
    protected $riskMitigationStrategy;

    /**
     * @var string
     *
     * @ORM\Column(name="risk_monitoring_strategy", type="string", length=255, nullable=true, unique=false)
     */
    protected $riskMonitoringStrategy;

    /**
     * @var string
     *
     * @ORM\Column(name="risk_probability", type="string", length=255, nullable=true, unique=false)
     */
    protected $riskProbability;

    /**
     * @var string
     *
     * @ORM\Column(name="risk_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $riskType;

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