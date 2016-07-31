<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\Grant as BaseGrant;

/**
 * Grant
 *
 * @ORM\Table(name="grant")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\GrantRepository")
 */
class Grant extends BaseGrant
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
     * @ORM\Column(name="competitive", type="string", length=255, nullable=true, unique=false)
     */
    protected $competitive;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=255, nullable=true, unique=false)
     */
    protected $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="end_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="funding_organization", type="string", length=255, nullable=true, unique=false)
     */
    protected $fundingOrganization;

    /**
     * @var string
     *
     * @ORM\Column(name="funding_renewable", type="string", length=255, nullable=true, unique=false)
     */
    protected $fundingRenewable;

    /**
     * @var string
     *
     * @ORM\Column(name="funding_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $fundingType;

    /**
     * @var string
     *
     * @ORM\Column(name="grant_status", type="string", length=255, nullable=true, unique=false)
     */
    protected $grantStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="grant_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $grantType;

    /**
     * @var string
     *
     * @ORM\Column(name="investigation_role", type="string", length=255, nullable=true, unique=false)
     */
    protected $investigationRole;

    /**
     * @var string
     *
     * @ORM\Column(name="multi_year_details", type="string", length=255, nullable=true, unique=false)
     */
    protected $multiYearDetails;

    /**
     * @var string
     *
     * @ORM\Column(name="other_investigators", type="string", length=255, nullable=true, unique=false)
     */
    protected $otherInvestigators;

    /**
     * @var string
     *
     * @ORM\Column(name="portionof_funding", type="string", length=255, nullable=true, unique=false)
     */
    protected $portionofFunding;

    /**
     * @var string
     *
     * @ORM\Column(name="program_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $programName;

    /**
     * @var string
     *
     * @ORM\Column(name="project_description", type="string", length=255, nullable=true, unique=false)
     */
    protected $projectDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="project_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $projectTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="rolesof_other_investigators", type="string", length=255, nullable=true, unique=false)
     */
    protected $rolesofOtherInvestigators;

    /**
     * @var string
     *
     * @ORM\Column(name="start_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $startDate;

    /**
     * @var string
     *
     * @ORM\Column(name="time_commitment_per_year", type="string", length=255, nullable=true, unique=false)
     */
    protected $timeCommitmentPerYear;

    /**
     * @var string
     *
     * @ORM\Column(name="total_amount", type="string", length=255, nullable=true, unique=false)
     */
    protected $totalAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="year_awarded", type="string", length=255, nullable=true, unique=false)
     */
    protected $yearAwarded;

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

