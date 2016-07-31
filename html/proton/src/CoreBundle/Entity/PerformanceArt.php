<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\PerformanceArt as BasePerformanceArt;
/**
 * PerformanceArt
 *
 * @ORM\Table(name="performance_art")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\PerformanceArtRepository")
 */
class PerformanceArt extends BasePerformanceArt
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
     * @ORM\Column(name="dateof_subsequent_performance", type="string", length=255, nullable=true, unique=false)
     */
    protected $dateofSubsequentPerformance;

    /**
     * @var string
     *
     * @ORM\Column(name="key_collaborators", type="string", length=255, nullable=true, unique=false)
     */
    protected $keyCollaborators;

    /**
     * @var string
     *
     * @ORM\Column(name="performance_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $performanceDate;

    /**
     * @var string
     *
     * @ORM\Column(name="performance_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $performanceTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="venue", type="string", length=255, nullable=true, unique=false)
     */
    protected $venue;

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