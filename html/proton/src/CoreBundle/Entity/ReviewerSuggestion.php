<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ReviewerSuggestion as BaseReviewerSuggestion;
/**
 * ReviewerSuggestion
 *
 * @ORM\Table(name="reviewer_suggestion")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ReviewerSuggestionRepository")
 */
class ReviewerSuggestion extends BaseReviewerSuggestion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="proj_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $projId;

    /**
     * @var string
     *
     * @ORM\Column(name="c_asraiid", type="string", length=255, nullable=true, unique=false)
     */
    protected $cASRAIID;

    /**
     * @var string
     *
     * @ORM\Column(name="presented_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $presentedName;

    /**
     * @var string
     *
     * @ORM\Column(name="primary_address", type="string", length=255, nullable=true, unique=false)
     */
    protected $primaryAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="primary_email", type="string", length=255, nullable=true, unique=false)
     */
    protected $primaryEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="primary_phone", type="string", length=255, nullable=true, unique=false)
     */
    protected $primaryPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="reviewer_conflict", type="string", length=255, nullable=true, unique=false)
     */
    protected $reviewerConflict;

    /**
     * @var string
     *
     * @ORM\Column(name="reviewer_suggestion_rationale", type="string", length=255, nullable=true, unique=false)
     */
    protected $reviewerSuggestionRationale;

    /**
     * @var string
     *
     * @ORM\Column(name="reviewer_suggestion_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $reviewerSuggestionType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_updated_at", type="datetime")
     */
    protected $lastUpdatedAt;

}