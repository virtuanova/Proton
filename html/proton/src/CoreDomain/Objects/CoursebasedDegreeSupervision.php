<?php

namespace CoreDomain\Objects;


/**
 * Class CoursebasedDegreeSupervision
 * @package CoreDomain\Objects
 */
class CoursebasedDegreeSupervision extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $academicInstitution;
    /**
     * @var
     */
    protected $cosupervisors;
    /**
     * @var
     */
    protected $consentObtainedforNameRelease;
    /**
     * @var
     */
    protected $dateDegreeReceivedExpected;
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
    protected $outputTitle;
    /**
     * @var
     */
    protected $presentPositionofFormerStudent;
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
    protected $studentFirstName;
    /**
     * @var
     */
    protected $studentIdentifier;
    /**
     * @var
     */
    protected $studentLastName;
    /**
     * @var
     */
    protected $supervisoryRole;

    /**
     * @return mixed
     */
    public function getAcademicInstitution()
    {
        return $this->academicInstitution;
    }

    /**
     * @param mixed $academicInstitution
     * @return CoursebasedDegreeSupervision
     */
    public function setAcademicInstitution($academicInstitution)
    {
        $this->academicInstitution = $academicInstitution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCosupervisors()
    {
        return $this->cosupervisors;
    }

    /**
     * @param mixed $cosupervisors
     * @return CoursebasedDegreeSupervision
     */
    public function setCosupervisors($cosupervisors)
    {
        $this->cosupervisors = $cosupervisors;
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
     * @return CoursebasedDegreeSupervision
     */
    public function setConsentObtainedforNameRelease($consentObtainedforNameRelease)
    {
        $this->consentObtainedforNameRelease = $consentObtainedforNameRelease;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateDegreeReceivedExpected()
    {
        return $this->dateDegreeReceivedExpected;
    }

    /**
     * @param mixed $dateDegreeReceivedExpected
     * @return CoursebasedDegreeSupervision
     */
    public function setDateDegreeReceivedExpected($dateDegreeReceivedExpected)
    {
        $this->dateDegreeReceivedExpected = $dateDegreeReceivedExpected;
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
     * @return CoursebasedDegreeSupervision
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
     * @return CoursebasedDegreeSupervision
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
     * @return CoursebasedDegreeSupervision
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
     * @return CoursebasedDegreeSupervision
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOutputTitle()
    {
        return $this->outputTitle;
    }

    /**
     * @param mixed $outputTitle
     * @return CoursebasedDegreeSupervision
     */
    public function setOutputTitle($outputTitle)
    {
        $this->outputTitle = $outputTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPresentPositionofFormerStudent()
    {
        return $this->presentPositionofFormerStudent;
    }

    /**
     * @param mixed $presentPositionofFormerStudent
     * @return CoursebasedDegreeSupervision
     */
    public function setPresentPositionofFormerStudent($presentPositionofFormerStudent)
    {
        $this->presentPositionofFormerStudent = $presentPositionofFormerStudent;
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
     * @return CoursebasedDegreeSupervision
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
     * @return CoursebasedDegreeSupervision
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
     * @return CoursebasedDegreeSupervision
     */
    public function setStudentFirstName($studentFirstName)
    {
        $this->studentFirstName = $studentFirstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStudentIdentifier()
    {
        return $this->studentIdentifier;
    }

    /**
     * @param mixed $studentIdentifier
     * @return CoursebasedDegreeSupervision
     */
    public function setStudentIdentifier($studentIdentifier)
    {
        $this->studentIdentifier = $studentIdentifier;
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
     * @return CoursebasedDegreeSupervision
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
     * @return CoursebasedDegreeSupervision
     */
    public function setSupervisoryRole($supervisoryRole)
    {
        $this->supervisoryRole = $supervisoryRole;
        return $this;
    }

}