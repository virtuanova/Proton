<?php

namespace CoreDomain\Objects;


/**
 * Class ExhibitionCatalogue
 * @package CoreDomain\Objects
 */
class ExhibitionCatalogue extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $artists;
    /**
     * @var
     */
    protected $galleryorPublisher;
    /**
     * @var
     */
    protected $numberofPages;
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
    protected $title;

    /**
     * @return mixed
     */
    public function getArtists()
    {
        return $this->artists;
    }

    /**
     * @param mixed $artists
     *
     * @return ExhibitionCatalogue
     */
    public function setArtists($artists)
    {
        $this->artists = $artists;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGalleryorPublisher()
    {
        return $this->galleryorPublisher;
    }

    /**
     * @param mixed $galleryorPublisher
     *
     * @return ExhibitionCatalogue
     */
    public function setGalleryorPublisher($galleryorPublisher)
    {
        $this->galleryorPublisher = $galleryorPublisher;
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
     * @return ExhibitionCatalogue
     */
    public function setNumberofPages($numberofPages)
    {
        $this->numberofPages = $numberofPages;
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
     * @return ExhibitionCatalogue
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
     * @return ExhibitionCatalogue
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
     * @return ExhibitionCatalogue
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

}