<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\Report as BaseReport;

/**
 * Report
 *
 * @ORM\Table(name="report")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ReportRepository")
 */
class Report extends BaseReport
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
     * @ORM\Column(name="authoring_role", type="string", length=255, nullable=true, unique=false)
     */
    protected $authoringRole;

    /**
     * @var string
     *
     * @ORM\Column(name="coAuthorsEditors", type="string", length=255, nullable=true, unique=false)
     */
    protected $coAuthorsEditors;

    /**
     * @var string
     *
     * @ORM\Column(name="date_submitted", type="string", length=255, nullable=true, unique=false)
     */
    protected $dateSubmitted;

    /**
     * @var string
     *
     * @ORM\Column(name="first_listed_author_editor", type="string", length=255, nullable=true, unique=false)
     */
    protected $firstListedAuthorEditor;

    /**
     * @var string
     *
     * @ORM\Column(name="institution_prepared_for", type="string", length=255, nullable=true, unique=false)
     */
    protected $institutionPreparedFor;

    /**
     * @var string
     *
     * @ORM\Column(name="numberof_pages", type="string", length=255, nullable=true, unique=false)
     */
    protected $numberofPages;

    /**
     * @var string
     *
     * @ORM\Column(name="report_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $reportTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

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