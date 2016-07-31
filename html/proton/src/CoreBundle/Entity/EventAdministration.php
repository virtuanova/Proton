<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\EventAdministration as BaseEventAdministration;
/**
 * EventAdministration
 *
 * @ORM\Table(name="event_administration")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\EventAdministrationRepository")
 */
class EventAdministration extends BaseEventAdministration
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
     * @ORM\Column(name="activity_end_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $activityEndDate;

    /**
     * @var string
     *
     * @ORM\Column(name="activity_start_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $activityStartDate;

    /**
     * @var string
     *
     * @ORM\Column(name="administrative_role", type="string", length=255, nullable=true, unique=false)
     */
    protected $administrativeRole;

    /**
     * @var string
     *
     * @ORM\Column(name="event_description", type="string", length=255, nullable=true, unique=false)
     */
    protected $eventDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="event_end_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $eventEndDate;

    /**
     * @var string
     *
     * @ORM\Column(name="event_start_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $eventStartDate;

    /**
     * @var string
     *
     * @ORM\Column(name="event_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $eventType;

    /**
     * @var string
     *
     * @ORM\Column(name="primary_event_organizaer", type="string", length=255, nullable=true, unique=false)
     */
    protected $primaryEventOrganizaer;

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

