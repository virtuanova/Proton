<?php

namespace CoreDomain\Objects;


/**
 * Class JournalArticle
 * @package CoreDomain\Objects
 */
class JournalArticle extends BaseObjectInterface
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
    protected $coAuthors;
    /**
     * @var
     */
    protected $DOI;
    /**
     * @var
     */
    protected $finalAcceptanceDate;
    /**
     * @var
     */
    protected $firstListedAuthor;
    /**
     * @var
     */
    protected $ISSN;
    /**
     * @var
     */
    protected $issue;
    /**
     * @var
     */
    protected $journal;
    /**
     * @var
     */
    protected $nIHManuscriptNumber;
    /**
     * @var
     */
    protected $openAccessRef1;
    /**
     * @var
     */
    protected $openAccessRef2;
    /**
     * @var
     */
    protected $openAccess;
    /**
     * @var
     */
    protected $PMCID;
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
    protected $provisionalAcceptanceDate;
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
    protected $publisherID;
    /**
     * @var
     */
    protected $publisherIDType;
    /**
     * @var
     */
    protected $publisherName;
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
     *
     * @return JournalArticle
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
     *
     * @return JournalArticle
     */
    public function setAuthoringRole($authoringRole)
    {
        $this->authoringRole = $authoringRole;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoAuthors()
    {
        return $this->coAuthors;
    }

    /**
     * @param mixed $coAuthors
     *
     * @return JournalArticle
     */
    public function setCoAuthors($coAuthors)
    {
        $this->coAuthors = $coAuthors;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDOI()
    {
        return $this->DOI;
    }

    /**
     * @param mixed $DOI
     *
     * @return JournalArticle
     */
    public function setDOI($DOI)
    {
        $this->DOI = $DOI;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFinalAcceptanceDate()
    {
        return $this->finalAcceptanceDate;
    }

    /**
     * @param mixed $finalAcceptanceDate
     *
     * @return JournalArticle
     */
    public function setFinalAcceptanceDate($finalAcceptanceDate)
    {
        $this->finalAcceptanceDate = $finalAcceptanceDate;
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
     *
     * @return JournalArticle
     */
    public function setFirstListedAuthor($firstListedAuthor)
    {
        $this->firstListedAuthor = $firstListedAuthor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getISSN()
    {
        return $this->ISSN;
    }

    /**
     * @param mixed $ISSN
     *
     * @return JournalArticle
     */
    public function setISSN($ISSN)
    {
        $this->ISSN = $ISSN;
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
     *
     * @return JournalArticle
     */
    public function setIssue($issue)
    {
        $this->issue = $issue;
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
     * @return JournalArticle
     */
    public function setJournal($journal)
    {
        $this->journal = $journal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNIHManuscriptNumber()
    {
        return $this->nIHManuscriptNumber;
    }

    /**
     * @param mixed $nIHManuscriptNumber
     *
     * @return JournalArticle
     */
    public function setNIHManuscriptNumber($nIHManuscriptNumber)
    {
        $this->nIHManuscriptNumber = $nIHManuscriptNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOpenAccessRef1()
    {
        return $this->openAccessRef1;
    }

    /**
     * @param mixed $openAccessRef1
     *
     * @return JournalArticle
     */
    public function setOpenAccessRef1($openAccessRef1)
    {
        $this->openAccessRef1 = $openAccessRef1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOpenAccessRef2()
    {
        return $this->openAccessRef2;
    }

    /**
     * @param mixed $openAccessRef2
     *
     * @return JournalArticle
     */
    public function setOpenAccessRef2($openAccessRef2)
    {
        $this->openAccessRef2 = $openAccessRef2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOpenAccess()
    {
        return $this->openAccess;
    }

    /**
     * @param mixed $openAccess
     *
     * @return JournalArticle
     */
    public function setOpenAccess($openAccess)
    {
        $this->openAccess = $openAccess;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPMCID()
    {
        return $this->PMCID;
    }

    /**
     * @param mixed $PMCID
     *
     * @return JournalArticle
     */
    public function setPMCID($PMCID)
    {
        $this->PMCID = $PMCID;
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
     *
     * @return JournalArticle
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
     *
     * @return JournalArticle
     */
    public function setPageRangeTo($pageRangeTo)
    {
        $this->pageRangeTo = $pageRangeTo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProvisionalAcceptanceDate()
    {
        return $this->provisionalAcceptanceDate;
    }

    /**
     * @param mixed $provisionalAcceptanceDate
     *
     * @return JournalArticle
     */
    public function setProvisionalAcceptanceDate($provisionalAcceptanceDate)
    {
        $this->provisionalAcceptanceDate = $provisionalAcceptanceDate;
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
     * @return JournalArticle
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
     * @return JournalArticle
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
     * @return JournalArticle
     */
    public function setPublicationStatus($publicationStatus)
    {
        $this->publicationStatus = $publicationStatus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublisherID()
    {
        return $this->publisherID;
    }

    /**
     * @param mixed $publisherID
     *
     * @return JournalArticle
     */
    public function setPublisherID($publisherID)
    {
        $this->publisherID = $publisherID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublisherIDType()
    {
        return $this->publisherIDType;
    }

    /**
     * @param mixed $publisherIDType
     *
     * @return JournalArticle
     */
    public function setPublisherIDType($publisherIDType)
    {
        $this->publisherIDType = $publisherIDType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublisherName()
    {
        return $this->publisherName;
    }

    /**
     * @param mixed $publisherName
     *
     * @return JournalArticle
     */
    public function setPublisherName($publisherName)
    {
        $this->publisherName = $publisherName;
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
     * @return JournalArticle
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
     * @return JournalArticle
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
     * @return JournalArticle
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
     *
     * @return JournalArticle
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
     *
     * @return JournalArticle
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }

}