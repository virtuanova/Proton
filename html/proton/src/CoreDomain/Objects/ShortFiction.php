<?php

namespace CoreDomain\Objects;


/**
 * Class ShortFiction
 * @package CoreDomain\Objects
 */
class ShortFiction extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $appearedIn;
    /**
     * @var
     */
    protected $coauthors;
    /**
     * @var
     */
    protected $issue;
    /**
     * @var
     */
    protected $pageRange;
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
    protected $publisher;
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
    protected $volume;
    /**
     * @var
     */
    protected $volumeAnthologyEditors;

    /**
     * @return mixed
     */
    public function getAppearedIn()
    {
        return $this->appearedIn;
    }

    /**
     * @param mixed $appearedIn
     *
     * @return ShortFiction
     */
    public function setAppearedIn($appearedIn)
    {
        $this->appearedIn = $appearedIn;
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
     * @return ShortFiction
     */
    public function setCoauthors($coauthors)
    {
        $this->coauthors = $coauthors;
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
     * @return ShortFiction
     */
    public function setIssue($issue)
    {
        $this->issue = $issue;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPageRange()
    {
        return $this->pageRange;
    }

    /**
     * @param mixed $pageRange
     *
     * @return ShortFiction
     */
    public function setPageRange($pageRange)
    {
        $this->pageRange = $pageRange;
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
     * @return ShortFiction
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
     * @return ShortFiction
     */
    public function setPublicationLocation($publicationLocation)
    {
        $this->publicationLocation = $publicationLocation;
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
     * @return ShortFiction
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
     * @return ShortFiction
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
     *
     * @return ShortFiction
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * @return ShortFiction
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVolumeAnthologyEditors()
    {
        return $this->volumeAnthologyEditors;
    }

    /**
     * @param mixed $volumeAnthologyEditors
     *
     * @return ShortFiction
     */
    public function setVolumeAnthologyEditors($volumeAnthologyEditors)
    {
        $this->volumeAnthologyEditors = $volumeAnthologyEditors;
        return $this;
    }

}