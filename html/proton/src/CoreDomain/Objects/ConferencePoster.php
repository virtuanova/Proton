<?php

namespace CoreDomain\Objects;


/**
 * Class ConferencePoster
 * @package CoreDomain\Objects
 */
class ConferencePoster extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $authoringRole;
    /**
     * @var
     */
    protected $coauthors;
    /**
     * @var
     */
    protected $conferenceDate;
    /**
     * @var
     */
    protected $conferenceName;
    /**
     * @var
     */
    protected $firstListedAuthor;
    /**
     * @var
     */
    protected $researchClassification;
    /**
     * @var
     */
    protected $title;

    /**
     * @return mixed
     */
    public function getAuthoringRole()
    {
        return $this->authoringRole;
    }

    /**
     * @param mixed $authoringRole
     * @return ConferencePoster
     */
    public function setAuthoringRole($authoringRole)
    {
        $this->authoringRole = $authoringRole;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoauthors()
    {
        return $this->coauthors;
    }

    /**
     * @param mixed $coauthors
     * @return ConferencePoster
     */
    public function setCoauthors($coauthors)
    {
        $this->coauthors = $coauthors;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConferenceDate()
    {
        return $this->conferenceDate;
    }

    /**
     * @param mixed $conferenceDate
     * @return ConferencePoster
     */
    public function setConferenceDate($conferenceDate)
    {
        $this->conferenceDate = $conferenceDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConferenceName()
    {
        return $this->conferenceName;
    }

    /**
     * @param mixed $conferenceName
     * @return ConferencePoster
     */
    public function setConferenceName($conferenceName)
    {
        $this->conferenceName = $conferenceName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstListedAuthor()
    {
        return $this->firstListedAuthor;
    }

    /**
     * @param mixed $firstListedAuthor
     * @return ConferencePoster
     */
    public function setFirstListedAuthor($firstListedAuthor)
    {
        $this->firstListedAuthor = $firstListedAuthor;
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
     * @return ConferencePoster
     */
    public function setResearchClassification($researchClassification)
    {
        $this->researchClassification = $researchClassification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return ConferencePoster
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

}