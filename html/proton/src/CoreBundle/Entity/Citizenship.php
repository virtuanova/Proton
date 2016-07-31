<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\Citizenship as BaseCitizenship;
/**
 * Citizenship
 *
 * @ORM\Table(name="citizenship")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\CitizenshipRepository")
 */
class Citizenship extends BaseCitizenship
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
     * @ORM\Column(name="appliedfor_permanent_residency", type="string", length=255, nullable=true, unique=false)
     */
    protected $appliedforPermanentResidency;

    /**
     * @var string
     *
     * @ORM\Column(name="citizenship_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $citizenshipType;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true, unique=false)
     */
    protected $country;

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

