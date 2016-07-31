<?php

namespace CoreDomain\Objects;


/**
 * Class JournalIssue
 * @package CoreDomain\Objects
 */
class JournalIssue extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $authoringRole;
    /**
     * @var
     */
    protected $coeditors;
    /**
     * @var
     */
    protected $firstListedEditor;
    /**
     * @var
     */
    protected $issueNumber;
    /**
     * @var
     */
    protected $issueTitle;
    /**
     * @var
     */
    protected $journal;
    /**
     * @var
     */
    protected $numberofPages;
    /**
     * @var
     */
    protected $publicationDate;
    /**
     * @var
     */
    protected $publicationLocation;
    /**
     * @var
     */
    protected $publicationStatus;
    /**
     * @var
     */
    protected $pubmedID;
    /**
     * @var
     */
    protected $refereed;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $uRL;
    /**
     * @var
     */
    protected $volume;

    /**
     * @return mixed
     */
    public function getAuthoringRole()
    {
        return $this->authoringRole;
    }

    /**
     * @param mixed $authoringRole
     *
     * @return JournalIssue
     */
    public function setAuthoringRole($authoringRole)
    {
        $this->authoringRole = $authoringRole;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoeditors()
    {
        return $this->coeditors;
    }

    /**
     * @param mixed $coeditors
     *
     * @return JournalIssue
     */
    public function setCoeditors($coeditors)
    {
        $this->coeditors = $coeditors;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstListedEditor()
    {
        return $this->firstListedEditor;
    }

    /**
     * @param mixed $firstListedEditor
     *
     * @return JournalIssue
     */
    public function setFirstListedEditor($firstListedEditor)
    {
        $this->firstListedEditor = $firstListedEditor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIssueNumber()
    {
        return $this->issueNumber;
    }

    /**
     * @param mixed $issueNumber
     *
     * @return JournalIssue
     */
    public function setIssueNumber($issueNumber)
    {
        $this->issueNumber = $issueNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIssueTitle()
    {
        return $this->issueTitle;
    }

    /**
     * @param mixed $issueTitle
     *
     * @return JournalIssue
     */
    public function setIssueTitle($issueTitle)
    {
        $this->issueTitle = $issueTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getJournal()
    {
        return $this->journal;
    }

    /**
     * @param mixed $journal
     *
     * @return JournalIssue
     */
    public function setJournal($journal)
    {
        $this->journal = $journal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberofPages()
    {
        return $this->numberofPages;
    }

    /**
     * @param mixed $numberofPages
     *
     * @return JournalIssue
     */
    public function setNumberofPages($numberofPages)
    {
        $this->numberofPages = $numberofPages;
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
     *
     * @return JournalIssue
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublicationLocation()
    {
        return $this->publicationLocation;
    }

    /**
     * @param mixed $publicationLocation
     *
     * @return JournalIssue
     */
    public function setPublicationLocation($publicationLocation)
    {
        $this->publicationLocation = $publicationLocation;
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
     *
     * @return JournalIssue
     */
    public function setPublicationStatus($publicationStatus)
    {
        $this->publicationStatus = $publicationStatus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPubmedID()
    {
        return $this->pubmedID;
    }

    /**
     * @param mixed $pubmedID
     *
     * @return JournalIssue
     */
    public function setPubmedID($pubmedID)
    {
        $this->pubmedID = $pubmedID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRefereed()
    {
        return $this->refereed;
    }

    /**
     * @param mixed $refereed
     *
     * @return JournalIssue
     */
    public function setRefereed($refereed)
    {
        $this->refereed = $refereed;
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
     *
     * @return JournalIssue
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * @param mixed $uRL
     *
     * @return JournalIssue
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
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
     *
     * @return JournalIssue
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }

}