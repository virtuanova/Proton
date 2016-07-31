<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\Disclosure as BaseDistinction;
/**
 * Distinction
 *
 * @ORM\Table(name="distinction")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\DistinctionRepository")
 */
class Distinction extends BaseDistinction
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
     * @ORM\Column(name="amount", type="string", length=255, nullable=true, unique=false)
     */
    protected $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="awarded_by", type="string", length=255, nullable=true, unique=false)
     */
    protected $awardedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true, unique=false)
     */
    protected $country;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=255, nullable=true, unique=false)
     */
    protected $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true, unique=false)
     */
    protected $description;

    /**
     * @var string
     *
     * @ORM\Column(name="distinction_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $distinctionName;

    /**
     * @var string
     *
     * @ORM\Column(name="distinction_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $distinctionType;

    /**
     * @var string
     *
     * @ORM\Column(name="effective_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $effectiveDate;

    /**
     * @var string
     *
     * @ORM\Column(name="end_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $endDate;

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

