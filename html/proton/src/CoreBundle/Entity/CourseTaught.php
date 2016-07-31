<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\CourseTaught as BaseCourseTaught;
/**
 * CourseTaught
 *
 * @ORM\Table(name="course_taught")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\CourseTaughtRepository")
 */
class CourseTaught extends BaseCourseTaught
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
     * @ORM\Column(name="academic_session", type="string", length=255, nullable=true, unique=false)
     */
    protected $academicSession;

    /**
     * @var string
     *
     * @ORM\Column(name="coInstructors", type="string", length=255, nullable=true, unique=false)
     */
    protected $coInstructors;

    /**
     * @var string
     *
     * @ORM\Column(name="course_code", type="string", length=255, nullable=true, unique=false)
     */
    protected $courseCode;

    /**
     * @var string
     *
     * @ORM\Column(name="course_level", type="string", length=255, nullable=true, unique=false)
     */
    protected $courseLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="course_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $courseTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="end_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="lab_hours", type="string", length=255, nullable=true, unique=false)
     */
    protected $labHours;

    /**
     * @var string
     *
     * @ORM\Column(name="lecture_hours", type="string", length=255, nullable=true, unique=false)
     */
    protected $lectureHours;

    /**
     * @var string
     *
     * @ORM\Column(name="nameof_institution", type="string", length=255, nullable=true, unique=false)
     */
    protected $nameofInstitution;

    /**
     * @var string
     *
     * @ORM\Column(name="numberof_credits", type="string", length=255, nullable=true, unique=false)
     */
    protected $numberofCredits;

    /**
     * @var string
     *
     * @ORM\Column(name="numberof_students", type="string", length=255, nullable=true, unique=false)
     */
    protected $numberofStudents;

    /**
     * @var string
     *
     * @ORM\Column(name="other_contact_hours", type="string", length=255, nullable=true, unique=false)
     */
    protected $otherContactHours;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="section", type="string", length=255, nullable=true, unique=false)
     */
    protected $section;

    /**
     * @var string
     *
     * @ORM\Column(name="start_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $startDate;

    /**
     * @var string
     *
     * @ORM\Column(name="tutorial_hours", type="string", length=255, nullable=true, unique=false)
     */
    protected $tutorialHours;

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

