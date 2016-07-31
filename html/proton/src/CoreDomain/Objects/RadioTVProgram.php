<?php

namespace CoreDomain\Objects;


/**
 * Class RadioTVProgram
 * @package CoreDomain\Objects
 */
class RadioTVProgram extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $broadcastDate;
    /**
     * @var
     */
    protected $cocreators;
    /**
     * @var
     */
    protected $episodeTitle;
    /**
     * @var
     */
    protected $numberofEpisodes;
    /**
     * @var
     */
    protected $programTitle;
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
     * @return mixed
     */
    public function getBroadcastDate()
    {
        return $this->broadcastDate;
    }

    /**
     * @param mixed $broadcastDate
     *
     * @return RadioTVProgram
     */
    public function setBroadcastDate($broadcastDate)
    {
        $this->broadcastDate = $broadcastDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCocreators()
    {
        return $this->cocreators;
    }

    /**
     * @param mixed $cocreators
     *
     * @return RadioTVProgram
     */
    public function setCocreators($cocreators)
    {
        $this->cocreators = $cocreators;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEpisodeTitle()
    {
        return $this->episodeTitle;
    }

    /**
     * @param mixed $episodeTitle
     *
     * @return RadioTVProgram
     */
    public function setEpisodeTitle($episodeTitle)
    {
        $this->episodeTitle = $episodeTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberofEpisodes()
    {
        return $this->numberofEpisodes;
    }

    /**
     * @param mixed $numberofEpisodes
     *
     * @return RadioTVProgram
     */
    public function setNumberofEpisodes($numberofEpisodes)
    {
        $this->numberofEpisodes = $numberofEpisodes;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProgramTitle()
    {
        return $this->programTitle;
    }

    /**
     * @param mixed $programTitle
     *
     * @return RadioTVProgram
     */
    public function setProgramTitle($programTitle)
    {
        $this->programTitle = $programTitle;
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
     * @return RadioTVProgram
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
     * @return RadioTVProgram
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
     * @return RadioTVProgram
     */
    public function setSeriesTitle($seriesTitle)
    {
        $this->seriesTitle = $seriesTitle;
        return $this;
    }

}