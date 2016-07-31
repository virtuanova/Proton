<?php

namespace CoreDomain\Objects;


/**
 * Class NewspaperArticle
 * @package CoreDomain\Objects
 */
class NewspaperArticle extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $articleTitle;
    /**
     * @var
     */
    protected $city;
    /**
     * @var
     */
    protected $coauthors;
    /**
     * @var
     */
    protected $edition;
    /**
     * @var
     */
    protected $firstListedAuthor;
    /**
     * @var
     */
    protected $newspaper;
    /**
     * @var
     */
    protected $pageRangesSubList;
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
    protected $section;
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
     * @return NewspaperArticle
     */
    public function setArticleTitle($articleTitle)
    {
        $this->articleTitle = $articleTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     *
     * @return NewspaperArticle
     */
    public function setCity($city)
    {
        $this->city = $city;
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
     *
     * @return NewspaperArticle
     */
    public function setCoauthors($coauthors)
    {
        $this->coauthors = $coauthors;
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
     *
     * @return NewspaperArticle
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;
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
     * @return NewspaperArticle
     */
    public function setFirstListedAuthor($firstListedAuthor)
    {
        $this->firstListedAuthor = $firstListedAuthor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNewspaper()
    {
        return $this->newspaper;
    }

    /**
     * @param mixed $newspaper
     *
     * @return NewspaperArticle
     */
    public function setNewspaper($newspaper)
    {
        $this->newspaper = $newspaper;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPageRangesSubList()
    {
        return $this->pageRangesSubList;
    }

    /**
     * @param mixed $pageRangesSubList
     *
     * @return NewspaperArticle
     */
    public function setPageRangesSubList($pageRangesSubList)
    {
        $this->pageRangesSubList = $pageRangesSubList;
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
     * @return NewspaperArticle
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
     * @return NewspaperArticle
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
     * @return NewspaperArticle
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * @param mixed $section
     *
     * @return NewspaperArticle
     */
    public function setSection($section)
    {
        $this->section = $section;
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
     * @return NewspaperArticle
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
     * @return NewspaperArticle
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }

}