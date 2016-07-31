<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\CoursebasedDegreeSupervision as BaseCourseBasedDegreeSupervision;
/**
 * CoursebasedDegreeSupervision
 *
 * @ORM\Table(name="coursebased_degree_supervision")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\CoursebasedDegreeSupervisionRepository")
 */
class CoursebasedDegreeSupervision extends BaseCourseBasedDegreeSupervision
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
     * @ORM\Column(name="date_degree_received_expected", type="string", length=255, nullable=true, unique=false)
     */
    protected $dateDegreeReceivedExpected;

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
     * @ORM\Column(name="output_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $outputTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="present_positionof_former_student", type="string", length=255, nullable=true, unique=false)
     */
    protected $presentPositionofFormerStudent;

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
     * @ORM\Column(name="student_first_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $studentFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="student_identifier", type="string", length=255, nullable=true, unique=false)
     */
    protected $studentIdentifier;

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

