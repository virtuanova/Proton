<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\JournalReviewingRefereeing as BaseJournalReviewingRefereeing;

/**
 * JournalReviewingRefereeing
 *
 * @ORM\Table(name="journal_reviewing_refereeing")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\JournalReviewingRefereeingRepository")
 */
class JournalReviewingRefereeing extends BaseJournalReviewingRefereeing
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
     * @ORM\Column(name="end_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="journal", type="string", length=255, nullable=true, unique=false)
     */
    protected $journal;

    /**
     * @var string
     *
     * @ORM\Column(name="press", type="string", length=255, nullable=true, unique=false)
     */
    protected $press;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="review_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $reviewType;

    /**
     * @var string
     *
     * @ORM\Column(name="start_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $startDate;

    /**
     * @var string
     *
     * @ORM\Column(name="works_reviewed_refereed_during_time_frame", type="string", length=255, nullable=true, unique=false)
     */
    protected $worksReviewedRefereedDuringTimeFrame;

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