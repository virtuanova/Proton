<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\Manual as BaseManual;

/**
 * Manual
 *
 * @ORM\Table(name="manual")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ManualRepository")
 */
class Manual extends BaseManual
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
     * @ORM\Column(name="coAuthors", type="string", length=255, nullable=true, unique=false)
     */
    protected $coAuthors;

    /**
     * @var string
     *
     * @ORM\Column(name="edition", type="string", length=255, nullable=true, unique=false)
     */
    protected $edition;

    /**
     * @var string
     *
     * @ORM\Column(name="first_listed_author", type="string", length=255, nullable=true, unique=false)
     */
    protected $firstListedAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="numberof_pages", type="string", length=255, nullable=true, unique=false)
     */
    protected $numberofPages;

    /**
     * @var string
     *
     * @ORM\Column(name="numberof_volumes", type="string", length=255, nullable=true, unique=false)
     */
    protected $numberofVolumes;

    /**
     * @var string
     *
     * @ORM\Column(name="publication_location", type="string", length=255, nullable=true, unique=false)
     */
    protected $publicationLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="publication_status", type="string", length=255, nullable=true, unique=false)
     */
    protected $publicationStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="publication_year", type="string", length=255, nullable=true, unique=false)
     */
    protected $publicationYear;

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
     * @ORM\Column(name="series_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $seriesTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true, unique=false)
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true, unique=false)
     */
    protected $url;

    /**
     * @var string
     *
     * @ORM\Column(name="volume", type="string", length=255, nullable=true, unique=false)
     */
    protected $volume;

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

