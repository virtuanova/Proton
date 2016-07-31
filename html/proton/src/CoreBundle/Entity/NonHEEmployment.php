<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\NonHEEmployment as BaseNonHEEmployment;

/**
 * NonHEEmployment
 *
 * @ORM\Table(name="non_he_employment")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\NonHEEmploymentRepository")
 */
class NonHEEmployment extends BaseNonHEEmployment
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
     * @ORM\Column(name="country", type="string", length=255, nullable=true, unique=false)
     */
    protected $country;

    /**
     * @var string
     *
     * @ORM\Column(name="employer", type="string", length=255, nullable=true, unique=false)
     */
    protected $employer;

    /**
     * @var string
     *
     * @ORM\Column(name="employer_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $employerType;

    /**
     * @var string
     *
     * @ORM\Column(name="end_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255, nullable=true, unique=false)
     */
    protected $position;

    /**
     * @var string
     *
     * @ORM\Column(name="position_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $positionType;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="start_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $startDate;

    /**
     * @var string
     *
     * @ORM\Column(name="unitDivision", type="string", length=255, nullable=true, unique=false)
     */
    protected $unitDivision;

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
