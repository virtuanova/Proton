<?php

namespace CoreDomain\Objects;


/**
 * Class CommitteeMembership
 * @package CoreDomain\Objects
 */
class CommitteeMembership extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $committeeName;
    /**
     * @var
     */
    protected $committeeRole;
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
    protected $membershipType;
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
    public function getCommitteeName()
    {
        return $this->committeeName;
    }

    /**
     * @param mixed $committeeName
     * @return CommitteeMembership
     */
    public function setCommitteeName($committeeName)
    {
        $this->committeeName = $committeeName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommitteeRole()
    {
        return $this->committeeRole;
    }

    /**
     * @param mixed $committeeRole
     * @return CommitteeMembership
     */
    public function setCommitteeRole($committeeRole)
    {
        $this->committeeRole = $committeeRole;
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
     * @return CommitteeMembership
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
     * @return CommitteeMembership
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMembershipType()
    {
        return $this->membershipType;
    }

    /**
     * @param mixed $membershipType
     * @return CommitteeMembership
     */
    public function setMembershipType($membershipType)
    {
        $this->membershipType = $membershipType;
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
     * @return CommitteeMembership
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
     * @return CommitteeMembership
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

}