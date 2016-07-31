<?php

namespace CoreDomain\Objects;


/**
 * Class EncyclopediaEntry
 * @package CoreDomain\Objects
 */
class EncyclopediaEntry extends BaseObjectInterface
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
    protected $encyclopaediaTitle;
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
     * @return EncyclopediaEntry
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
     * @return EncyclopediaEntry
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
     *
     * @return EncyclopediaEntry
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEncyclopaediaTitle()
    {
        return $this->encyclopaediaTitle;
    }

    /**
     * @param mixed $encyclopaediaTitle
     *
     * @return EncyclopediaEntry
     */
    public function setEncyclopaediaTitle($encyclopaediaTitle)
    {
        $this->encyclopaediaTitle = $encyclopaediaTitle;
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
     * @return EncyclopediaEntry
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
     * @return EncyclopediaEntry
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
     * @return EncyclopediaEntry
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
     * @return EncyclopediaEntry
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
     * @return EncyclopediaEntry
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
     * @return EncyclopediaEntry
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
     * @return EncyclopediaEntry
     */
    public function setPublicationStatus($publicationStatus)
    {
        $this->publicationStatus = $publicationStatus;
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
     * @return EncyclopediaEntry
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
     * @return EncyclopediaEntry
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
     * @return EncyclopediaEntry
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
     * @return EncyclopediaEntry
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }

}