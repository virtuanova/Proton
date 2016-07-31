<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\FundsRequest as BaseFundsRequest;

/**
 * FundsRequest
 *
 * @ORM\Table(name="funds_request")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\FundsRequestRepository")
 */
class FundsRequest extends BaseFundsRequest
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
     * @ORM\Column(name="areaof_application", type="string", length=255, nullable=true, unique=false)
     */
    protected $areaofApplication;

    /**
     * @var string
     *
     * @ORM\Column(name="funding_source_deadline", type="string", length=255, nullable=true, unique=false)
     */
    protected $fundingSourceDeadline;

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
     * @ORM\Column(name="periodic_amounts_requested", type="string", length=255, nullable=true, unique=false)
     */
    protected $periodicAmountsRequested;

    /**
     * @var string
     *
     * @ORM\Column(name="priority_area", type="string", length=255, nullable=true, unique=false)
     */
    protected $priorityArea;

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

