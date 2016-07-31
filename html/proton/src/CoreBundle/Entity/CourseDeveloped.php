<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\CourseDeveloped as BaseCourseDeveloped;
/**
 * CourseDeveloped
 *
 * @ORM\Table(name="course_developed")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\CourseDevelopedRepository")
 */
class CourseDeveloped extends BaseCourseDeveloped
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
     * @ORM\Column(name="coDevelopers", type="string", length=255, nullable=true, unique=false)
     */
    protected $coDevelopers;

    /**
     * @var string
     *
     * @ORM\Column(name="course_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $courseTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="date_first_taught", type="string", length=255, nullable=true, unique=false)
     */
    protected $dateFirstTaught;

    /**
     * @var string
     *
     * @ORM\Column(name="institutions_using_course", type="string", length=255, nullable=true, unique=false)
     */
    protected $institutionsUsingCourse;

    /**
     * @var string
     *
     * @ORM\Column(name="organization", type="string", length=255, nullable=true, unique=false)
     */
    protected $organization;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

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

