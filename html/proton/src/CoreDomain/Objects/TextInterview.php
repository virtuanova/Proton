<?php

namespace CoreDomain\Objects;


/**
 * Class TextInterview
 * @package CoreDomain\Objects
 */
class TextInterview extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $forum;
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
    protected $publicationDate;
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
    public function getForum()
    {
        return $this->forum;
    }

    /**
     * @param mixed $forum
     *
     * @return TextInterview
     */
    public function setForum($forum)
    {
        $this->forum = $forum;
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
     *
     * @return TextInterview
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
     *
     * @return TextInterview
     */
    public function setInterviewerLastName($interviewerLastName)
    {
        $this->interviewerLastName = $interviewerLastName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * @param mixed $publicationDate
     *
     * @return TextInterview
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
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
     * @return TextInterview
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
     *
     * @return TextInterview
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
     *
     * @return TextInterview
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

}