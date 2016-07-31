<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\Website as BaseWebsite;
/**
 * Website
 *
 * @ORM\Table(name="website")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\WebsiteRepository")
 */
class Website extends BaseWebsite
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
     * @ORM\Column(name="launch_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $launchDate;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true, unique=false)
     */
    protected $title;

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