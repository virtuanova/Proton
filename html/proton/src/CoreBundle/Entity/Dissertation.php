<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\Dissertation as BaseDissertation;
/**
 * Dissertation
 *
 * @ORM\Table(name="dissertation")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\DissertationRepository")
 */
class Dissertation extends BaseDissertation
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
     * @ORM\Column(name="completion_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $completionDate;

    /**
     * @var string
     *
     * @ORM\Column(name="degree_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $degreeType;

    /**
     * @var string
     *
     * @ORM\Column(name="institution", type="string", length=255, nullable=true, unique=false)
     */
    protected $institution;

    /**
     * @var string
     *
     * @ORM\Column(name="pubmed_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $pubmedID;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="supervisor_first_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $supervisorFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="supervisor_last_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $supervisorLastName;

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