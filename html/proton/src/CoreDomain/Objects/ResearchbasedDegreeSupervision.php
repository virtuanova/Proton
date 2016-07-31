<?php

namespace CoreDomain\Objects;


/**
 * Class ResearchbasedDegreeSupervision
 * @package CoreDomain\Objects
 */
class ResearchbasedDegreeSupervision extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $academicInstitution;
    /**
     * @var
     */
    protected $consentObtainedforNameRelease;
    /**
     * @var
     */
    protected $degreeStatus;
    /**
     * @var
     */
    protected $degreeSubject;
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
    protected $startDate;
    /**
     * @var
     */
    protected $studentFirstName;
    /**
     * @var
     */
    protected $studentLastName;
    /**
     * @var
     */
    protected $supervisoryRole;
    /**
     * @var
     */
    protected $thesisTitle;

    /**
     * @return mixed
     */
    public function getAcademicInstitution()
    {
        return $this->academicInstitution;
    }

    /**
     * @param mixed $academicInstitution
     *
     * @return ResearchbasedDegreeSupervision
     */
    public function setAcademicInstitution($academicInstitution)
    {
        $this->academicInstitution = $academicInstitution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConsentObtainedforNameRelease()
    {
        return $this->consentObtainedforNameRelease;
    }

    /**
     * @param mixed $consentObtainedforNameRelease
     *
     * @return ResearchbasedDegreeSupervision
     */
    public function setConsentObtainedforNameRelease($consentObtainedforNameRelease)
    {
        $this->consentObtainedforNameRelease = $consentObtainedforNameRelease;
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
     * @return ResearchbasedDegreeSupervision
     */
    public function setDegreeStatus($degreeStatus)
    {
        $this->degreeStatus = $degreeStatus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDegreeSubject()
    {
        return $this->degreeSubject;
    }

    /**
     * @param mixed $degreeSubject
     *
     * @return ResearchbasedDegreeSupervision
     */
    public function setDegreeSubject($degreeSubject)
    {
        $this->degreeSubject = $degreeSubject;
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
     * @return ResearchbasedDegreeSupervision
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
     * @return ResearchbasedDegreeSupervision
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
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
     * @return ResearchbasedDegreeSupervision
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStudentFirstName()
    {
        return $this->studentFirstName;
    }

    /**
     * @param mixed $studentFirstName
     *
     * @return ResearchbasedDegreeSupervision
     */
    public function setStudentFirstName($studentFirstName)
    {
        $this->studentFirstName = $studentFirstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStudentLastName()
    {
        return $this->studentLastName;
    }

    /**
     * @param mixed $studentLastName
     *
     * @return ResearchbasedDegreeSupervision
     */
    public function setStudentLastName($studentLastName)
    {
        $this->studentLastName = $studentLastName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupervisoryRole()
    {
        return $this->supervisoryRole;
    }

    /**
     * @param mixed $supervisoryRole
     *
     * @return ResearchbasedDegreeSupervision
     */
    public function setSupervisoryRole($supervisoryRole)
    {
        $this->supervisoryRole = $supervisoryRole;
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
     * @return ResearchbasedDegreeSupervision
     */
    public function setThesisTitle($thesisTitle)
    {
        $this->thesisTitle = $thesisTitle;
        return $this;
    }

}