<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\OfficeHeld as BaseOfficeHeld;

/**
 * OfficeHeld
 *
 * @ORM\Table(name="office_held")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\OfficeHeldRepository")
 */
class OfficeHeld extends BaseOfficeHeld
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
     * @ORM\Column(name="institution", type="string", length=255, nullable=true, unique=false)
     */
    protected $institution;

    /**
     * @var string
     *
     * @ORM\Column(name="office_held_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $officeHeldType;

    /**
     * @var string
     *
     * @ORM\Column(name="office_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $officeName;

    /**
     * @var string
     *
     * @ORM\Column(name="other_organization", type="string", length=255, nullable=true, unique=false)
     */
    protected $otherOrganization;

    /**
     * @var string
     *
     * @ORM\Column(name="start_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $startDate;

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