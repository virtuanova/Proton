<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\GrantApplicationAssessment as BaseGrantApplicationAssessment;

/**
 * GrantApplicationAssessment
 *
 * @ORM\Table(name="grant_application_assessment")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\GrantApplicationAssessmentRepository")
 */
class GrantApplicationAssessment
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
     * @ORM\Column(name="assessment_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $assessmentType;

    /**
     * @var string
     *
     * @ORM\Column(name="departmentDivision", type="string", length=255, nullable=true, unique=false)
     */
    protected $departmentDivision;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionof_grant_scholarship", type="string", length=255, nullable=true, unique=false)
     */
    protected $descriptionofGrantScholarship;

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
     * @ORM\Column(name="institution", type="string", length=255, nullable=true, unique=false)
     */
    protected $institution;

    /**
     * @var string
     *
     * @ORM\Column(name="numberof_applications_assessed", type="string", length=255, nullable=true, unique=false)
     */
    protected $numberofApplicationsAssessed;

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

