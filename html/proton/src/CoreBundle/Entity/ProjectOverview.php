<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ProjectOverview as BaseProjectOverview;

/**
 * ProjectOverview
 *
 * @ORM\Table(name="project_overview")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ProjectOverviewRepository")
 */
class ProjectOverview extends BaseProjectOverview
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
     * @ORM\Column(name="academic_abstract", type="string", length=255, nullable=true, unique=false)
     */
    protected $academicAbstract;

    /**
     * @var string
     *
     * @ORM\Column(name="bibliography", type="string", length=255, nullable=true, unique=false)
     */
    protected $bibliography;

    /**
     * @var string
     *
     * @ORM\Column(name="collaborative", type="string", length=255, nullable=true, unique=false)
     */
    protected $collaborative;

    /**
     * @var string
     *
     * @ORM\Column(name="dissemination_strategies", type="string", length=255, nullable=true, unique=false)
     */
    protected $disseminationStrategies;

    /**
     * @var string
     *
     * @ORM\Column(name="high_risk", type="string", length=255, nullable=true, unique=false)
     */
    protected $highRisk;

    /**
     * @var string
     *
     * @ORM\Column(name="international_scope", type="string", length=255, nullable=true, unique=false)
     */
    protected $internationalScope;

    /**
     * @var string
     *
     * @ORM\Column(name="lay_abstract", type="string", length=255, nullable=true, unique=false)
     */
    protected $layAbstract;

    /**
     * @var string
     *
     * @ORM\Column(name="literature_review", type="string", length=255, nullable=true, unique=false)
     */
    protected $literatureReview;

    /**
     * @var string
     *
     * @ORM\Column(name="market_study_results", type="string", length=255, nullable=true, unique=false)
     */
    protected $marketStudyResults;

    /**
     * @var string
     *
     * @ORM\Column(name="methodology", type="string", length=255, nullable=true, unique=false)
     */
    protected $methodology;

    /**
     * @var string
     *
     * @ORM\Column(name="methodology_description", type="string", length=255, nullable=true, unique=false)
     */
    protected $methodologyDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="multiDiscipline", type="string", length=255, nullable=true, unique=false)
     */
    protected $multiDiscipline;

    /**
     * @var string
     *
     * @ORM\Column(name="novelty_innovations", type="string", length=255, nullable=true, unique=false)
     */
    protected $noveltyInnovations;

    /**
     * @var string
     *
     * @ORM\Column(name="objectives", type="string", length=255, nullable=true, unique=false)
     */
    protected $objectives;

    /**
     * @var string
     *
     * @ORM\Column(name="relevance", type="string", length=255, nullable=true, unique=false)
     */
    protected $relevance;

    /**
     * @var string
     *
     * @ORM\Column(name="research_summary", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchSummary;

    /**
     * @var string
     *
     * @ORM\Column(name="scope", type="string", length=255, nullable=true, unique=false)
     */
    protected $scope;

    /**
     * @var string
     *
     * @ORM\Column(name="second_language_lay_abstract", type="string", length=255, nullable=true, unique=false)
     */
    protected $secondLanguageLayAbstract;

    /**
     * @var string
     *
     * @ORM\Column(name="significance", type="string", length=255, nullable=true, unique=false)
     */
    protected $significance;

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