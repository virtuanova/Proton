<?php

namespace CoreDomain\Objects;


/**
 * Class BookChapter
 * @package CoreDomain\Objects
 */
class BookChapter extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $authoringRole;
    /**
     * @var
     */
    protected $bookEdition;
    /**
     * @var
     */
    protected $bookPublisher;
    /**
     * @var
     */
    protected $bookTitle;
    /**
     * @var
     */
    protected $bookVolume;
    /**
     * @var
     */
    protected $chapterPageRangeFrom;
    /**
     * @var
     */
    protected $chapterTitle;
    /**
     * @var
     */
    protected $chapterpageRangeTo;
    /**
     * @var
     */
    protected $coauthorseditors;
    /**
     * @var
     */
    protected $firstListedAuthor;
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
    protected $Url;

    /**
     * @return mixed
     */
    public function getAuthoringRole()
    {
        return $this->authoringRole;
    }

    /**
     * @param mixed $authoringRole
     * @return BookChapter
     */
    public function setAuthoringRole($authoringRole)
    {
        $this->authoringRole = $authoringRole;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBookEdition()
    {
        return $this->bookEdition;
    }

    /**
     * @param mixed $bookEdition
     * @return BookChapter
     */
    public function setBookEdition($bookEdition)
    {
        $this->bookEdition = $bookEdition;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBookPublisher()
    {
        return $this->bookPublisher;
    }

    /**
     * @param mixed $bookPublisher
     * @return BookChapter
     */
    public function setBookPublisher($bookPublisher)
    {
        $this->bookPublisher = $bookPublisher;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBookTitle()
    {
        return $this->bookTitle;
    }

    /**
     * @param mixed $bookTitle
     * @return BookChapter
     */
    public function setBookTitle($bookTitle)
    {
        $this->bookTitle = $bookTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBookVolume()
    {
        return $this->bookVolume;
    }

    /**
     * @param mixed $bookVolume
     * @return BookChapter
     */
    public function setBookVolume($bookVolume)
    {
        $this->bookVolume = $bookVolume;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getChapterPageRangeFrom()
    {
        return $this->chapterPageRangeFrom;
    }

    /**
     * @param mixed $chapterPageRangeFrom
     * @return BookChapter
     */
    public function setChapterPageRangeFrom($chapterPageRangeFrom)
    {
        $this->chapterPageRangeFrom = $chapterPageRangeFrom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getChapterTitle()
    {
        return $this->chapterTitle;
    }

    /**
     * @param mixed $chapterTitle
     * @return BookChapter
     */
    public function setChapterTitle($chapterTitle)
    {
        $this->chapterTitle = $chapterTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getChapterpageRangeTo()
    {
        return $this->chapterpageRangeTo;
    }

    /**
     * @param mixed $chapterpageRangeTo
     * @return BookChapter
     */
    public function setChapterpageRangeTo($chapterpageRangeTo)
    {
        $this->chapterpageRangeTo = $chapterpageRangeTo;
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
     * @return BookChapter
     */
    public function setCoauthorseditors($coauthorseditors)
    {
        $this->coauthorseditors = $coauthorseditors;
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
     * @return BookChapter
     */
    public function setFirstListedAuthor($firstListedAuthor)
    {
        $this->firstListedAuthor = $firstListedAuthor;
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
     * @return BookChapter
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
     * @return BookChapter
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
     * @return BookChapter
     */
    public function setPublicationYear($publicationYear)
    {
        $this->publicationYear = $publicationYear;
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
     * @return BookChapter
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
     * @return BookChapter
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
     * @return BookChapter
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
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
     * @return BookChapter
     */
    public function setUrl($Url)
    {
        $this->Url = $Url;
        return $this;
    }

}