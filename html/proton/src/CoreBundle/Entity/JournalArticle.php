<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\JournalArticle as BaseJournalArticle;
/**
 * JournalArticle
 *
 * @ORM\Table(name="journal_article")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\JournalArticleRepository")
 */
class JournalArticle extends BaseJournalArticle
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
     * @ORM\Column(name="article_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $articleTitle;

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
     * @ORM\Column(name="d_oi", type="string", length=255, nullable=true, unique=false)
     */
    protected $dOI;

    /**
     * @var string
     *
     * @ORM\Column(name="final_acceptance_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $finalAcceptanceDate;

    /**
     * @var string
     *
     * @ORM\Column(name="first_listed_author", type="string", length=255, nullable=true, unique=false)
     */
    protected $firstListedAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="i_ssn", type="string", length=255, nullable=true, unique=false)
     */
    protected $iSSN;

    /**
     * @var string
     *
     * @ORM\Column(name="issue", type="string", length=255, nullable=true, unique=false)
     */
    protected $issue;

    /**
     * @var string
     *
     * @ORM\Column(name="journal", type="string", length=255, nullable=true, unique=false)
     */
    protected $journal;

    /**
     * @var string
     *
     * @ORM\Column(name="n_ihmanuscript_number", type="string", length=255, nullable=true, unique=false)
     */
    protected $nIHManuscriptNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="open_access_ref1", type="string", length=255, nullable=true, unique=false)
     */
    protected $openAccessRef1;

    /**
     * @var string
     *
     * @ORM\Column(name="open_access_ref2", type="string", length=255, nullable=true, unique=false)
     */
    protected $openAccessRef2;

    /**
     * @var string
     *
     * @ORM\Column(name="open_access", type="string", length=255, nullable=true, unique=false)
     */
    protected $openAccess;

    /**
     * @var string
     *
     * @ORM\Column(name="p_mcid", type="string", length=255, nullable=true, unique=false)
     */
    protected $pMCID;

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
     * @ORM\Column(name="provisional_acceptance_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $provisionalAcceptanceDate;

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
     * @ORM\Column(name="publisher_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $publisherID;

    /**
     * @var string
     *
     * @ORM\Column(name="publisher_idtype", type="string", length=255, nullable=true, unique=false)
     */
    protected $publisherIDType;

    /**
     * @var string
     *
     * @ORM\Column(name="publisher_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $publisherName;

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

