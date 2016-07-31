<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\MusicalComposition as BaseMusicalComposition;

/**
 * MusicalComposition
 *
 * @ORM\Table(name="musical_composition")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\MusicalCompositionRepository")
 */
class MusicalComposition extends BaseMusicalComposition
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
     * @ORM\Column(name="coComposers", type="string", length=255, nullable=true, unique=false)
     */
    protected $coComposers;

    /**
     * @var string
     *
     * @ORM\Column(name="duration", type="string", length=255, nullable=true, unique=false)
     */
    protected $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="instrumentation", type="string", length=255, nullable=true, unique=false)
     */
    protected $instrumentation;

    /**
     * @var string
     *
     * @ORM\Column(name="numberof_pages", type="string", length=255, nullable=true, unique=false)
     */
    protected $numberofPages;

    /**
     * @var string
     *
     * @ORM\Column(name="publisher", type="string", length=255, nullable=true, unique=false)
     */
    protected $publisher;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true, unique=false)
     */
    protected $title;

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

