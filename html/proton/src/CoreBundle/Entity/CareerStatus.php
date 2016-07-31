<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\CareerStatus as BaseCareerStatus;
/**
 * CareerStatus
 *
 * @ORM\Table(name="career_status")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\CareerStatusRepository")
 */
class CareerStatus extends BaseCareerStatus
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
     * @ORM\Column(name="career_stage", type="string", length=255, nullable=true, unique=false)
     */
    protected $careerStage;

    /**
     * @var string
     *
     * @ORM\Column(name="research_career_start", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchCareerStart;

    /**
     * @var string
     *
     * @ORM\Column(name="research_centre", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchCentre;

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

