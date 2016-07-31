<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\EmployeeSupervision as BaseEmployeeSupervision;
/**
 * EmployeeSupervision
 *
 * @ORM\Table(name="employee_supervision")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\EmployeeSupervisionRepository")
 */
class EmployeeSupervision extends BaseEmployeeSupervision
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
     * @ORM\Column(name="coSupervisors", type="string", length=255, nullable=true, unique=false)
     */
    protected $coSupervisors;

    /**
     * @var string
     *
     * @ORM\Column(name="consent_obtainedfor_name_release", type="string", length=255, nullable=true, unique=false)
     */
    protected $consentObtainedforNameRelease;

    /**
     * @var string
     *
     * @ORM\Column(name="degree_subject", type="string", length=255, nullable=true, unique=false)
     */
    protected $degreeSubject;

    /**
     * @var string
     *
     * @ORM\Column(name="employee_first_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $employeeFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="employee_last_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $employeeLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="employee_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $employeeType;

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
     * @ORM\Column(name="supervisory_role", type="string", length=255, nullable=true, unique=false)
     */
    protected $supervisoryRole;

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


