<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\Test as BaseTest;
/**
 * Test
 *
 * @ORM\Table(name="test")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\TestRepository")
 */
class Test extends BaseTest
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
     * @ORM\Column(name="coAuthors", type="string", length=255, nullable=true, unique=false)
     */
    protected $coAuthors;

    /**
     * @var string
     *
     * @ORM\Column(name="date_first_used", type="string", length=255, nullable=true, unique=false)
     */
    protected $dateFirstUsed;

    /**
     * @var string
     *
     * @ORM\Column(name="first_listed_author", type="string", length=255, nullable=true, unique=false)
     */
    protected $firstListedAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true, unique=false)
     */
    protected $title;

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