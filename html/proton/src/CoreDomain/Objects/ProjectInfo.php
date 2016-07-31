<?php

namespace CoreDomain\Objects;


/**
 * Class ProjectInfo
 * @package CoreDomain\Objects
 */
class ProjectInfo extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $activityDescription;
    /**
     * @var
     */
    protected $activityID;
    /**
     * @var
     */
    protected $activityLongTitle;
    /**
     * @var
     */
    protected $activityParentID;
    /**
     * @var
     */
    protected $activityShortTitle;
    /**
     * @var
     */
    protected $activityType;
    /**
     * @var
     */
    protected $keywords;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $temporalClassification;

    /**
     * @return mixed
     */
    public function getActivityDescription()
    {
        return $this->activityDescription;
    }

    /**
     * @param mixed $activityDescription
     */
    public function setActivityDescription($activityDescription)
    {
        $this->activityDescription = $activityDescription;
    }

    /**
     * @return mixed
     */
    public function getActivityID()
    {
        return $this->activityID;
    }

    /**
     * @param mixed $activityID
     */
    public function setActivityID($activityID)
    {
        $this->activityID = $activityID;
    }

    /**
     * @return mixed
     */
    public function getActivityLongTitle()
    {
        return $this->activityLongTitle;
    }

    /**
     * @param mixed $activityLongTitle
     */
    public function setActivityLongTitle($activityLongTitle)
    {
        $this->activityLongTitle = $activityLongTitle;
    }

    /**
     * @return mixed
     */
    public function getActivityParentID()
    {
        return $this->activityParentID;
    }

    /**
     * @param mixed $activityParentID
     */
    public function setActivityParentID($activityParentID)
    {
        $this->activityParentID = $activityParentID;
    }

    /**
     * @return mixed
     */
    public function getActivityShortTitle()
    {
        return $this->activityShortTitle;
    }

    /**
     * @param mixed $activityShortTitle
     */
    public function setActivityShortTitle($activityShortTitle)
    {
        $this->activityShortTitle = $activityShortTitle;
    }

    /**
     * @return mixed
     */
    public function getActivityType()
    {
        return $this->activityType;
    }

    /**
     * @param mixed $activityType
     */
    public function setActivityType($activityType)
    {
        $this->activityType = $activityType;
    }

    /**
     * @return mixed
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param mixed $keywords
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
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
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
    }

    /**
     * @return mixed
     */
    public function getTemporalClassification()
    {
        return $this->temporalClassification;
    }

    /**
     * @param mixed $temporalClassification
     */
    public function setTemporalClassification($temporalClassification)
    {
        $this->temporalClassification = $temporalClassification;
    }

}