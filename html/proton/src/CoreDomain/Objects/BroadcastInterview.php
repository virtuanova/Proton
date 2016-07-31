<?php

namespace CoreDomain\Objects;


/**
 * Class BroadcastInterview
 * @package CoreDomain\Objects
 */
class BroadcastInterview extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $endDate;
    /**
     * @var
     */
    protected $firstBroadcastDate;
    /**
     * @var
     */
    protected $interviewerFirstName;
    /**
     * @var
     */
    protected $interviewerLastName;
    /**
     * @var
     */
    protected $network;
    /**
     * @var
     */
    protected $program;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $topic;
    /**
     * @var
     */
    protected $uRL;

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     * @return BroadcastInterview
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstBroadcastDate()
    {
        return $this->firstBroadcastDate;
    }

    /**
     * @param mixed $firstBroadcastDate
     * @return BroadcastInterview
     */
    public function setFirstBroadcastDate($firstBroadcastDate)
    {
        $this->firstBroadcastDate = $firstBroadcastDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInterviewerFirstName()
    {
        return $this->interviewerFirstName;
    }

    /**
     * @param mixed $interviewerFirstName
     * @return BroadcastInterview
     */
    public function setInterviewerFirstName($interviewerFirstName)
    {
        $this->interviewerFirstName = $interviewerFirstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInterviewerLastName()
    {
        return $this->interviewerLastName;
    }

    /**
     * @param mixed $interviewerLastName
     * @return BroadcastInterview
     */
    public function setInterviewerLastName($interviewerLastName)
    {
        $this->interviewerLastName = $interviewerLastName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * @param mixed $network
     * @return BroadcastInterview
     */
    public function setNetwork($network)
    {
        $this->network = $network;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * @param mixed $program
     * @return BroadcastInterview
     */
    public function setProgram($program)
    {
        $this->program = $program;
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
     * @return BroadcastInterview
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * @param mixed $topic
     * @return BroadcastInterview
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;
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
     * @return BroadcastInterview
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

}