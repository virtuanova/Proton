<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\JournalIssue as BaseJournalIssue;

/**
 * JournalIssue
 *
 * @ORM\Table(name="journal_issue")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\JournalIssueRepository")
 */
class JournalIssue extends BaseJournalIssue
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
     * @ORM\Column(name="co_editors", type="string", length=255, nullable=true, unique=false)
     */
    protected $coEditors;

    /**
     * @var string
     *
     * @ORM\Column(name="first_listed_editor", type="string", length=255, nullable=true, unique=false)
     */
    protected $firstListedEditor;

    /**
     * @var string
     *
     * @ORM\Column(name="issue_number", type="string", length=255, nullable=true, unique=false)
     */
    protected $issueNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="issue_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $issueTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="journal", type="string", length=255, nullable=true, unique=false)
     */
    protected $journal;

    /**
     * @var string
     *
     * @ORM\Column(name="numberof_pages", type="string", length=255, nullable=true, unique=false)
     */
    protected $numberofPages;

    /**
     * @var string
     *
     * @ORM\Column(name="publication_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $publicationDate;

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
     * @ORM\Column(name="pubmed_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $pubmedID;

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