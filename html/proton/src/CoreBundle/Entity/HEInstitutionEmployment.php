<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\HEInstitutionEmployment as BaseHEInstitutionEmployment;

/**
 * HEInstitutionEmployment
 *
 * @ORM\Table(name="he_institution_employment")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\HEInstitutionEmploymentRepository")
 */
class HEInstitutionEmployment extends BaseHEInstitutionEmployment
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
     * @ORM\Column(name="campus", type="string", length=255, nullable=true, unique=false)
     */
    protected $campus;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true, unique=false)
     */
    protected $country;

    /**
     * @var string
     *
     * @ORM\Column(name="departmentUnitDivision", type="string", length=255, nullable=true, unique=false)
     */
    protected $departmentUnitDivision;

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
     * @ORM\Column(name="institution_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $institutionType;

    /**
     * @var string
     *
     * @ORM\Column(name="month_year_tenure_achieved", type="string", length=255, nullable=true, unique=false)
     */
    protected $monthYearTenureAchieved;

    /**
     * @var string
     *
     * @ORM\Column(name="position_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $positionTitle;

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
     * @ORM\Column(name="tenured_position", type="string", length=255, nullable=true, unique=false)
     */
    protected $tenuredPosition;

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