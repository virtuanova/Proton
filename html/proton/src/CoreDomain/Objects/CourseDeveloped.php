<?php

namespace CoreDomain\Objects;


/**
 * Class CourseDeveloped
 * @package CoreDomain\Objects
 */
class CourseDeveloped extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $coDevelopers;
    /**
     * @var
     */
    protected $courseTitle;
    /**
     * @var
     */
    protected $dateFirstTaught;
    /**
     * @var
     */
    protected $institutionsUsingCourse;
    /**
     * @var
     */
    protected $organization;
    /**
     * @var
     */
    protected $researchClassification;

    /**
     * @return mixed
     */
    public function getCoDevelopers()
    {
        return $this->coDevelopers;
    }

    /**
     * @param mixed $coDevelopers
     * @return CourseDeveloped
     */
    public function setCoDevelopers($coDevelopers)
    {
        $this->coDevelopers = $coDevelopers;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCourseTitle()
    {
        return $this->courseTitle;
    }

    /**
     * @param mixed $courseTitle
     * @return CourseDeveloped
     */
    public function setCourseTitle($courseTitle)
    {
        $this->courseTitle = $courseTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateFirstTaught()
    {
        return $this->dateFirstTaught;
    }

    /**
     * @param mixed $dateFirstTaught
     * @return CourseDeveloped
     */
    public function setDateFirstTaught($dateFirstTaught)
    {
        $this->dateFirstTaught = $dateFirstTaught;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstitutionsUsingCourse()
    {
        return $this->institutionsUsingCourse;
    }

    /**
     * @param mixed $institutionsUsingCourse
     * @return CourseDeveloped
     */
    public function setInstitutionsUsingCourse($institutionsUsingCourse)
    {
        $this->institutionsUsingCourse = $institutionsUsingCourse;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param mixed $organization
     * @return CourseDeveloped
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
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
     * @return CourseDeveloped
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

}