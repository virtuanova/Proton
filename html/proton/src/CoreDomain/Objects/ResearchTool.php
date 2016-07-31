<?php

namespace CoreDomain\Objects;


/**
 * Class ResearchTool
 * @package CoreDomain\Objects
 */
class ResearchTool extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $organization;
    /**
     * @var
     */
    protected $pageRanges;
    /**
     * @var
     */
    protected $publicationLocation;
    /**
     * @var
     */
    protected $publicationYear;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $researchToolType;
    /**
     * @var
     */
    protected $title;
    /**
     * @var
     */
    protected $uRL;

    /**
     * @return mixed
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param mixed $organization
     *
     * @return ResearchTool
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPageRanges()
    {
        return $this->pageRanges;
    }

    /**
     * @param mixed $pageRanges
     *
     * @return ResearchTool
     */
    public function setPageRanges($pageRanges)
    {
        $this->pageRanges = $pageRanges;
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
     * @return ResearchTool
     */
    public function setPublicationLocation($publicationLocation)
    {
        $this->publicationLocation = $publicationLocation;
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
     * @return ResearchTool
     */
    public function setPublicationYear($publicationYear)
    {
        $this->publicationYear = $publicationYear;
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
     * @return ResearchTool
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResearchToolType()
    {
        return $this->researchToolType;
    }

    /**
     * @param mixed $researchToolType
     *
     * @return ResearchTool
     */
    public function setResearchToolType($researchToolType)
    {
        $this->researchToolType = $researchToolType;
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
     * @return ResearchTool
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
     * @return ResearchTool
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

}