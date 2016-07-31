<?php

namespace CoreDomain\Objects;


/**
 * Class SoundDesign
 * @package CoreDomain\Objects
 */
class SoundDesign extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $keyCollaborators;
    /**
     * @var
     */
    protected $openingDate;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $showTitle;
    /**
     * @var
     */
    protected $venue;
    /**
     * @var
     */
    protected $writerProducer;

    /**
     * @return mixed
     */
    public function getKeyCollaborators()
    {
        return $this->keyCollaborators;
    }

    /**
     * @param mixed $keyCollaborators
     *
     * @return SoundDesign
     */
    public function setKeyCollaborators($keyCollaborators)
    {
        $this->keyCollaborators = $keyCollaborators;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOpeningDate()
    {
        return $this->openingDate;
    }

    /**
     * @param mixed $openingDate
     *
     * @return SoundDesign
     */
    public function setOpeningDate($openingDate)
    {
        $this->openingDate = $openingDate;
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
     * @return SoundDesign
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShowTitle()
    {
        return $this->showTitle;
    }

    /**
     * @param mixed $showTitle
     *
     * @return SoundDesign
     */
    public function setShowTitle($showTitle)
    {
        $this->showTitle = $showTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * @param mixed $venue
     *
     * @return SoundDesign
     */
    public function setVenue($venue)
    {
        $this->venue = $venue;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWriterProducer()
    {
        return $this->writerProducer;
    }

    /**
     * @param mixed $writerProducer
     *
     * @return SoundDesign
     */
    public function setWriterProducer($writerProducer)
    {
        $this->writerProducer = $writerProducer;
        return $this;
    }

}