<?php

namespace CoreDomain\Objects;


/**
 * Class ProgramDeveloped
 * @package CoreDomain\Objects
 */
class ProgramDeveloped extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $dateFirstTaught;
    /**
     * @var
     */
    protected $degreeLevel;
    /**
     * @var
     */
    protected $degreeType;
    /**
     * @var
     */
    protected $organization;
    /**
     * @var
     */
    protected $partnerOrganizations;
    /**
     * @var
     */
    protected $programTitle;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $uniqueorInnovativeCharacteristics;

    /**
     * @return mixed
     */
    public function getDateFirstTaught()
    {
        return $this->dateFirstTaught;
    }

    /**
     * @param mixed $dateFirstTaught
     */
    public function setDateFirstTaught($dateFirstTaught)
    {
        $this->dateFirstTaught = $dateFirstTaught;
    }

    /**
     * @return mixed
     */
    public function getDegreeLevel()
    {
        return $this->degreeLevel;
    }

    /**
     * @param mixed $degreeLevel
     */
    public function setDegreeLevel($degreeLevel)
    {
        $this->degreeLevel = $degreeLevel;
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
     */
    public function setDegreeType($degreeType)
    {
        $this->degreeType = $degreeType;
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
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
    }

    /**
     * @return mixed
     */
    public function getPartnerOrganizations()
    {
        return $this->partnerOrganizations;
    }

    /**
     * @param mixed $partnerOrganizations
     */
    public function setPartnerOrganizations($partnerOrganizations)
    {
        $this->partnerOrganizations = $partnerOrganizations;
    }

    /**
     * @return mixed
     */
    public function getProgramTitle()
    {
        return $this->programTitle;
    }

    /**
     * @param mixed $programTitle
     */
    public function setProgramTitle($programTitle)
    {
        $this->programTitle = $programTitle;
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
    public function getUniqueorInnovativeCharacteristics()
    {
        return $this->uniqueorInnovativeCharacteristics;
    }

    /**
     * @param mixed $uniqueorInnovativeCharacteristics
     */
    public function setUniqueorInnovativeCharacteristics($uniqueorInnovativeCharacteristics)
    {
        $this->uniqueorInnovativeCharacteristics = $uniqueorInnovativeCharacteristics;
    }

}