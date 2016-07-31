<?php

namespace CoreDomain\Objects;


/**
 * Class LanguageCompetency
 * @package CoreDomain\Objects
 */
class LanguageCompetency extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $canPeerReview;
    /**
     * @var
     */
    protected $canRead;
    /**
     * @var
     */
    protected $canSpeak;
    /**
     * @var
     */
    protected $canUnderstandSpoken;
    /**
     * @var
     */
    protected $canWrite;
    /**
     * @var
     */
    protected $language;

    /**
     * @return mixed
     */
    public function getCanPeerReview()
    {
        return $this->canPeerReview;
    }

    /**
     * @param mixed $canPeerReview
     *
     * @return LanguageCompetency
     */
    public function setCanPeerReview($canPeerReview)
    {
        $this->canPeerReview = $canPeerReview;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCanRead()
    {
        return $this->canRead;
    }

    /**
     * @param mixed $canRead
     *
     * @return LanguageCompetency
     */
    public function setCanRead($canRead)
    {
        $this->canRead = $canRead;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCanSpeak()
    {
        return $this->canSpeak;
    }

    /**
     * @param mixed $canSpeak
     *
     * @return LanguageCompetency
     */
    public function setCanSpeak($canSpeak)
    {
        $this->canSpeak = $canSpeak;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCanUnderstandSpoken()
    {
        return $this->canUnderstandSpoken;
    }

    /**
     * @param mixed $canUnderstandSpoken
     *
     * @return LanguageCompetency
     */
    public function setCanUnderstandSpoken($canUnderstandSpoken)
    {
        $this->canUnderstandSpoken = $canUnderstandSpoken;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCanWrite()
    {
        return $this->canWrite;
    }

    /**
     * @param mixed $canWrite
     *
     * @return LanguageCompetency
     */
    public function setCanWrite($canWrite)
    {
        $this->canWrite = $canWrite;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param mixed $language
     *
     * @return LanguageCompetency
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

}