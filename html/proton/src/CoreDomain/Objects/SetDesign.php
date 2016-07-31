<?php

namespace CoreDomain\Objects;


/**
 * Class SetDesign
 * @package CoreDomain\Objects
 */
class SetDesign extends BaseObjectInterface
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
     * @return SetDesign
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
     * @return SetDesign
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
     * @return SetDesign
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
     * @return SetDesign
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
     * @return SetDesign
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
     * @return SetDesign
     */
    public function setWriterProducer($writerProducer)
    {
        $this->writerProducer = $writerProducer;
        return $this;
    }

}