<?php

namespace CoreDomain\Objects;


/**
 * Class NonHEEmployment
 * @package CoreDomain\Objects
 */
class NonHEEmployment extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $country;
    /**
     * @var
     */
    protected $employer;
    /**
     * @var
     */
    protected $employerType;
    /**
     * @var
     */
    protected $endDate;
    /**
     * @var
     */
    protected $position;
    /**
     * @var
     */
    protected $positionType;
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
    protected $unitDivision;

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
     * @return NonHEEmployment
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmployer()
    {
        return $this->employer;
    }

    /**
     * @param mixed $employer
     *
     * @return NonHEEmployment
     */
    public function setEmployer($employer)
    {
        $this->employer = $employer;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmployerType()
    {
        return $this->employerType;
    }

    /**
     * @param mixed $employerType
     *
     * @return NonHEEmployment
     */
    public function setEmployerType($employerType)
    {
        $this->employerType = $employerType;
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
     * @return NonHEEmployment
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     *
     * @return NonHEEmployment
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPositionType()
    {
        return $this->positionType;
    }

    /**
     * @param mixed $positionType
     *
     * @return NonHEEmployment
     */
    public function setPositionType($positionType)
    {
        $this->positionType = $positionType;
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
     * @return NonHEEmployment
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
     * @return NonHEEmployment
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnitDivision()
    {
        return $this->unitDivision;
    }

    /**
     * @param mixed $unitDivision
     *
     * @return NonHEEmployment
     */
    public function setUnitDivision($unitDivision)
    {
        $this->unitDivision = $unitDivision;
        return $this;
    }

}