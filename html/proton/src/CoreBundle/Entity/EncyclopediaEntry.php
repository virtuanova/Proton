<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\EncyclopediaEntry as BaseEncyclopediaEntry;
/**
 * EncyclopediaEntry
 *
 * @ORM\Table(name="encyclopedia_entry")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\EncyclopediaEntryRepository")
 */
class EncyclopediaEntry extends BaseEncyclopediaEntry
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
     * @ORM\Column(name="coAuthorsEditors", type="string", length=255, nullable=true, unique=false)
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
     * @ORM\Column(name="encyclopaedia_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $encyclopaediaTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="entry_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $entryTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="first_listed_author_editor", type="string", length=255, nullable=true, unique=false)
     */
    protected $firstListedAuthorEditor;

    /**
     * @var string
     *
     * @ORM\Column(name="numberof_volumes", type="string", length=255, nullable=true, unique=false)
     */
    protected $numberofVolumes;

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
     * @return EncyclopediaEntry
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
     * @return EncyclopediaEntry
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
     * Set authoringRole
     *
     * @param string $authoringRole
     *
     * @return EncyclopediaEntry
     */
    public function setAuthoringRole($authoringRole)
    {
        $this->authoringRole = $authoringRole;

        return $this;
    }

    /**
     * Get authoringRole
     *
     * @return string
     */
    public function getAuthoringRole()
    {
        return $this->authoringRole;
    }

    /**
     * Set coAuthorsEditors
     *
     * @param string $coAuthorsEditors
     *
     * @return EncyclopediaEntry
     */
    public function setCoAuthorsEditors($coAuthorsEditors)
    {
        $this->coAuthorsEditors = $coAuthorsEditors;

        return $this;
    }

    /**
     * Get coAuthorsEditors
     *
     * @return string
     */
    public function getCoAuthorsEditors()
    {
        return $this->coAuthorsEditors;
    }

    /**
     * Set edition
     *
     * @param string $edition
     *
     * @return EncyclopediaEntry
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;

        return $this;
    }

    /**
     * Get edition
     *
     * @return string
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Set encyclopaediaTitle
     *
     * @param string $encyclopaediaTitle
     *
     * @return EncyclopediaEntry
     */
    public function setEncyclopaediaTitle($encyclopaediaTitle)
    {
        $this->encyclopaediaTitle = $encyclopaediaTitle;

        return $this;
    }

    /**
     * Get encyclopaediaTitle
     *
     * @return string
     */
    public function getEncyclopaediaTitle()
    {
        return $this->encyclopaediaTitle;
    }

    /**
     * Set entryTitle
     *
     * @param string $entryTitle
     *
     * @return EncyclopediaEntry
     */
    public function setEntryTitle($entryTitle)
    {
        $this->entryTitle = $entryTitle;

        return $this;
    }

    /**
     * Get entryTitle
     *
     * @return string
     */
    public function getEntryTitle()
    {
        return $this->entryTitle;
    }

    /**
     * Set firstListedAuthorEditor
     *
     * @param string $firstListedAuthorEditor
     *
     * @return EncyclopediaEntry
     */
    public function setFirstListedAuthorEditor($firstListedAuthorEditor)
    {
        $this->firstListedAuthorEditor = $firstListedAuthorEditor;

        return $this;
    }

    /**
     * Get firstListedAuthorEditor
     *
     * @return string
     */
    public function getFirstListedAuthorEditor()
    {
        return $this->firstListedAuthorEditor;
    }

    /**
     * Set numberofVolumes
     *
     * @param string $numberofVolumes
     *
     * @return EncyclopediaEntry
     */
    public function setNumberofVolumes($numberofVolumes)
    {
        $this->numberofVolumes = $numberofVolumes;

        return $this;
    }

    /**
     * Get numberofVolumes
     *
     * @return string
     */
    public function getNumberofVolumes()
    {
        return $this->numberofVolumes;
    }

    /**
     * Set pageRangeFrom
     *
     * @param string $pageRangeFrom
     *
     * @return EncyclopediaEntry
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
     * @return EncyclopediaEntry
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
     * Set publicationLocation
     *
     * @param string $publicationLocation
     *
     * @return EncyclopediaEntry
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
     * Set publicationStatus
     *
     * @param string $publicationStatus
     *
     * @return EncyclopediaEntry
     */
    public function setPublicationStatus($publicationStatus)
    {
        $this->publicationStatus = $publicationStatus;

        return $this;
    }

    /**
     * Get publicationStatus
     *
     * @return string
     */
    public function getPublicationStatus()
    {
        return $this->publicationStatus;
    }

    /**
     * Set publisher
     *
     * @param string $publisher
     *
     * @return EncyclopediaEntry
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;

        return $this;
    }

    /**
     * Get publisher
     *
     * @return string
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Set researchClassification
     *
     * @param string $researchClassification
     *
     * @return EncyclopediaEntry
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
     * @return EncyclopediaEntry
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
     * @return EncyclopediaEntry
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
     * @return EncyclopediaEntry
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
     * @return EncyclopediaEntry
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

