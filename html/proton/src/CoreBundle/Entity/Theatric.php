<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\Theatric as BaseTheatric;
/**
 * Theatric
 *
 * @ORM\Table(name="theatric")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\TheatricRepository")
 */
class Theatric extends BaseTheatric
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
     * @ORM\Column(name="collaborators", type="string", length=255, nullable=true, unique=false)
     */
    protected $collaborators;

    /**
     * @var string
     *
     * @ORM\Column(name="dateof_first_performance", type="string", length=255, nullable=true, unique=false)
     */
    protected $dateofFirstPerformance;

    /**
     * @var string
     *
     * @ORM\Column(name="dateof_subsequent_performance", type="string", length=255, nullable=true, unique=false)
     */
    protected $dateofSubsequentPerformance;

    /**
     * @var string
     *
     * @ORM\Column(name="producer", type="string", length=255, nullable=true, unique=false)
     */
    protected $producer;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="the_titleof_work", type="string", length=255, nullable=true, unique=false)
     */
    protected $theTitleofWork;

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