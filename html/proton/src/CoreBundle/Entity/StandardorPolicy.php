<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\StandardorPolicy as BaseStandardorPolicy;
/**
 * StandardorPolicy
 *
 * @ORM\Table(name="standardor_policy")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\StandardorPolicyRepository")
 */
class StandardorPolicy extends BaseStandardorPolicy
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
     * @ORM\Column(name="description", type="string", length=255, nullable=true, unique=false)
     */
    protected $description;

    /**
     * @var string
     *
     * @ORM\Column(name="publication_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $publicationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="standardor_policy_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $standardorPolicyTitle;

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