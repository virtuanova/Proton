<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ResearchbasedDegreeSupervision as BaseResearchbasedDegreeSupervision;
/**
 * ResearchbasedDegreeSupervision
 *
 * @ORM\Table(name="researchbased_degree_supervision")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ResearchbasedDegreeSupervisionRepository")
 */
class ResearchbasedDegreeSupervision extends BaseResearchbasedDegreeSupervision
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
     * @ORM\Column(name="academic_institution", type="string", length=255, nullable=true, unique=false)
     */
    protected $academicInstitution;

    /**
     * @var string
     *
     * @ORM\Column(name="consent_obtainedfor_name_release", type="string", length=255, nullable=true, unique=false)
     */
    protected $consentObtainedforNameRelease;

    /**
     * @var string
     *
     * @ORM\Column(name="degree_status", type="string", length=255, nullable=true, unique=false)
     */
    protected $degreeStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="degree_subject", type="string", length=255, nullable=true, unique=false)
     */
    protected $degreeSubject;

    /**
     * @var string
     *
     * @ORM\Column(name="degree_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $degreeType;

    /**
     * @var string
     *
     * @ORM\Column(name="end_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="start_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $startDate;

    /**
     * @var string
     *
     * @ORM\Column(name="student_first_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $studentFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="student_last_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $studentLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="supervisory_role", type="string", length=255, nullable=true, unique=false)
     */
    protected $supervisoryRole;

    /**
     * @var string
     *
     * @ORM\Column(name="thesis_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $thesisTitle;

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