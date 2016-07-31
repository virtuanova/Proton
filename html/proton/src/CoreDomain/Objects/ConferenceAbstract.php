<?php

namespace CoreDomain\Objects;


/**
 * Class ConferenceAbstract
 * @package CoreDomain\Objects
 */
class ConferenceAbstract extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $articleTitle;
    /**
     * @var
     */
    protected $authoringRole;
    /**
     * @var
     */
    protected $coauthors;
    /**
     * @var
     */
    protected $conferenceLocation;
    /**
     * @var
     */
    protected $conferenceName;
    /**
     * @var
     */
    protected $firstListedAuthor;
    /**
     * @var
     */
    protected $issue;
    /**
     * @var
     */
    protected $pageRangeFrom;
    /**
     * @var
     */
    protected $pageRangeTo;
    /**
     * @var
     */
    protected $publicationDate;
    /**
     * @var
     */
    protected $publicationStatus;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $volume;

    /**
     * @return mixed
     */
    public function getArticleTitle()
    {
        return $this->articleTitle;
    }

    /**
     * @param mixed $articleTitle
     * @return ConferenceAbstract
     */
    public function setArticleTitle($articleTitle)
    {
        $this->articleTitle = $articleTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthoringRole()
    {
        return $this->authoringRole;
    }

    /**
     * @param mixed $authoringRole
     * @return ConferenceAbstract
     */
    public function setAuthoringRole($authoringRole)
    {
        $this->authoringRole = $authoringRole;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoauthors()
    {
        return $this->coauthors;
    }

    /**
     * @param mixed $coauthors
     * @return ConferenceAbstract
     */
    public function setCoauthors($coauthors)
    {
        $this->coauthors = $coauthors;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConferenceLocation()
    {
        return $this->conferenceLocation;
    }

    /**
     * @param mixed $conferenceLocation
     * @return ConferenceAbstract
     */
    public function setConferenceLocation($conferenceLocation)
    {
        $this->conferenceLocation = $conferenceLocation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConferenceName()
    {
        return $this->conferenceName;
    }

    /**
     * @param mixed $conferenceName
     * @return ConferenceAbstract
     */
    public function setConferenceName($conferenceName)
    {
        $this->conferenceName = $conferenceName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstListedAuthor()
    {
        return $this->firstListedAuthor;
    }

    /**
     * @param mixed $firstListedAuthor
     * @return ConferenceAbstract
     */
    public function setFirstListedAuthor($firstListedAuthor)
    {
        $this->firstListedAuthor = $firstListedAuthor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * @param mixed $issue
     * @return ConferenceAbstract
     */
    public function setIssue($issue)
    {
        $this->issue = $issue;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPageRangeFrom()
    {
        return $this->pageRangeFrom;
    }

    /**
     * @param mixed $pageRangeFrom
     * @return ConferenceAbstract
     */
    public function setPageRangeFrom($pageRangeFrom)
    {
        $this->pageRangeFrom = $pageRangeFrom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPageRangeTo()
    {
        return $this->pageRangeTo;
    }

    /**
     * @param mixed $pageRangeTo
     * @return ConferenceAbstract
     */
    public function setPageRangeTo($pageRangeTo)
    {
        $this->pageRangeTo = $pageRangeTo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * @param mixed $publicationDate
     * @return ConferenceAbstract
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublicationStatus()
    {
        return $this->publicationStatus;
    }

    /**
     * @param mixed $publicationStatus
     * @return ConferenceAbstract
     */
    public function setPublicationStatus($publicationStatus)
    {
        $this->publicationStatus = $publicationStatus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResearchClassification()
    {
        return $this->researchClassification;
    }

    /**
     * @param mixed $researchClassification
     * @return ConferenceAbstract
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param mixed $volume
     * @return ConferenceAbstract
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }

}