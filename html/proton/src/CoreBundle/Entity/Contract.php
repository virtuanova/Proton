<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\Contract as BaseContract;
/**
 * Contract
 *
 * @ORM\Table(name="contract")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ContractRepository")
 */
class Contract extends BaseContract
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
     * @ORM\Column(name="competitive", type="string", length=255, nullable=true, unique=false)
     */
    protected $competitive;

    /**
     * @var string
     *
     * @ORM\Column(name="contract_status", type="string", length=255, nullable=true, unique=false)
     */
    protected $contractStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=255, nullable=true, unique=false)
     */
    protected $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="end_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="funding_organization", type="string", length=255, nullable=true, unique=false)
     */
    protected $fundingOrganization;

    /**
     * @var string
     *
     * @ORM\Column(name="other_investigators", type="string", length=255, nullable=true, unique=false)
     */
    protected $otherInvestigators;

    /**
     * @var string
     *
     * @ORM\Column(name="project_description", type="string", length=255, nullable=true, unique=false)
     */
    protected $projectDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="project_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $projectTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="roleof_other_investigators", type="string", length=255, nullable=true, unique=false)
     */
    protected $roleofOtherInvestigators;

    /**
     * @var string
     *
     * @ORM\Column(name="start_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $startDate;

    /**
     * @var string
     *
     * @ORM\Column(name="total_amount", type="string", length=255, nullable=true, unique=false)
     */
    protected $totalAmount;

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

