<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\BookChapter as BaseBookChapter;
/**
 * BookChapter
 *
 * @ORM\Table(name="book_chapter")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\BookChapterRepository")
 */
class BookChapter extends BaseBookChapter
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
     * @ORM\Column(name="book_edition", type="string", length=255, nullable=true, unique=false)
     */
    protected $bookEdition;

    /**
     * @var string
     *
     * @ORM\Column(name="book_publisher", type="string", length=255, nullable=true, unique=false)
     */
    protected $bookPublisher;

    /**
     * @var string
     *
     * @ORM\Column(name="book_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $bookTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="book_volume", type="string", length=255, nullable=true, unique=false)
     */
    protected $bookVolume;

    /**
     * @var string
     *
     * @ORM\Column(name="chapter_page_range_from", type="string", length=255, nullable=true, unique=false)
     */
    protected $chapterPageRangeFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="chapter_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $chapterTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="chapterpage_range_to", type="string", length=255, nullable=true, unique=false)
     */
    protected $chapterpageRangeTo;

    /**
     * @var string
     *
     * @ORM\Column(name="coAuthorsEditors", type="string", length=255, nullable=true, unique=false)
     */
    protected $coAuthorsEditors;

    /**
     * @var string
     *
     * @ORM\Column(name="first_listed_author", type="string", length=255, nullable=true, unique=false)
     */
    protected $firstListedAuthor;

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

