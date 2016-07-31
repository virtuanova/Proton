<?php

namespace CoreDomain\Objects;


/**
 * Class BookReview
 * @package CoreDomain\Objects
 */
class BookReview extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $bookEdition;
    /**
     * @var
     */
    protected $bookPublicationLocation;
    /**
     * @var
     */
    protected $bookPublicationYear;
    /**
     * @var
     */
    protected $bookRefereed;
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
    protected $coauthors;
    /**
     * @var
     */
    protected $dateofReviewPublication;
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
    protected $publicationStatus;
    /**
     * @var
     */
    protected $publishedIn;
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
    protected $reviewIssue;
    /**
     * @var
     */
    protected $reviewPublication;
    /**
     * @var
     */
    protected $reviewPublisher;
    /**
     * @var
     */
    protected $reviewTitle;
    /**
     * @var
     */
    protected $reviewVolume;
    /**
     * @var
     */
    protected $uRL;

    /**
     * @return mixed
     */
    public function getBookEdition()
    {
        return $this->bookEdition;
    }

    /**
     * @param mixed $bookEdition
     * @return BookReview
     */
    public function setBookEdition($bookEdition)
    {
        $this->bookEdition = $bookEdition;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBookPublicationLocation()
    {
        return $this->bookPublicationLocation;
    }

    /**
     * @param mixed $bookPublicationLocation
     * @return BookReview
     */
    public function setBookPublicationLocation($bookPublicationLocation)
    {
        $this->bookPublicationLocation = $bookPublicationLocation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBookPublicationYear()
    {
        return $this->bookPublicationYear;
    }

    /**
     * @param mixed $bookPublicationYear
     * @return BookReview
     */
    public function setBookPublicationYear($bookPublicationYear)
    {
        $this->bookPublicationYear = $bookPublicationYear;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBookRefereed()
    {
        return $this->bookRefereed;
    }

    /**
     * @param mixed $bookRefereed
     * @return BookReview
     */
    public function setBookRefereed($bookRefereed)
    {
        $this->bookRefereed = $bookRefereed;
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
     * @return BookReview
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
     * @return BookReview
     */
    public function setBookVolume($bookVolume)
    {
        $this->bookVolume = $bookVolume;
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
     * @return BookReview
     */
    public function setCoauthors($coauthors)
    {
        $this->coauthors = $coauthors;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateofReviewPublication()
    {
        return $this->dateofReviewPublication;
    }

    /**
     * @param mixed $dateofReviewPublication
     * @return BookReview
     */
    public function setDateofReviewPublication($dateofReviewPublication)
    {
        $this->dateofReviewPublication = $dateofReviewPublication;
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
     * @return BookReview
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
     * @return BookReview
     */
    public function setPageRangeTo($pageRangeTo)
    {
        $this->pageRangeTo = $pageRangeTo;
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
     * @return BookReview
     */
    public function setPublicationStatus($publicationStatus)
    {
        $this->publicationStatus = $publicationStatus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublishedIn()
    {
        return $this->publishedIn;
    }

    /**
     * @param mixed $publishedIn
     * @return BookReview
     */
    public function setPublishedIn($publishedIn)
    {
        $this->publishedIn = $publishedIn;
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
     * @return BookReview
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
     * @return BookReview
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
     * @return BookReview
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReviewIssue()
    {
        return $this->reviewIssue;
    }

    /**
     * @param mixed $reviewIssue
     * @return BookReview
     */
    public function setReviewIssue($reviewIssue)
    {
        $this->reviewIssue = $reviewIssue;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReviewPublication()
    {
        return $this->reviewPublication;
    }

    /**
     * @param mixed $reviewPublication
     * @return BookReview
     */
    public function setReviewPublication($reviewPublication)
    {
        $this->reviewPublication = $reviewPublication;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReviewPublisher()
    {
        return $this->reviewPublisher;
    }

    /**
     * @param mixed $reviewPublisher
     * @return BookReview
     */
    public function setReviewPublisher($reviewPublisher)
    {
        $this->reviewPublisher = $reviewPublisher;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReviewTitle()
    {
        return $this->reviewTitle;
    }

    /**
     * @param mixed $reviewTitle
     * @return BookReview
     */
    public function setReviewTitle($reviewTitle)
    {
        $this->reviewTitle = $reviewTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReviewVolume()
    {
        return $this->reviewVolume;
    }

    /**
     * @param mixed $reviewVolume
     * @return BookReview
     */
    public function setReviewVolume($reviewVolume)
    {
        $this->reviewVolume = $reviewVolume;
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
     * @return BookReview
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

}