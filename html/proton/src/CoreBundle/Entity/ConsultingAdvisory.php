<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ConsultingAdvisory as BaseConsultingAdvisory;
/**
 * ConsultingAdvisory
 *
 * @ORM\Table(name="consulting_advisory")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ConsultingAdvisoryRepository")
 */
class ConsultingAdvisory extends BaseConsultingAdvisory
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
     * @ORM\Column(name="activity_description", type="string", length=255, nullable=true, unique=false)
     */
    protected $activityDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="departmentUnit", type="string", length=255, nullable=true, unique=false)
     */
    protected $departmentUnit;

    /**
     * @var string
     *
     * @ORM\Column(name="end_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="organization", type="string", length=255, nullable=true, unique=false)
     */
    protected $organization;

    /**
     * @var string
     *
     * @ORM\Column(name="organization_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $organizationType;

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

