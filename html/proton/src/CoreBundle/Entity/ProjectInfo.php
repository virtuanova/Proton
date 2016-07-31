<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ProjectInfo as BaseProjectInfo;

/**
 * ProjectInfo
 *
 * @ORM\Table(name="project_info")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ProjectInfoRepository")
 */
class ProjectInfo extends BaseProjectInfo
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
     * @ORM\Column(name="activity_description", type="string", length=255, nullable=true, unique=false)
     */
    protected $activityDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="activity_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $activityID;

    /**
     * @var string
     *
     * @ORM\Column(name="activity_long_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $activityLongTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="activity_parent_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $activityParentID;

    /**
     * @var string
     *
     * @ORM\Column(name="activity_short_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $activityShortTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="activity_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $activityType;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=255, nullable=true, unique=false)
     */
    protected $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="temporal_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $temporalClassification;

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