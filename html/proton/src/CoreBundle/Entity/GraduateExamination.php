<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\GraduateExamination as BaseGraduateExamination;

/**
 * GraduateExamination
 *
 * @ORM\Table(name="graduate_examination")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\GraduateExaminationRepository")
 */
class GraduateExamination extends BaseGraduateExamination
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
     * @ORM\Column(name="date", type="string", length=255, nullable=true, unique=false)
     */
    protected $date;

    /**
     * @var string
     *
     * @ORM\Column(name="departmentDivision", type="string", length=255, nullable=true, unique=false)
     */
    protected $departmentDivision;

    /**
     * @var string
     *
     * @ORM\Column(name="examination_role", type="string", length=255, nullable=true, unique=false)
     */
    protected $examinationRole;

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

