<?php

namespace CoreDomain\Objects;


/**
 * Class GraduateExamination
 * @package CoreDomain\Objects
 */
class GraduateExamination extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $date;
    /**
     * @var
     */
    protected $departmentDivision;
    /**
     * @var
     */
    protected $examinationRole;
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
    protected $studentFirstName;
    /**
     * @var
     */
    protected $studentLastName;

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     *
     * @return GraduateExamination
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDepartmentDivision()
    {
        return $this->departmentDivision;
    }

    /**
     * @param mixed $departmentDivision
     *
     * @return GraduateExamination
     */
    public function setDepartmentDivision($departmentDivision)
    {
        $this->departmentDivision = $departmentDivision;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExaminationRole()
    {
        return $this->examinationRole;
    }

    /**
     * @param mixed $examinationRole
     *
     * @return GraduateExamination
     */
    public function setExaminationRole($examinationRole)
    {
        $this->examinationRole = $examinationRole;
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
     * @return GraduateExamination
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
     * @return GraduateExamination
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
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
     * @return GraduateExamination
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
     * @return GraduateExamination
     */
    public function setStudentLastName($studentLastName)
    {
        $this->studentLastName = $studentLastName;
        return $this;
    }

}