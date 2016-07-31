<?php

namespace CoreDomain\Objects;


/**
 * Class Degree
 * @package CoreDomain\Objects
 */
class Degree extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $country;
    /**
     * @var
     */
    protected $degreeMajor;
    /**
     * @var
     */
    protected $degreeName;
    /**
     * @var
     */
    protected $degreeStatus;
    /**
     * @var
     */
    protected $degreeType;
    /**
     * @var
     */
    protected $endDate;
    /**
     * @var
     */
    protected $expectedCompletionDate;
    /**
     * @var
     */
    protected $institution;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $startDate;
    /**
     * @var
     */
    protected $thesisTitle;

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     *
     * @return Degree
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDegreeMajor()
    {
        return $this->degreeMajor;
    }

    /**
     * @param mixed $degreeMajor
     *
     * @return Degree
     */
    public function setDegreeMajor($degreeMajor)
    {
        $this->degreeMajor = $degreeMajor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDegreeName()
    {
        return $this->degreeName;
    }

    /**
     * @param mixed $degreeName
     *
     * @return Degree
     */
    public function setDegreeName($degreeName)
    {
        $this->degreeName = $degreeName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDegreeStatus()
    {
        return $this->degreeStatus;
    }

    /**
     * @param mixed $degreeStatus
     *
     * @return Degree
     */
    public function setDegreeStatus($degreeStatus)
    {
        $this->degreeStatus = $degreeStatus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDegreeType()
    {
        return $this->degreeType;
    }

    /**
     * @param mixed $degreeType
     *
     * @return Degree
     */
    public function setDegreeType($degreeType)
    {
        $this->degreeType = $degreeType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     *
     * @return Degree
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpectedCompletionDate()
    {
        return $this->expectedCompletionDate;
    }

    /**
     * @param mixed $expectedCompletionDate
     *
     * @return Degree
     */
    public function setExpectedCompletionDate($expectedCompletionDate)
    {
        $this->expectedCompletionDate = $expectedCompletionDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * @param mixed $institution
     *
     * @return Degree
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;
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
     * @return Degree
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     *
     * @return Degree
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getThesisTitle()
    {
        return $this->thesisTitle;
    }

    /**
     * @param mixed $thesisTitle
     *
     * @return Degree
     */
    public function setThesisTitle($thesisTitle)
    {
        $this->thesisTitle = $thesisTitle;
        return $this;
    }

}