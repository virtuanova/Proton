<?php

namespace CoreDomain\Objects;


/**
 * Class CourseTaught
 * @package CoreDomain\Objects
 */
class CourseTaught extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $academicSession;
    /**
     * @var
     */
    protected $coInstructors;
    /**
     * @var
     */
    protected $courseCode;
    /**
     * @var
     */
    protected $courseLevel;
    /**
     * @var
     */
    protected $courseTitle;
    /**
     * @var
     */
    protected $endDate;
    /**
     * @var
     */
    protected $labHours;
    /**
     * @var
     */
    protected $lectureHours;
    /**
     * @var
     */
    protected $nameofInstitution;
    /**
     * @var
     */
    protected $numberofCredits;
    /**
     * @var
     */
    protected $numberofStudents;
    /**
     * @var
     */
    protected $otherContactHours;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $section;
    /**
     * @var
     */
    protected $startDate;
    /**
     * @var
     */
    protected $tutorialHours;

    /**
     * @return mixed
     */
    public function getAcademicSession()
    {
        return $this->academicSession;
    }

    /**
     * @param mixed $academicSession
     *
     * @return CourseTaught
     */
    public function setAcademicSession($academicSession)
    {
        $this->academicSession = $academicSession;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoInstructors()
    {
        return $this->coInstructors;
    }

    /**
     * @param mixed $coInstructors
     *
     * @return CourseTaught
     */
    public function setCoInstructors($coInstructors)
    {
        $this->coInstructors = $coInstructors;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCourseCode()
    {
        return $this->courseCode;
    }

    /**
     * @param mixed $courseCode
     *
     * @return CourseTaught
     */
    public function setCourseCode($courseCode)
    {
        $this->courseCode = $courseCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCourseLevel()
    {
        return $this->courseLevel;
    }

    /**
     * @param mixed $courseLevel
     *
     * @return CourseTaught
     */
    public function setCourseLevel($courseLevel)
    {
        $this->courseLevel = $courseLevel;
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
     *
     * @return CourseTaught
     */
    public function setCourseTitle($courseTitle)
    {
        $this->courseTitle = $courseTitle;
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
     * @return CourseTaught
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLabHours()
    {
        return $this->labHours;
    }

    /**
     * @param mixed $labHours
     *
     * @return CourseTaught
     */
    public function setLabHours($labHours)
    {
        $this->labHours = $labHours;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLectureHours()
    {
        return $this->lectureHours;
    }

    /**
     * @param mixed $lectureHours
     *
     * @return CourseTaught
     */
    public function setLectureHours($lectureHours)
    {
        $this->lectureHours = $lectureHours;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNameofInstitution()
    {
        return $this->nameofInstitution;
    }

    /**
     * @param mixed $nameofInstitution
     *
     * @return CourseTaught
     */
    public function setNameofInstitution($nameofInstitution)
    {
        $this->nameofInstitution = $nameofInstitution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberofCredits()
    {
        return $this->numberofCredits;
    }

    /**
     * @param mixed $numberofCredits
     *
     * @return CourseTaught
     */
    public function setNumberofCredits($numberofCredits)
    {
        $this->numberofCredits = $numberofCredits;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberofStudents()
    {
        return $this->numberofStudents;
    }

    /**
     * @param mixed $numberofStudents
     *
     * @return CourseTaught
     */
    public function setNumberofStudents($numberofStudents)
    {
        $this->numberofStudents = $numberofStudents;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOtherContactHours()
    {
        return $this->otherContactHours;
    }

    /**
     * @param mixed $otherContactHours
     *
     * @return CourseTaught
     */
    public function setOtherContactHours($otherContactHours)
    {
        $this->otherContactHours = $otherContactHours;
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
     * @return CourseTaught
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * @param mixed $section
     *
     * @return CourseTaught
     */
    public function setSection($section)
    {
        $this->section = $section;
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
     * @return CourseTaught
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTutorialHours()
    {
        return $this->tutorialHours;
    }

    /**
     * @param mixed $tutorialHours
     *
     * @return CourseTaught
     */
    public function setTutorialHours($tutorialHours)
    {
        $this->tutorialHours = $tutorialHours;
        return $this;
    }

}