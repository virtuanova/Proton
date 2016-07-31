<?php

namespace CoreDomain\Objects;


/**
 * Class Manual
 * @package CoreDomain\Objects
 */
class Manual extends BaseObjectInterface
{

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
    protected $numberofPages;
    /**
     * @var
     */
    protected $numberofVolumes;
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
    protected $researchClassification;
    /**
     * @var
     */
    protected $seriesTitle;
    /**
     * @var
     */
    protected $title;
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
    public function getCoauthors()
    {
        return $this->coauthors;
    }

    /**
     * @param mixed $coauthors
     *
     * @return Manual
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
     * @return Manual
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
     * @return Manual
     */
    public function setFirstListedAuthor($firstListedAuthor)
    {
        $this->firstListedAuthor = $firstListedAuthor;
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
     * @return Manual
     */
    public function setNumberofPages($numberofPages)
    {
        $this->numberofPages = $numberofPages;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberofVolumes()
    {
        return $this->numberofVolumes;
    }

    /**
     * @param mixed $numberofVolumes
     *
     * @return Manual
     */
    public function setNumberofVolumes($numberofVolumes)
    {
        $this->numberofVolumes = $numberofVolumes;
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
     * @return Manual
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
     * @return Manual
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
     *
     * @return Manual
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
     *
     * @return Manual
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
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
     * @return Manual
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSeriesTitle()
    {
        return $this->seriesTitle;
    }

    /**
     * @param mixed $seriesTitle
     *
     * @return Manual
     */
    public function setSeriesTitle($seriesTitle)
    {
        $this->seriesTitle = $seriesTitle;
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
     *
     * @return Manual
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * @return Manual
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
     * @return Manual
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }

}