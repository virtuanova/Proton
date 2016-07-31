<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\BookReview as BaseBookReview;
/**
 * BookReview
 *
 * @ORM\Table(name="book_review")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\BookReviewRepository")
 */
class BookReview extends BaseBookReview
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
     * @ORM\Column(name="book_edition", type="string", length=255, nullable=true, unique=false)
     */
    protected $bookEdition;

    /**
     * @var string
     *
     * @ORM\Column(name="book_publication_location", type="string", length=255, nullable=true, unique=false)
     */
    protected $bookPublicationLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="book_publication_year", type="string", length=255, nullable=true, unique=false)
     */
    protected $bookPublicationYear;

    /**
     * @var string
     *
     * @ORM\Column(name="book_refereed", type="string", length=255, nullable=true, unique=false)
     */
    protected $bookRefereed;

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
     * @ORM\Column(name="coAuthors", type="string", length=255, nullable=true, unique=false)
     */
    protected $coAuthors;

    /**
     * @var string
     *
     * @ORM\Column(name="date_of_review_publication", type="datetimetz", nullable=true, unique=false)
     */
    protected $dateofReviewPublication;

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
     * @ORM\Column(name="publication_status", type="string", length=255, nullable=true, unique=false)
     */
    protected $publicationStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="published_in", type="string", length=255, nullable=true, unique=false)
     */
    protected $publishedIn;

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
     * @ORM\Column(name="review_issue", type="string", length=255, nullable=true, unique=false)
     */
    protected $reviewIssue;

    /**
     * @var string
     *
     * @ORM\Column(name="review_publication", type="string", length=255, nullable=true, unique=false)
     */
    protected $reviewPublication;

    /**
     * @var string
     *
     * @ORM\Column(name="review_publisher", type="string", length=255, nullable=true, unique=false)
     */
    protected $reviewPublisher;

    /**
     * @var string
     *
     * @ORM\Column(name="review_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $reviewTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="review_volume", type="string", length=255, nullable=true, unique=false)
     */
    protected $reviewVolume;

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

