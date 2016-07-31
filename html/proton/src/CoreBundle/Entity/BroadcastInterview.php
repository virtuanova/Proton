<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\BroadcastInterview as BaseBroadcastInterview;
/**
 * BroadcastInterview
 *
 * @ORM\Table(name="broadcast_interview")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\BroadcastInterviewRepository")
 */
class BroadcastInterview extends BaseBroadcastInterview
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
     * @ORM\Column(name="first_broadcast_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $firstBroadcastDate;

    /**
     * @var string
     *
     * @ORM\Column(name="interviewer_first_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $interviewerFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="interviewer_last_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $interviewerLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="network", type="string", length=255, nullable=true, unique=false)
     */
    protected $network;

    /**
     * @var string
     *
     * @ORM\Column(name="program", type="string", length=255, nullable=true, unique=false)
     */
    protected $program;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="topic", type="string", length=255, nullable=true, unique=false)
     */
    protected $topic;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true, unique=false)
     */
    protected $url;

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

