<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ProgramDeveloped as BaseProgramDeveloped;

/**
 * ProgramDeveloped
 *
 * @ORM\Table(name="program_developed")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ProgramDevelopedRepository")
 */
class ProgramDeveloped extends BaseProgramDeveloped
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
     * @ORM\Column(name="date_first_taught", type="string", length=255, nullable=true, unique=false)
     */
    protected $dateFirstTaught;

    /**
     * @var string
     *
     * @ORM\Column(name="degree_level", type="string", length=255, nullable=true, unique=false)
     */
    protected $degreeLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="degree_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $degreeType;

    /**
     * @var string
     *
     * @ORM\Column(name="organization", type="string", length=255, nullable=true, unique=false)
     */
    protected $organization;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_organizations", type="string", length=255, nullable=true, unique=false)
     */
    protected $partnerOrganizations;

    /**
     * @var string
     *
     * @ORM\Column(name="program_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $programTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="uniqueor_innovative_characteristics", type="string", length=255, nullable=true, unique=false)
     */
    protected $uniqueorInnovativeCharacteristics;

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