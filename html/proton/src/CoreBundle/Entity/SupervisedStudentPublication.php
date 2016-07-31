<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\SupervisedStudentPublication as BaseSupervisedStudentPublication;
/**
 * SupervisedStudentPublication
 *
 * @ORM\Table(name="supervised_student_publication")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\SupervisedStudentPublicationRepository")
 */
class SupervisedStudentPublication extends BaseSupervisedStudentPublication
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
     * @ORM\Column(name="issue", type="string", length=255, nullable=true, unique=false)
     */
    protected $issue;

    /**
     * @var string
     *
     * @ORM\Column(name="journal", type="string", length=255, nullable=true, unique=false)
     */
    protected $journal;

    /**
     * @var string
     *
     * @ORM\Column(name="page_range_from", type="string", length=255, nullable=true, unique=false)
     */
    protected $pageRangeFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="page_range_to", type="string", length=255, nullable=true, unique=false)
     */
    protected $pageRangeTo;

    /**
     * @var string
     *
     * @ORM\Column(name="publication_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $publicationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="publication_location", type="string", length=255, nullable=true, unique=false)
     */
    protected $publicationLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="publication_status", type="string", length=255, nullable=true, unique=false)
     */
    protected $publicationStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="refereed", type="string", length=255, nullable=true, unique=false)
     */
    protected $refereed;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="student_full_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $studentFullName;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true, unique=false)
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true, unique=false)
     */
    protected $url;

    /**
     * @var string
     *
     * @ORM\Column(name="volume", type="string", length=255, nullable=true, unique=false)
     */
    protected $volume;

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


