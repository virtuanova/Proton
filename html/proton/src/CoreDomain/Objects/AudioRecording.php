<?php

namespace CoreDomain\Objects;


/**
 * Class AudioRecording
 * @package CoreDomain\Objects
 */
class AudioRecording extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $albumTitle;
    /**
     * @var
     */
    protected $coPerformers;
    /**
     * @var
     */
    protected $distributor;
    /**
     * @var
     */
    protected $pieceTitle;
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
     * @return mixed
     */
    public function getAlbumTitle()
    {
        return $this->albumTitle;
    }

    /**
     * @param mixed $albumTitle
     * @return AudioRecording
     */
    public function setAlbumTitle($albumTitle)
    {
        $this->albumTitle = $albumTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoPerformers()
    {
        return $this->coPerformers;
    }

    /**
     * @param mixed $coPerformers
     * @return AudioRecording
     */
    public function setCoPerformers($coPerformers)
    {
        $this->coPerformers = $coPerformers;
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
     * @return AudioRecording
     */
    public function setDistributor($distributor)
    {
        $this->distributor = $distributor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPieceTitle()
    {
        return $this->pieceTitle;
    }

    /**
     * @param mixed $pieceTitle
     * @return AudioRecording
     */
    public function setPieceTitle($pieceTitle)
    {
        $this->pieceTitle = $pieceTitle;
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
     * @return AudioRecording
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
     * @return AudioRecording
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
     * @return AudioRecording
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
     * @return AudioRecording
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

}