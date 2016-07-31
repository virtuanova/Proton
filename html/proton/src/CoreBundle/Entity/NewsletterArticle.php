<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\NewsletterArticle as BaseNewsletterArticle;
/**
 * NewsletterArticle
 *
 * @ORM\Table(name="newsletter_article")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\NewsletterArticleRepository")
 */
class NewsletterArticle extends BaseNewsletterArticle
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
     * @ORM\Column(name="coAuthors", type="string", length=255, nullable=true, unique=false)
     */
    protected $coAuthors;

    /**
     * @var string
     *
     * @ORM\Column(name="first_listed_author", type="string", length=255, nullable=true, unique=false)
     */
    protected $firstListedAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="issue", type="string", length=255, nullable=true, unique=false)
     */
    protected $issue;

    /**
     * @var string
     *
     * @ORM\Column(name="newsletter", type="string", length=255, nullable=true, unique=false)
     */
    protected $newsletter;

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
     * @return NewsletterArticle
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
     * @return NewsletterArticle
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
     * Set articleTitle
     *
     * @param string $articleTitle
     *
     * @return NewsletterArticle
     */
    public function setArticleTitle($articleTitle)
    {
        $this->articleTitle = $articleTitle;

        return $this;
    }

    /**
     * Get articleTitle
     *
     * @return string
     */
    public function getArticleTitle()
    {
        return $this->articleTitle;
    }

    /**
     * Set coAuthors
     *
     * @param string $coAuthors
     *
     * @return NewsletterArticle
     */
    public function setCoAuthors($coAuthors)
    {
        $this->coAuthors = $coAuthors;

        return $this;
    }

    /**
     * Get coAuthors
     *
     * @return string
     */
    public function getCoAuthors()
    {
        return $this->coAuthors;
    }

    /**
     * Set firstListedAuthor
     *
     * @param string $firstListedAuthor
     *
     * @return NewsletterArticle
     */
    public function setFirstListedAuthor($firstListedAuthor)
    {
        $this->firstListedAuthor = $firstListedAuthor;

        return $this;
    }

    /**
     * Get firstListedAuthor
     *
     * @return string
     */
    public function getFirstListedAuthor()
    {
        return $this->firstListedAuthor;
    }

    /**
     * Set issue
     *
     * @param string $issue
     *
     * @return NewsletterArticle
     */
    public function setIssue($issue)
    {
        $this->issue = $issue;

        return $this;
    }

    /**
     * Get issue
     *
     * @return string
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * Set newsletter
     *
     * @param string $newsletter
     *
     * @return NewsletterArticle
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return string
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set pageRangeFrom
     *
     * @param string $pageRangeFrom
     *
     * @return NewsletterArticle
     */
    public function setPageRangeFrom($pageRangeFrom)
    {
        $this->pageRangeFrom = $pageRangeFrom;

        return $this;
    }

    /**
     * Get pageRangeFrom
     *
     * @return string
     */
    public function getPageRangeFrom()
    {
        return $this->pageRangeFrom;
    }

    /**
     * Set pageRangeTo
     *
     * @param string $pageRangeTo
     *
     * @return NewsletterArticle
     */
    public function setPageRangeTo($pageRangeTo)
    {
        $this->pageRangeTo = $pageRangeTo;

        return $this;
    }

    /**
     * Get pageRangeTo
     *
     * @return string
     */
    public function getPageRangeTo()
    {
        return $this->pageRangeTo;
    }

    /**
     * Set publicationDate
     *
     * @param string $publicationDate
     *
     * @return NewsletterArticle
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    /**
     * Get publicationDate
     *
     * @return string
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * Set publicationLocation
     *
     * @param string $publicationLocation
     *
     * @return NewsletterArticle
     */
    public function setPublicationLocation($publicationLocation)
    {
        $this->publicationLocation = $publicationLocation;

        return $this;
    }

    /**
     * Get publicationLocation
     *
     * @return string
     */
    public function getPublicationLocation()
    {
        return $this->publicationLocation;
    }

    /**
     * Set researchClassification
     *
     * @param string $researchClassification
     *
     * @return NewsletterArticle
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
     * Set url
     *
     * @param string $url
     *
     * @return NewsletterArticle
     */
    public function setURL($url)
    {
        $this->url= $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getURL()
    {
        return $this->url;
    }

    /**
     * Set volume
     *
     * @param string $volume
     *
     * @return NewsletterArticle
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get volume
     *
     * @return string
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return NewsletterArticle
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
     * @return NewsletterArticle
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

