<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\EventParticipation as BaseEventParticipation;
/**
 * EventParticipation
 *
 * @ORM\Table(name="event_participation")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\EventParticipationRepository")
 */
class EventParticipation extends BaseEventParticipation
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
     * @ORM\Column(name="event_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $eventDate;

    /**
     * @var string
     *
     * @ORM\Column(name="event_description", type="string", length=255, nullable=true, unique=false)
     */
    protected $eventDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="event_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $eventType;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

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

