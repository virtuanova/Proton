<?php

namespace CoreDomain\Objects;


/**
 * Class DictionaryEntry
 * @package CoreDomain\Objects
 */
class DictionaryEntry extends BaseObjectInterface
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
    protected $dictionaryTitle;
    /**
     * @var
     */
    protected $edition;
    /**
     * @var
     */
    protected $entryTitle;
    /**
     * @var
     */
    protected $firstListedAuthorEditor;
    /**
     * @var
     */
    protected $numberofVolumes;
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
     * @return DictionaryEntry
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
     * @return DictionaryEntry
     */
    public function setCoauthorseditors($coauthorseditors)
    {
        $this->coauthorseditors = $coauthorseditors;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDictionaryTitle()
    {
        return $this->dictionaryTitle;
    }

    /**
     * @param mixed $dictionaryTitle
     *
     * @return DictionaryEntry
     */
    public function setDictionaryTitle($dictionaryTitle)
    {
        $this->dictionaryTitle = $dictionaryTitle;
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
     * @return DictionaryEntry
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntryTitle()
    {
        return $this->entryTitle;
    }

    /**
     * @param mixed $entryTitle
     *
     * @return DictionaryEntry
     */
    public function setEntryTitle($entryTitle)
    {
        $this->entryTitle = $entryTitle;
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
     * @return DictionaryEntry
     */
    public function setFirstListedAuthorEditor($firstListedAuthorEditor)
    {
        $this->firstListedAuthorEditor = $firstListedAuthorEditor;
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
     * @return DictionaryEntry
     */
    public function setNumberofVolumes($numberofVolumes)
    {
        $this->numberofVolumes = $numberofVolumes;
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
     * @return DictionaryEntry
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
     * @return DictionaryEntry
     */
    public function setPageRangeTo($pageRangeTo)
    {
        $this->pageRangeTo = $pageRangeTo;
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
     * @return DictionaryEntry
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
     * @return DictionaryEntry
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
     * @return DictionaryEntry
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
     * @return DictionaryEntry
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
     * @return DictionaryEntry
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
     * @return DictionaryEntry
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
     * @return DictionaryEntry
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }

}