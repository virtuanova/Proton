<?php

namespace CoreDomain\Objects;


/**
 * Class Mentoring
 * @package CoreDomain\Objects
 */
class Mentoring extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $enddate;
    /**
     * @var
     */
    protected $nameofProtege;
    /**
     * @var
     */
    protected $startDate;
    /**
     * @var
     */
    protected $topicofMentorship;

    /**
     * @return mixed
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * @param mixed $enddate
     *
     * @return Mentoring
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNameofProtege()
    {
        return $this->nameofProtege;
    }

    /**
     * @param mixed $nameofProtege
     *
     * @return Mentoring
     */
    public function setNameofProtege($nameofProtege)
    {
        $this->nameofProtege = $nameofProtege;
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
     * @return Mentoring
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTopicofMentorship()
    {
        return $this->topicofMentorship;
    }

    /**
     * @param mixed $topicofMentorship
     *
     * @return Mentoring
     */
    public function setTopicofMentorship($topicofMentorship)
    {
        $this->topicofMentorship = $topicofMentorship;
        return $this;
    }

}