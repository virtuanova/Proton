<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ProjectParticipant as BaseProjectParticipant;

/**
 * ProjectParticipant
 *
 * @ORM\Table(name="project_participant")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ProjectParticipantRepository")
 */
class ProjectParticipant extends BaseProjectParticipant
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
     * @ORM\Column(name="family_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $familyName;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="funding_history", type="string", length=255, nullable=true, unique=false)
     */
    protected $fundingHistory;

    /**
     * @var string
     *
     * @ORM\Column(name="inclusion_rationale", type="string", length=255, nullable=true, unique=false)
     */
    protected $inclusionRationale;

    /**
     * @var string
     *
     * @ORM\Column(name="institution", type="string", length=255, nullable=true, unique=false)
     */
    protected $institution;

    /**
     * @var string
     *
     * @ORM\Column(name="involvedin_activity_design", type="string", length=255, nullable=true, unique=false)
     */
    protected $involvedinActivityDesign;

    /**
     * @var string
     *
     * @ORM\Column(name="participant_collabration_level", type="string", length=255, nullable=true, unique=false)
     */
    protected $participantCollabrationLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="participant_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $participantType;

    /**
     * @var string
     *
     * @ORM\Column(name="participant_utilization", type="string", length=255, nullable=true, unique=false)
     */
    protected $participantUtilization;

    /**
     * @var string
     *
     * @ORM\Column(name="salutation", type="string", length=255, nullable=true, unique=false)
     */
    protected $salutation;

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