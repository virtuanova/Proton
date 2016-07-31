<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\Mentoring as BaseMentoring;

/**
 * Mentoring
 *
 * @ORM\Table(name="mentoring")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\MentoringRepository")
 */
class Mentoring extends BaseMentoring
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
     * @ORM\Column(name="enddate", type="string", length=255, nullable=true, unique=false)
     */
    protected $enddate;

    /**
     * @var string
     *
     * @ORM\Column(name="nameof_protege", type="string", length=255, nullable=true, unique=false)
     */
    protected $nameofProtege;

    /**
     * @var string
     *
     * @ORM\Column(name="start_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $startDate;

    /**
     * @var string
     *
     * @ORM\Column(name="topic_of_mentor_ship", type="string", length=255, nullable=true, unique=false)
     */
    protected $topicofMentorship;

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

