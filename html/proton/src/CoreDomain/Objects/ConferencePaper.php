<?php

namespace CoreDomain\Objects;


/**
 * Class ConferencePaper
 * @package CoreDomain\Objects
 */
class ConferencePaper extends BaseObjectInterface
{

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
    protected $copresenters;
    /**
     * @var
     */
    protected $competitive;
    /**
     * @var
     */
    protected $conferenceDate;
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
    protected $invited;
    /**
     * @var
     */
    protected $keyNote;
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
    protected $paperTitle;
    /**
     * @var
     */
    protected $presentationDate;
    /**
     * @var
     */
    protected $proceedingsEditors;
    /**
     * @var
     */
    protected $proceedingsPublisher;
    /**
     * @var
     */
    protected $proceedingsTitle;
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
    protected $published;
    /**
     * @var
     */
    protected $refereed;
    /**
     * @var
     */
    protected $researchClassification;

    /**
     * @return mixed
     */
    public function getAuthoringRole()
    {
        return $this->authoringRole;
    }

    /**
     * @param mixed $authoringRole
     * @return ConferencePaper
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
     * @return ConferencePaper
     */
    public function setCoauthors($coauthors)
    {
        $this->coauthors = $coauthors;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCopresenters()
    {
        return $this->copresenters;
    }

    /**
     * @param mixed $copresenters
     * @return ConferencePaper
     */
    public function setCopresenters($copresenters)
    {
        $this->copresenters = $copresenters;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompetitive()
    {
        return $this->competitive;
    }

    /**
     * @param mixed $competitive
     * @return ConferencePaper
     */
    public function setCompetitive($competitive)
    {
        $this->competitive = $competitive;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConferenceDate()
    {
        return $this->conferenceDate;
    }

    /**
     * @param mixed $conferenceDate
     * @return ConferencePaper
     */
    public function setConferenceDate($conferenceDate)
    {
        $this->conferenceDate = $conferenceDate;
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
     * @return ConferencePaper
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
     * @return ConferencePaper
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
     * @return ConferencePaper
     */
    public function setFirstListedAuthor($firstListedAuthor)
    {
        $this->firstListedAuthor = $firstListedAuthor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvited()
    {
        return $this->invited;
    }

    /**
     * @param mixed $invited
     * @return ConferencePaper
     */
    public function setInvited($invited)
    {
        $this->invited = $invited;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKeyNote()
    {
        return $this->keyNote;
    }

    /**
     * @param mixed $keyNote
     * @return ConferencePaper
     */
    public function setKeyNote($keyNote)
    {
        $this->keyNote = $keyNote;
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
     * @return ConferencePaper
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
     * @return ConferencePaper
     */
    public function setPageRangeTo($pageRangeTo)
    {
        $this->pageRangeTo = $pageRangeTo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaperTitle()
    {
        return $this->paperTitle;
    }

    /**
     * @param mixed $paperTitle
     * @return ConferencePaper
     */
    public function setPaperTitle($paperTitle)
    {
        $this->paperTitle = $paperTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPresentationDate()
    {
        return $this->presentationDate;
    }

    /**
     * @param mixed $presentationDate
     * @return ConferencePaper
     */
    public function setPresentationDate($presentationDate)
    {
        $this->presentationDate = $presentationDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProceedingsEditors()
    {
        return $this->proceedingsEditors;
    }

    /**
     * @param mixed $proceedingsEditors
     * @return ConferencePaper
     */
    public function setProceedingsEditors($proceedingsEditors)
    {
        $this->proceedingsEditors = $proceedingsEditors;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProceedingsPublisher()
    {
        return $this->proceedingsPublisher;
    }

    /**
     * @param mixed $proceedingsPublisher
     * @return ConferencePaper
     */
    public function setProceedingsPublisher($proceedingsPublisher)
    {
        $this->proceedingsPublisher = $proceedingsPublisher;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProceedingsTitle()
    {
        return $this->proceedingsTitle;
    }

    /**
     * @param mixed $proceedingsTitle
     * @return ConferencePaper
     */
    public function setProceedingsTitle($proceedingsTitle)
    {
        $this->proceedingsTitle = $proceedingsTitle;
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
     * @return ConferencePaper
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
     * @return ConferencePaper
     */
    public function setPublicationStatus($publicationStatus)
    {
        $this->publicationStatus = $publicationStatus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @param mixed $published
     * @return ConferencePaper
     */
    public function setPublished($published)
    {
        $this->published = $published;
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
     * @return ConferencePaper
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
     * @return ConferencePaper
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

}