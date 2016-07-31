<?php

namespace CoreDomain\Objects;


/**
 * Class ReviewerSuggestion
 * @package CoreDomain\Objects
 */
class ReviewerSuggestion extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $cASRAIID;
    /**
     * @var
     */
    protected $presentedName;
    /**
     * @var
     */
    protected $primaryAddress;
    /**
     * @var
     */
    protected $primaryEmail;
    /**
     * @var
     */
    protected $primaryPhone;
    /**
     * @var
     */
    protected $reviewerConflict;
    /**
     * @var
     */
    protected $reviewerSuggestionRationale;
    /**
     * @var
     */
    protected $reviewerSuggestionType;

    /**
     * @return mixed
     */
    public function getCASRAIID()
    {
        return $this->cASRAIID;
    }

    /**
     * @param mixed $cASRAIID
     *
     * @return ReviewerSuggestion
     */
    public function setCASRAIID($cASRAIID)
    {
        $this->cASRAIID = $cASRAIID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPresentedName()
    {
        return $this->presentedName;
    }

    /**
     * @param mixed $presentedName
     *
     * @return ReviewerSuggestion
     */
    public function setPresentedName($presentedName)
    {
        $this->presentedName = $presentedName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrimaryAddress()
    {
        return $this->primaryAddress;
    }

    /**
     * @param mixed $primaryAddress
     *
     * @return ReviewerSuggestion
     */
    public function setPrimaryAddress($primaryAddress)
    {
        $this->primaryAddress = $primaryAddress;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrimaryEmail()
    {
        return $this->primaryEmail;
    }

    /**
     * @param mixed $primaryEmail
     *
     * @return ReviewerSuggestion
     */
    public function setPrimaryEmail($primaryEmail)
    {
        $this->primaryEmail = $primaryEmail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrimaryPhone()
    {
        return $this->primaryPhone;
    }

    /**
     * @param mixed $primaryPhone
     *
     * @return ReviewerSuggestion
     */
    public function setPrimaryPhone($primaryPhone)
    {
        $this->primaryPhone = $primaryPhone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReviewerConflict()
    {
        return $this->reviewerConflict;
    }

    /**
     * @param mixed $reviewerConflict
     *
     * @return ReviewerSuggestion
     */
    public function setReviewerConflict($reviewerConflict)
    {
        $this->reviewerConflict = $reviewerConflict;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReviewerSuggestionRationale()
    {
        return $this->reviewerSuggestionRationale;
    }

    /**
     * @param mixed $reviewerSuggestionRationale
     *
     * @return ReviewerSuggestion
     */
    public function setReviewerSuggestionRationale($reviewerSuggestionRationale)
    {
        $this->reviewerSuggestionRationale = $reviewerSuggestionRationale;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReviewerSuggestionType()
    {
        return $this->reviewerSuggestionType;
    }

    /**
     * @param mixed $reviewerSuggestionType
     *
     * @return ReviewerSuggestion
     */
    public function setReviewerSuggestionType($reviewerSuggestionType)
    {
        $this->reviewerSuggestionType = $reviewerSuggestionType;
        return $this;
    }

}