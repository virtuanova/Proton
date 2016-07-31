<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\NonresearchPresentation as BaseNonresearchPresentation;

/**
 * NonresearchPresentation
 *
 * @ORM\Table(name="nonresearch_presentation")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\NonresearchPresentationRepository")
 */
class NonresearchPresentation extends BaseNonresearchPresentation
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
     * @ORM\Column(name="co_presenters", type="string", length=255, nullable=true, unique=false)
     */
    protected $coPresenters;

    /**
     * @var string
     *
     * @ORM\Column(name="competitive", type="string", length=255, nullable=true, unique=false)
     */
    protected $competitive;

    /**
     * @var string
     *
     * @ORM\Column(name="conference_event", type="string", length=255, nullable=true, unique=false)
     */
    protected $conferenceEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="conference_event_location", type="string", length=255, nullable=true, unique=false)
     */
    protected $conferenceEventLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="invited", type="string", length=255, nullable=true, unique=false)
     */
    protected $invited;

    /**
     * @var string
     *
     * @ORM\Column(name="keynote", type="string", length=255, nullable=true, unique=false)
     */
    protected $keynote;

    /**
     * @var string
     *
     * @ORM\Column(name="organization_presentedto", type="string", length=255, nullable=true, unique=false)
     */
    protected $organizationPresentedto;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $presentationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true, unique=false)
     */
    protected $title;

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