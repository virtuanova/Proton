<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\Review as BaseReview;
/**
 * Review
 *
 * @ORM\Table(name="review")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ReviewRepository")
 */
class Review extends BaseReview
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
     * @ORM\Column(name="convening_org_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $conveningOrgID;

    /**
     * @var string
     *
     * @ORM\Column(name="convening_org_idtype", type="string", length=255, nullable=true, unique=false)
     */
    protected $conveningOrgIDType;

    /**
     * @var string
     *
     * @ORM\Column(name="convening_org_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $conveningOrgName;

    /**
     * @var string
     *
     * @ORM\Column(name="reference_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $referenceID;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true, unique=false)
     */
    protected $type;

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