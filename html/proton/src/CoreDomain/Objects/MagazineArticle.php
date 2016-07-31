<?php

namespace CoreDomain\Objects;


/**
 * Class MagazineArticle
 * @package CoreDomain\Objects
 */
class MagazineArticle extends BaseObjectInterface
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
    protected $coauthorseditors;
    /**
     * @var
     */
    protected $firstListedAuthorEditor;
    /**
     * @var
     */
    protected $issue;
    /**
     * @var
     */
    protected $magazine;
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
    protected $publicationLocation;
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
    public function getArticleTitle()
    {
        return $this->articleTitle;
    }

    /**
     * @param mixed $articleTitle
     *
     * @return MagazineArticle
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
     * @return MagazineArticle
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
     *
     * @return MagazineArticle
     */
    public function setCoauthorseditors($coauthorseditors)
    {
        $this->coauthorseditors = $coauthorseditors;
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
     *
     * @return MagazineArticle
     */
    public function setFirstListedAuthorEditor($firstListedAuthorEditor)
    {
        $this->firstListedAuthorEditor = $firstListedAuthorEditor;
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
     * @return MagazineArticle
     */
    public function setIssue($issue)
    {
        $this->issue = $issue;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMagazine()
    {
        return $this->magazine;
    }

    /**
     * @param mixed $magazine
     *
     * @return MagazineArticle
     */
    public function setMagazine($magazine)
    {
        $this->magazine = $magazine;
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
     * @return MagazineArticle
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
     * @return MagazineArticle
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
     *
     * @return MagazineArticle
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
     * @return MagazineArticle
     */
    public function setPublicationLocation($publicationLocation)
    {
        $this->publicationLocation = $publicationLocation;
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
     * @return MagazineArticle
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
     * @return MagazineArticle
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
     * @return MagazineArticle
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }

}