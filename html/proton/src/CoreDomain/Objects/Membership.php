<?php

namespace CoreDomain\Objects;


/**
 * Class Membership
 * @package CoreDomain\Objects
 */
class Membership extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $membershipEndDate;
    /**
     * @var
     */
    protected $membershipStartDate;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $societyOtherOrganization;

    /**
     * @return mixed
     */
    public function getMembershipEndDate()
    {
        return $this->membershipEndDate;
    }

    /**
     * @param mixed $membershipEndDate
     *
     * @return Membership
     */
    public function setMembershipEndDate($membershipEndDate)
    {
        $this->membershipEndDate = $membershipEndDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMembershipStartDate()
    {
        return $this->membershipStartDate;
    }

    /**
     * @param mixed $membershipStartDate
     *
     * @return Membership
     */
    public function setMembershipStartDate($membershipStartDate)
    {
        $this->membershipStartDate = $membershipStartDate;
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
     * @return Membership
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSocietyOtherOrganization()
    {
        return $this->societyOtherOrganization;
    }

    /**
     * @param mixed $societyOtherOrganization
     *
     * @return Membership
     */
    public function setSocietyOtherOrganization($societyOtherOrganization)
    {
        $this->societyOtherOrganization = $societyOtherOrganization;
        return $this;
    }

}