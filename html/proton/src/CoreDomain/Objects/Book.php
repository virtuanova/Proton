<?php

namespace CoreDomain\Objects;


/**
 * Class Book
 * @package CoreDomain\Objects
 */
class Book extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $authoringRole;
    /**
     * @var
     */
    protected $coauthorseditors;
    /**
     * @var
     */
    protected $edition;
    /**
     * @var
     */
    protected $firstListedAuthorEditor;
    /**
     * @var
     */
    protected $numberofPages;
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
    protected $publicationYear;
    /**
     * @var
     */
    protected $publisher;
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
    protected $title;
    /**
     * @var
     */
    protected $Url;
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
     * @return Book
     */
    public function setAuthoringRole($authoringRole)
    {
        $this->authoringRole = $authoringRole;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoauthorseditors()
    {
        return $this->coauthorseditors;
    }

    /**
     * @param mixed $coauthorseditors
     * @return Book
     */
    public function setCoauthorseditors($coauthorseditors)
    {
        $this->coauthorseditors = $coauthorseditors;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * @param mixed $edition
     * @return Book
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstListedAuthorEditor()
    {
        return $this->firstListedAuthorEditor;
    }

    /**
     * @param mixed $firstListedAuthorEditor
     * @return Book
     */
    public function setFirstListedAuthorEditor($firstListedAuthorEditor)
    {
        $this->firstListedAuthorEditor = $firstListedAuthorEditor;
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
     * @return Book
     */
    public function setNumberofPages($numberofPages)
    {
        $this->numberofPages = $numberofPages;
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
     * @return Book
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
     * @return Book
     */
    public function setPublicationStatus($publicationStatus)
    {
        $this->publicationStatus = $publicationStatus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublicationYear()
    {
        return $this->publicationYear;
    }

    /**
     * @param mixed $publicationYear
     * @return Book
     */
    public function setPublicationYear($publicationYear)
    {
        $this->publicationYear = $publicationYear;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param mixed $publisher
     * @return Book
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
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
     * @return Book
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
     * @return Book
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
     * @return Book
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Book
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * @param mixed $Url
     * @return Book
     */
    public function setUrl($Url)
    {
        $this->Url = $Url;
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
     * @return Book
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }

}