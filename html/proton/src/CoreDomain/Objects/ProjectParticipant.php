<?php

namespace CoreDomain\Objects;


/**
 * Class ProjectParticipant
 * @package CoreDomain\Objects
 */
class ProjectParticipant extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $CASRAIID;
    /**
     * @var
     */
    protected $familyName;
    /**
     * @var
     */
    protected $firstName;
    /**
     * @var
     */
    protected $fundingHistory;
    /**
     * @var
     */
    protected $inclusionRationale;
    /**
     * @var
     */
    protected $institution;
    /**
     * @var
     */
    protected $involvedinActivityDesign;
    /**
     * @var
     */
    protected $participantCollabrationLevel;
    /**
     * @var
     */
    protected $participantType;
    /**
     * @var
     */
    protected $participantUtilization;
    /**
     * @var
     */
    protected $salutation;

    /**
     * @return mixed
     */
    public function getCASRAIID()
    {
        return $this->CASRAIID;
    }

    /**
     * @param mixed $CASRAIID
     *
     * @return ProjectParticipant
     */
    public function setCASRAIID($CASRAIID)
    {
        $this->CASRAIID = $CASRAIID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * @param mixed $familyName
     *
     * @return ProjectParticipant
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     *
     * @return ProjectParticipant
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFundingHistory()
    {
        return $this->fundingHistory;
    }

    /**
     * @param mixed $fundingHistory
     *
     * @return ProjectParticipant
     */
    public function setFundingHistory($fundingHistory)
    {
        $this->fundingHistory = $fundingHistory;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInclusionRationale()
    {
        return $this->inclusionRationale;
    }

    /**
     * @param mixed $inclusionRationale
     *
     * @return ProjectParticipant
     */
    public function setInclusionRationale($inclusionRationale)
    {
        $this->inclusionRationale = $inclusionRationale;
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
     * @return ProjectParticipant
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvolvedinActivityDesign()
    {
        return $this->involvedinActivityDesign;
    }

    /**
     * @param mixed $involvedinActivityDesign
     *
     * @return ProjectParticipant
     */
    public function setInvolvedinActivityDesign($involvedinActivityDesign)
    {
        $this->involvedinActivityDesign = $involvedinActivityDesign;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getParticipantCollabrationLevel()
    {
        return $this->participantCollabrationLevel;
    }

    /**
     * @param mixed $participantCollabrationLevel
     *
     * @return ProjectParticipant
     */
    public function setParticipantCollabrationLevel($participantCollabrationLevel)
    {
        $this->participantCollabrationLevel = $participantCollabrationLevel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getParticipantType()
    {
        return $this->participantType;
    }

    /**
     * @param mixed $participantType
     *
     * @return ProjectParticipant
     */
    public function setParticipantType($participantType)
    {
        $this->participantType = $participantType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getParticipantUtilization()
    {
        return $this->participantUtilization;
    }

    /**
     * @param mixed $participantUtilization
     *
     * @return ProjectParticipant
     */
    public function setParticipantUtilization($participantUtilization)
    {
        $this->participantUtilization = $participantUtilization;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @param mixed $salutation
     *
     * @return ProjectParticipant
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;
        return $this;
    }

}