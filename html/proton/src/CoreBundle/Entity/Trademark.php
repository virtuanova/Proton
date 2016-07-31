<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\Trademark as BaseTrademark;
/**
 * Trademark
 *
 * @ORM\Table(name="trademark")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\TrademarkRepository")
 */
class Trademark extends BaseTrademark
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
     * @ORM\Column(name="application_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $applicationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="date_issued", type="string", length=255, nullable=true, unique=false)
     */
    protected $dateIssued;

    /**
     * @var string
     *
     * @ORM\Column(name="end_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="trademark_status", type="string", length=255, nullable=true, unique=false)
     */
    protected $trademarkStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="trademark_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $trademarkTitle;

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