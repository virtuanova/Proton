<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\Book as BaseBook;

/**
 * Book
 *
 * @ORM\Table(name="book")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\BookRepository")
 */
class Book extends BaseBook
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
     * @ORM\Column(name="co_Authors_editors", type="string", length=255, nullable=true, unique=false)
     */
    protected $coAuthorsEditors;

    /**
     * @var string
     *
     * @ORM\Column(name="edition", type="string", length=255, nullable=true, unique=false)
     */
    protected $edition;

    /**
     * @var string
     *
     * @ORM\Column(name="first_listed_author_editor", type="string", length=255, nullable=true, unique=false)
     */
    protected $firstListedAuthorEditor;

    /**
     * @var string
     *
     * @ORM\Column(name="number_of_pages", type="string", length=255, nullable=true, unique=false)
     */
    protected $numberofPages;

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

