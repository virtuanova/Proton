<?php

namespace CoreDomain\Objects;


/**
 * Class Report
 * @package CoreDomain\Objects
 */
class Report extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $authoringRole;
    /**
     * @var
     */
    protected $coauthorseditors;
    /**
     * @var
     */
    protected $dateSubmitted;
    /**
     * @var
     */
    protected $firstListedAuthorEditor;
    /**
     * @var
     */
    protected $institutionPreparedFor;
    /**
     * @var
     */
    protected $numberofPages;
    /**
     * @var
     */
    protected $reportTitle;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $uRL;
    /**
     * @var
     */
    protected $volume;

    /**
     * @return mixed
     */
    public function getAuthoringRole()
    {
        return $this->authoringRole;
    }

    /**
     * @param mixed $authoringRole
     *
     * @return Report
     */
    public function setAuthoringRole($authoringRole)
    {
        $this->authoringRole = $authoringRole;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoauthorseditors()
    {
        return $this->coauthorseditors;
    }

    /**
     * @param mixed $coauthorseditors
     *
     * @return Report
     */
    public function setCoauthorseditors($coauthorseditors)
    {
        $this->coauthorseditors = $coauthorseditors;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateSubmitted()
    {
        return $this->dateSubmitted;
    }

    /**
     * @param mixed $dateSubmitted
     *
     * @return Report
     */
    public function setDateSubmitted($dateSubmitted)
    {
        $this->dateSubmitted = $dateSubmitted;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstListedAuthorEditor()
    {
        return $this->firstListedAuthorEditor;
    }

    /**
     * @param mixed $firstListedAuthorEditor
     *
     * @return Report
     */
    public function setFirstListedAuthorEditor($firstListedAuthorEditor)
    {
        $this->firstListedAuthorEditor = $firstListedAuthorEditor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstitutionPreparedFor()
    {
        return $this->institutionPreparedFor;
    }

    /**
     * @param mixed $institutionPreparedFor
     *
     * @return Report
     */
    public function setInstitutionPreparedFor($institutionPreparedFor)
    {
        $this->institutionPreparedFor = $institutionPreparedFor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberofPages()
    {
        return $this->numberofPages;
    }

    /**
     * @param mixed $numberofPages
     *
     * @return Report
     */
    public function setNumberofPages($numberofPages)
    {
        $this->numberofPages = $numberofPages;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReportTitle()
    {
        return $this->reportTitle;
    }

    /**
     * @param mixed $reportTitle
     *
     * @return Report
     */
    public function setReportTitle($reportTitle)
    {
        $this->reportTitle = $reportTitle;
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
     * @return Report
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * @param mixed $uRL
     *
     * @return Report
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param mixed $volume
     *
     * @return Report
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }

}