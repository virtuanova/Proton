<?php

namespace CoreDomain\Objects;


/**
 * Class OtherStudy
 * @package CoreDomain\Objects
 */
class OtherStudy extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $description;
    /**
     * @var
     */
    protected $endDate;
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
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     *
     * @return OtherStudy
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return OtherStudy
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
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
     * @return OtherStudy
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
     * @return OtherStudy
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
     * @return OtherStudy
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

}