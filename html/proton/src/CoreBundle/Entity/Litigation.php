<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\Litigation as BaseLitigation;

/**
 * Litigation
 *
 * @ORM\Table(name="litigation")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\LitigationRepository")
 */
class Litigation extends BaseLitigation
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
     * @ORM\Column(name="case_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $caseName;

    /**
     * @var string
     *
     * @ORM\Column(name="court", type="string", length=255, nullable=true, unique=false)
     */
    protected $court;

    /**
     * @var string
     *
     * @ORM\Column(name="key_legal_issues", type="string", length=255, nullable=true, unique=false)
     */
    protected $keyLegalIssues;

    /**
     * @var string
     *
     * @ORM\Column(name="person_acted_for", type="string", length=255, nullable=true, unique=false)
     */
    protected $personActedFor;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string", length=255, nullable=true, unique=false)
     */
    protected $year;

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
