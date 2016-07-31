<?php

namespace CoreDomain\Objects;


/**
 * Class CuratorialMuseumExhibition
 * @package CoreDomain\Objects
 */
class CuratorialMuseumExhibition extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $artists;
    /**
     * @var
     */
    protected $date;
    /**
     * @var
     */
    protected $dateofSubsequentExhibition;
    /**
     * @var
     */
    protected $exhibitionCatalogueTitle;
    /**
     * @var
     */
    protected $exhibitionTitle;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $venues;

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
     * @return CuratorialMuseumExhibition
     */
    public function setArtists($artists)
    {
        $this->artists = $artists;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     *
     * @return CuratorialMuseumExhibition
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateofSubsequentExhibition()
    {
        return $this->dateofSubsequentExhibition;
    }

    /**
     * @param mixed $dateofSubsequentExhibition
     *
     * @return CuratorialMuseumExhibition
     */
    public function setDateofSubsequentExhibition($dateofSubsequentExhibition)
    {
        $this->dateofSubsequentExhibition = $dateofSubsequentExhibition;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExhibitionCatalogueTitle()
    {
        return $this->exhibitionCatalogueTitle;
    }

    /**
     * @param mixed $exhibitionCatalogueTitle
     *
     * @return CuratorialMuseumExhibition
     */
    public function setExhibitionCatalogueTitle($exhibitionCatalogueTitle)
    {
        $this->exhibitionCatalogueTitle = $exhibitionCatalogueTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExhibitionTitle()
    {
        return $this->exhibitionTitle;
    }

    /**
     * @param mixed $exhibitionTitle
     *
     * @return CuratorialMuseumExhibition
     */
    public function setExhibitionTitle($exhibitionTitle)
    {
        $this->exhibitionTitle = $exhibitionTitle;
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
     * @return CuratorialMuseumExhibition
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVenues()
    {
        return $this->venues;
    }

    /**
     * @param mixed $venues
     *
     * @return CuratorialMuseumExhibition
     */
    public function setVenues($venues)
    {
        $this->venues = $venues;
        return $this;
    }

}