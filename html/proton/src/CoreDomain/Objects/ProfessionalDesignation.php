<?php

namespace CoreDomain\Objects;


/**
 * Class ProfessionalDesignation
 * @package CoreDomain\Objects
 */
/**
 * Class ProfessionalDesignation
 * @package CoreDomain\Objects
 */
class ProfessionalDesignation extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $country;
    /**
     * @var
     */
    protected $description;
    /**
     * @var
     */
    protected $effectiveDate;
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
    protected $nameorTitle;
    /**
     * @var
     */
    protected $researchClassification;

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
     * @return ProfessionalDesignation
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

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
     * @return ProfessionalDesignation
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * @param mixed $effectiveDate
     *
     * @return ProfessionalDesignation
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
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
     * @return ProfessionalDesignation
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
     * @return ProfessionalDesignation
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNameorTitle()
    {
        return $this->nameorTitle;
    }

    /**
     * @param mixed $nameorTitle
     *
     * @return ProfessionalDesignation
     */
    public function setNameorTitle($nameorTitle)
    {
        $this->nameorTitle = $nameorTitle;
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
     * @return ProfessionalDesignation
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

}