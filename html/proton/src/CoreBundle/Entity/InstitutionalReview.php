<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\InstitutionalReview as BaseInstitutionalReview;

/**
 * InstitutionalReview
 *
 * @ORM\Table(name="institutional_review")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\InstitutionalReviewRepository")
 */
class InstitutionalReview extends BaseInstitutionalReview
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
     * @ORM\Column(name="departmentDivision", type="string", length=255, nullable=true, unique=false)
     */
    protected $departmentDivision;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionof_reviewing_activity", type="string", length=255, nullable=true, unique=false)
     */
    protected $descriptionofReviewingActivity;

    /**
     * @var string
     *
     * @ORM\Column(name="end_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="institution_reveiwed", type="string", length=255, nullable=true, unique=false)
     */
    protected $institutionReveiwed;

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