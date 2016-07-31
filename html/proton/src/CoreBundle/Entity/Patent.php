<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\Patent as BasePatent;

/**
 * Patent
 *
 * @ORM\Table(name="patent")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\PatentRepository")
 */
class Patent extends BasePatent
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
     * @ORM\Column(name="application_status", type="string", length=255, nullable=true, unique=false)
     */
    protected $applicationStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="coAuthors", type="string", length=255, nullable=true, unique=false)
     */
    protected $coAuthors;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true, unique=false)
     */
    protected $country;

    /**
     * @var string
     *
     * @ORM\Column(name="date_issued", type="string", length=255, nullable=true, unique=false)
     */
    protected $dateIssued;

    /**
     * @var string
     *
     * @ORM\Column(name="date_requested", type="string", length=255, nullable=true, unique=false)
     */
    protected $dateRequested;

    /**
     * @var string
     *
     * @ORM\Column(name="dateof_filing_priority", type="string", length=255, nullable=true, unique=false)
     */
    protected $dateofFilingPriority;

    /**
     * @var string
     *
     * @ORM\Column(name="dateof_term_end", type="string", length=255, nullable=true, unique=false)
     */
    protected $dateofTermEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="first_listed_author", type="string", length=255, nullable=true, unique=false)
     */
    protected $firstListedAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="patent_number", type="string", length=255, nullable=true, unique=false)
     */
    protected $patentNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="patent_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $patentTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

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