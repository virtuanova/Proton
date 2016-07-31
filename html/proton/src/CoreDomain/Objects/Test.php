<?php

namespace CoreDomain\Objects;


/**
 * Class Test
 * @package CoreDomain\Objects
 */
class Test extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $coauthors;
    /**
     * @var
     */
    protected $dateFirstUsed;
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
    public function getCoauthors()
    {
        return $this->coauthors;
    }

    /**
     * @param mixed $coauthors
     *
     * @return Test
     */
    public function setCoauthors($coauthors)
    {
        $this->coauthors = $coauthors;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateFirstUsed()
    {
        return $this->dateFirstUsed;
    }

    /**
     * @param mixed $dateFirstUsed
     *
     * @return Test
     */
    public function setDateFirstUsed($dateFirstUsed)
    {
        $this->dateFirstUsed = $dateFirstUsed;
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
     *
     * @return Test
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
     *
     * @return Test
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
     *
     * @return Test
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

}