<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\APCPayment as BaseAPCPayment;
/**
 * APCPayment
 *
 * @ORM\Table(name="apc_payment")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\APCPaymentRepository")
 */
class APCPayment extends BaseAPCPayment
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
     * @ORM\Column(name="added_costs_component", type="string", length=255, nullable=true, unique=false)
     */
    protected $addedCostsComponent;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_paid", type="string", length=255, nullable=true, unique=false)
     */
    protected $amountPaid;

    /**
     * @var string
     *
     * @ORM\Column(name="correct_licence_applied", type="string", length=255, nullable=true, unique=false)
     */
    protected $correctLicenceApplied;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=255, nullable=true, unique=false)
     */
    protected $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="datetime", nullable=true, unique=false)
     */
    protected $date;

    /**
     * @var string
     *
     * @ORM\Column(name="licence_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $licenceType;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_adjustments", type="string", length=255, nullable=true, unique=false)
     */
    protected $paymentAdjustments;

    /**
     * @var string
     *
     * @ORM\Column(name="publication_problem_description", type="string", length=255, nullable=true, unique=false)
     */
    protected $publicationProblemDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="publication_problems", type="string", length=255, nullable=true, unique=false)
     */
    protected $publicationProblems;

    /**
     * @var string
     *
     * @ORM\Column(name="source_fund", type="string", length=255, nullable=true, unique=false)
     */
    protected $sourceFund;

    /**
     * @var string
     *
     * @ORM\Column(name="source_grant", type="string", length=255, nullable=true, unique=false)
     */
    protected $sourceGrant;

    /**
     * @var string
     *
     * @ORM\Column(name="vatamount", type="string", length=255, nullable=true, unique=false)
     */
    protected $VATAmount;

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

