<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ProjectPartner as BaseProjectPartner;

/**
 * ProjectPartner
 *
 * @ORM\Table(name="project_partner")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ProjectPartnerRepository")
 */
class ProjectPartner extends BaseProjectPartner
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
     * @ORM\Column(name="organization_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $organizationName;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_collaboration_level", type="string", length=255, nullable=true, unique=false)
     */
    protected $partnerCollaborationLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_contact_address", type="string", length=255, nullable=true, unique=false)
     */
    protected $partnerContactAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_contact_email", type="string", length=255, nullable=true, unique=false)
     */
    protected $partnerContactEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_contact_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $partnerContactName;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_contact_telephone", type="string", length=255, nullable=true, unique=false)
     */
    protected $partnerContactTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_inclusion_rationale", type="string", length=255, nullable=true, unique=false)
     */
    protected $partnerInclusionRationale;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $partnerType;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_utilization", type="string", length=255, nullable=true, unique=false)
     */
    protected $partnerUtilization;

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