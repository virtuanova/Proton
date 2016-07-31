<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\CashFunder as BaseCashFunder;
/**
 * CashFunder
 *
 * @ORM\Table(name="cash_funder")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\CashFunderRepository")
 */
class CashFunder extends BaseCashFunder
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
     * @ORM\Column(name="cash_funding_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $cashFundingType;

    /**
     * @var string
     *
     * @ORM\Column(name="funding_source_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $fundingSourceID;

    /**
     * @var string
     *
     * @ORM\Column(name="funding_source_program", type="string", length=255, nullable=true, unique=false)
     */
    protected $fundingSourceProgram;

    /**
     * @var string
     *
     * @ORM\Column(name="periodic_amounts", type="string", length=255, nullable=true, unique=false)
     */
    protected $periodicAmounts;

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

