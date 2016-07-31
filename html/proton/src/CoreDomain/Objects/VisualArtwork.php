<?php

namespace CoreDomain\Objects;


/**
 * Class VisualArtwork
 * @package CoreDomain\Objects
 */
class VisualArtwork extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $coartists;
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
    public function getCoartists()
    {
        return $this->coartists;
    }

    /**
     * @param mixed $coartists
     *
     * @return VisualArtwork
     */
    public function setCoartists($coartists)
    {
        $this->coartists = $coartists;
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
     * @return VisualArtwork
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
     * @return VisualArtwork
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

}