<?php

namespace CoreDomain\Objects;


/**
 * Class LightDesign
 * @package CoreDomain\Objects
 */
class LightDesign extends BaseObjectInterface
{

	protected $keyCollaborators;
	protected $openingDate;
	protected $researchClassification;
	protected $showTitle;
	protected $venue;
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
     * @return LightDesign
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
     * @return LightDesign
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
     * @return LightDesign
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
     * @return LightDesign
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
     * @return LightDesign
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
     * @return LightDesign
     */
    public function setWriterProducer($writerProducer)
    {
        $this->writerProducer = $writerProducer;
        return $this;
    }

}