<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ExhibitionCatalogue as BaseExhibitionCatalogue;
/**
 * ExhibitionCatalogue
 *
 * @ORM\Table(name="exhibition_catalogue")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ExhibitionCatalogueRepository")
 */
class ExhibitionCatalogue extends BaseExhibitionCatalogue
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
     * @ORM\Column(name="artists", type="string", length=255, nullable=true, unique=false)
     */
    protected $artists;

    /**
     * @var string
     *
     * @ORM\Column(name="galleryor_publisher", type="string", length=255, nullable=true, unique=false)
     */
    protected $galleryorPublisher;

    /**
     * @var string
     *
     * @ORM\Column(name="numberof_pages", type="string", length=255, nullable=true, unique=false)
     */
    protected $numberofPages;

    /**
     * @var string
     *
     * @ORM\Column(name="publication_year", type="string", length=255, nullable=true, unique=false)
     */
    protected $publicationYear;

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


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userId
     *
     * @param string $userId
     *
     * @return ExhibitionCatalogue
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set projId
     *
     * @param string $projId
     *
     * @return ExhibitionCatalogue
     */
    public function setProjId($projId)
    {
        $this->projId = $projId;

        return $this;
    }

    /**
     * Get projId
     *
     * @return string
     */
    public function getProjId()
    {
        return $this->projId;
    }

    /**
     * Set artists
     *
     * @param string $artists
     *
     * @return ExhibitionCatalogue
     */
    public function setArtists($artists)
    {
        $this->artists = $artists;

        return $this;
    }

    /**
     * Get artists
     *
     * @return string
     */
    public function getArtists()
    {
        return $this->artists;
    }

    /**
     * Set galleryorPublisher
     *
     * @param string $galleryorPublisher
     *
     * @return ExhibitionCatalogue
     */
    public function setGalleryorPublisher($galleryorPublisher)
    {
        $this->galleryorPublisher = $galleryorPublisher;

        return $this;
    }

    /**
     * Get galleryorPublisher
     *
     * @return string
     */
    public function getGalleryorPublisher()
    {
        return $this->galleryorPublisher;
    }

    /**
     * Set numberofPages
     *
     * @param string $numberofPages
     *
     * @return ExhibitionCatalogue
     */
    public function setNumberofPages($numberofPages)
    {
        $this->numberofPages = $numberofPages;

        return $this;
    }

    /**
     * Get numberofPages
     *
     * @return string
     */
    public function getNumberofPages()
    {
        return $this->numberofPages;
    }

    /**
     * Set publicationYear
     *
     * @param string $publicationYear
     *
     * @return ExhibitionCatalogue
     */
    public function setPublicationYear($publicationYear)
    {
        $this->publicationYear = $publicationYear;

        return $this;
    }

    /**
     * Get publicationYear
     *
     * @return string
     */
    public function getPublicationYear()
    {
        return $this->publicationYear;
    }

    /**
     * Set researchClassification
     *
     * @param string $researchClassification
     *
     * @return ExhibitionCatalogue
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;

        return $this;
    }

    /**
     * Get researchClassification
     *
     * @return string
     */
    public function getResearchClassification()
    {
        return $this->researchClassification;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return ExhibitionCatalogue
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return ExhibitionCatalogue
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set lastUpdatedAt
     *
     * @param \DateTime $lastUpdatedAt
     *
     * @return ExhibitionCatalogue
     */
    public function setLastUpdatedAt($lastUpdatedAt)
    {
        $this->lastUpdatedAt = $lastUpdatedAt;

        return $this;
    }

    /**
     * Get lastUpdatedAt
     *
     * @return \DateTime
     */
    public function getLastUpdatedAt()
    {
        return $this->lastUpdatedAt;
    }
}

