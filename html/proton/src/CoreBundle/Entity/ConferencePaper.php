<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ConferencePaper as BaseConferencePaper;
/**
 * ConferencePaper
 *
 * @ORM\Table(name="conference_paper")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ConferencePaperRepository")
 */
class ConferencePaper extends BaseConferencePaper
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
     * @ORM\Column(name="authoring_role", type="string", length=255, nullable=true, unique=false)
     */
    protected $authoringRole;

    /**
     * @var string
     *
     * @ORM\Column(name="coAuthors", type="string", length=255, nullable=true, unique=false)
     */
    protected $coAuthors;

    /**
     * @var string
     *
     * @ORM\Column(name="coPresenters", type="string", length=255, nullable=true, unique=false)
     */
    protected $coPresenters;

    /**
     * @var string
     *
     * @ORM\Column(name="competitive", type="string", length=255, nullable=true, unique=false)
     */
    protected $competitive;

    /**
     * @var string
     *
     * @ORM\Column(name="conference_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $conferenceDate;

    /**
     * @var string
     *
     * @ORM\Column(name="conference_location", type="string", length=255, nullable=true, unique=false)
     */
    protected $conferenceLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="conference_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $conferenceName;

    /**
     * @var string
     *
     * @ORM\Column(name="first_listed_author", type="string", length=255, nullable=true, unique=false)
     */
    protected $firstListedAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="invited", type="string", length=255, nullable=true, unique=false)
     */
    protected $invited;

    /**
     * @var string
     *
     * @ORM\Column(name="key_note", type="string", length=255, nullable=true, unique=false)
     */
    protected $keyNote;

    /**
     * @var string
     *
     * @ORM\Column(name="page_range_from", type="string", length=255, nullable=true, unique=false)
     */
    protected $pageRangeFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="page_range_to", type="string", length=255, nullable=true, unique=false)
     */
    protected $pageRangeTo;

    /**
     * @var string
     *
     * @ORM\Column(name="paper_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $paperTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $presentationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="proceedings_editors", type="string", length=255, nullable=true, unique=false)
     */
    protected $proceedingsEditors;

    /**
     * @var string
     *
     * @ORM\Column(name="proceedings_publisher", type="string", length=255, nullable=true, unique=false)
     */
    protected $proceedingsPublisher;

    /**
     * @var string
     *
     * @ORM\Column(name="proceedings_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $proceedingsTitle;

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
     * @ORM\Column(name="published", type="string", length=255, nullable=true, unique=false)
     */
    protected $published;

    /**
     * @var string
     *
     * @ORM\Column(name="refereed", type="string", length=255, nullable=true, unique=false)
     */
    protected $refereed;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

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

