<?php

namespace CoreDomain\Objects;


/**
 * Class MusicalComposition
 * @package CoreDomain\Objects
 */
class MusicalComposition extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $cocomposers;
    /**
     * @var
     */
    protected $duration;
    /**
     * @var
     */
    protected $instrumentation;
    /**
     * @var
     */
    protected $numberofPages;
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
    protected $title;

    /**
     * @return mixed
     */
    public function getCocomposers()
    {
        return $this->cocomposers;
    }

    /**
     * @param mixed $cocomposers
     *
     * @return MusicalComposition
     */
    public function setCocomposers($cocomposers)
    {
        $this->cocomposers = $cocomposers;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     *
     * @return MusicalComposition
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstrumentation()
    {
        return $this->instrumentation;
    }

    /**
     * @param mixed $instrumentation
     *
     * @return MusicalComposition
     */
    public function setInstrumentation($instrumentation)
    {
        $this->instrumentation = $instrumentation;
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
     * @return MusicalComposition
     */
    public function setNumberofPages($numberofPages)
    {
        $this->numberofPages = $numberofPages;
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
     * @return MusicalComposition
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
     * @return MusicalComposition
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
     * @return MusicalComposition
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

}