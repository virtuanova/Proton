<?php

namespace CoreDomain\Objects;


/**
 * Class VideoRecording
 * @package CoreDomain\Objects
 */
/**
 * Class VideoRecording
 * @package CoreDomain\Objects
 */
class VideoRecording extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $coPerformers;
    /**
     * @var
     */
    protected $directorFirstName;
    /**
     * @var
     */
    protected $directorLastName;
    /**
     * @var
     */
    protected $distributor;
    /**
     * @var
     */
    protected $producerFirstName;
    /**
     * @var
     */
    protected $producerLastName;
    /**
     * @var
     */
    protected $releaseDate;
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
     * @return mixed
     */
    public function getCoPerformers()
    {
        return $this->coPerformers;
    }

    /**
     * @param mixed $coPerformers
     *
     * @return VideoRecording
     */
    public function setCoPerformers($coPerformers)
    {
        $this->coPerformers = $coPerformers;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDirectorFirstName()
    {
        return $this->directorFirstName;
    }

    /**
     * @param mixed $directorFirstName
     *
     * @return VideoRecording
     */
    public function setDirectorFirstName($directorFirstName)
    {
        $this->directorFirstName = $directorFirstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDirectorLastName()
    {
        return $this->directorLastName;
    }

    /**
     * @param mixed $directorLastName
     *
     * @return VideoRecording
     */
    public function setDirectorLastName($directorLastName)
    {
        $this->directorLastName = $directorLastName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDistributor()
    {
        return $this->distributor;
    }

    /**
     * @param mixed $distributor
     *
     * @return VideoRecording
     */
    public function setDistributor($distributor)
    {
        $this->distributor = $distributor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProducerFirstName()
    {
        return $this->producerFirstName;
    }

    /**
     * @param mixed $producerFirstName
     *
     * @return VideoRecording
     */
    public function setProducerFirstName($producerFirstName)
    {
        $this->producerFirstName = $producerFirstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProducerLastName()
    {
        return $this->producerLastName;
    }

    /**
     * @param mixed $producerLastName
     *
     * @return VideoRecording
     */
    public function setProducerLastName($producerLastName)
    {
        $this->producerLastName = $producerLastName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param mixed $releaseDate
     *
     * @return VideoRecording
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
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
     * @return VideoRecording
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
     * @return VideoRecording
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
     * @return VideoRecording
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

}