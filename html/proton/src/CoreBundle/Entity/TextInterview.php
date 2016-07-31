<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\TextInterview as BaseTextInterview;
/**
 * TextInterview
 *
 * @ORM\Table(name="text_interview")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\TextInterviewRepository")
 */
class TextInterview extends BaseTextInterview
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
     * @ORM\Column(name="forum", type="string", length=255, nullable=true, unique=false)
     */
    protected $forum;

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
     * @ORM\Column(name="publication_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $publicationDate;

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

