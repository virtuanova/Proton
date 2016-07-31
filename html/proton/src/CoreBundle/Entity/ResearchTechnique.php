<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ResearchTechnique as BaseResearchTechnique;
/**
 * ResearchTechnique
 *
 * @ORM\Table(name="research_technique")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ResearchTechniqueRepository")
 */
class ResearchTechnique extends BaseResearchTechnique
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
     * @ORM\Column(name="description", type="string", length=255, nullable=true, unique=false)
     */
    protected $description;

    /**
     * @var string
     *
     * @ORM\Column(name="development_role", type="string", length=255, nullable=true, unique=false)
     */
    protected $developmentRole;

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