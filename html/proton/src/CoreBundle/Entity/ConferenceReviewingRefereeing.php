<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ConferenceReviewingRefereeing as BaseConferenceReviewingRefereeing;
/**
 * ConferenceReviewingRefereeing
 *
 * @ORM\Table(name="conference_reviewing_refereeing")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ConferenceReviewingRefereeingRepository")
 */
class ConferenceReviewingRefereeing extends BaseConferenceReviewingRefereeing
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
     * @ORM\Column(name="conference", type="string", length=255, nullable=true, unique=false)
     */
    protected $conference;

    /**
     * @var string
     *
     * @ORM\Column(name="conference_host", type="string", length=255, nullable=true, unique=false)
     */
    protected $conferenceHost;

    /**
     * @var string
     *
     * @ORM\Column(name="end_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $endDate;

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

