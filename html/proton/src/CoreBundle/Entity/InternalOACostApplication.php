<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\InternalOACostApplication as BaseInternalOACostApplicatiom;

/**
 * InternalOACostApplication
 *
 * @ORM\Table(name="internal_oa_cost_application")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\InternalOACostApplicationRepository")
 */
class InternalOACostApplication extends BaseInternalOACostApplicatiom
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
     * @ORM\Column(name="author_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $authorID;

    /**
     * @var string
     *
     * @ORM\Column(name="author_idtype", type="string", length=255, nullable=true, unique=false)
     */
    protected $authorIDType;

    /**
     * @var string
     *
     * @ORM\Column(name="author_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $authorName;

    /**
     * @var string
     *
     * @ORM\Column(name="author_organisational_unit", type="string", length=255, nullable=true, unique=false)
     */
    protected $authorOrganisationalUnit;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=255, nullable=true, unique=false)
     */
    protected $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255, nullable=true, unique=false)
     */
    protected $date;

    /**
     * @var string
     *
     * @ORM\Column(name="estimated_charge", type="string", length=255, nullable=true, unique=false)
     */
    protected $estimatedCharge;

    /**
     * @var string
     *
     * @ORM\Column(name="external_notes", type="string", length=255, nullable=true, unique=false)
     */
    protected $externalNotes;

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

