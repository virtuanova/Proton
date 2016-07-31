<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\Choreography as BaseChoreography;
/**
 * Choreography
 *
 * @ORM\Table(name="choreography")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ChoreographyRepository")
 */
class Choreography extends BaseChoreography
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
     * @ORM\Column(name="company", type="string", length=255, nullable=true, unique=false)
     */
    protected $company;

    /**
     * @var string
     *
     * @ORM\Column(name="composer", type="string", length=255, nullable=true, unique=false)
     */
    protected $composer;

    /**
     * @var string
     *
     * @ORM\Column(name="key_collaborators", type="string", length=255, nullable=true, unique=false)
     */
    protected $keyCollaborators;

    /**
     * @var string
     *
     * @ORM\Column(name="major_performance_dates", type="datetimetz", nullable=true, unique=false)
     */
    protected $majorPerformanceDates;

    /**
     * @var string
     *
     * @ORM\Column(name="media_release_dates", type="datetimetz", nullable=true, unique=false)
     */
    protected $mediaReleaseDates;

    /**
     * @var string
     *
     * @ORM\Column(name="premier_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $premierDate;

    /**
     * @var string
     *
     * @ORM\Column(name="principal_dancers", type="string", length=255, nullable=true, unique=false)
     */
    protected $principalDancers;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="show_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $showTitle;

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

