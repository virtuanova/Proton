<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ResearchTool as BaseResearchTool;
/**
 * ResearchTool
 *
 * @ORM\Table(name="research_tool")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ResearchToolRepository")
 */
class ResearchTool extends BaseResearchTool
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
     * @ORM\Column(name="organization", type="string", length=255, nullable=true, unique=false)
     */
    protected $organization;

    /**
     * @var string
     *
     * @ORM\Column(name="page_ranges", type="string", length=255, nullable=true, unique=false)
     */
    protected $pageRanges;

    /**
     * @var string
     *
     * @ORM\Column(name="publication_location", type="string", length=255, nullable=true, unique=false)
     */
    protected $publicationLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="publication_year", type="string", length=255, nullable=true, unique=false)
     */
    protected $publicationYear;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="research_tool_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchToolType;

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