<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ReviewSubject as BaseReviewSubject;
/**
 * ReviewSubject
 *
 * @ORM\Table(name="review_subject")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ReviewSubjectRepository")
 */
class ReviewSubject extends BaseReviewSubject
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
     * @ORM\Column(name="container", type="string", length=255, nullable=true, unique=false)
     */
    protected $container;

    /**
     * @var string
     *
     * @ORM\Column(name="i_d", type="string", length=255, nullable=true, unique=false)
     */
    protected $iD;

    /**
     * @var string
     *
     * @ORM\Column(name="i_dtype", type="string", length=255, nullable=true, unique=false)
     */
    protected $idType;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true, unique=false)
     */
    protected $title;

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