<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\Degree as BaseDegree;
/**
 * Degree
 *
 * @ORM\Table(name="degree")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\DegreeRepository")
 */
class Degree extends BaseDegree
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
     * @ORM\Column(name="degree_major", type="string", length=255, nullable=true, unique=false)
     */
    protected $degreeMajor;

    /**
     * @var string
     *
     * @ORM\Column(name="degree_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $degreeName;

    /**
     * @var string
     *
     * @ORM\Column(name="degree_status", type="string", length=255, nullable=true, unique=false)
     */
    protected $degreeStatus;

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
     * @ORM\Column(name="expected_completion_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $expectedCompletionDate;

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

