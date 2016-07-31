<?php

namespace CoreDomain\Objects;


/**
 * Class Litigation
 * @package CoreDomain\Objects
 */
class Litigation extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $caseName;
    /**
     * @var
     */
    protected $court;
    /**
     * @var
     */
    protected $keyLegalIssues;
    /**
     * @var
     */
    protected $personActedFor;
    /**
     * @var
     */
    protected $year;

    /**
     * @return mixed
     */
    public function getCaseName()
    {
        return $this->caseName;
    }

    /**
     * @param mixed $caseName
     *
     * @return Litigation
     */
    public function setCaseName($caseName)
    {
        $this->caseName = $caseName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCourt()
    {
        return $this->court;
    }

    /**
     * @param mixed $court
     *
     * @return Litigation
     */
    public function setCourt($court)
    {
        $this->court = $court;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKeyLegalIssues()
    {
        return $this->keyLegalIssues;
    }

    /**
     * @param mixed $keyLegalIssues
     *
     * @return Litigation
     */
    public function setKeyLegalIssues($keyLegalIssues)
    {
        $this->keyLegalIssues = $keyLegalIssues;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPersonActedFor()
    {
        return $this->personActedFor;
    }

    /**
     * @param mixed $personActedFor
     *
     * @return Litigation
     */
    public function setPersonActedFor($personActedFor)
    {
        $this->personActedFor = $personActedFor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     *
     * @return Litigation
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

}