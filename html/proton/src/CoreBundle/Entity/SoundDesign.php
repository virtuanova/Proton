<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\SoundDesign as BaseSoundDesign;
/**
 * SoundDesign
 *
 * @ORM\Table(name="sound_design")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\SoundDesignRepository")
 */
class SoundDesign extends BaseSoundDesign
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
     * @ORM\Column(name="key_collaborators", type="string", length=255, nullable=true, unique=false)
     */
    protected $keyCollaborators;

    /**
     * @var string
     *
     * @ORM\Column(name="opening_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $openingDate;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="show_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $showTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="venue", type="string", length=255, nullable=true, unique=false)
     */
    protected $venue;

    /**
     * @var string
     *
     * @ORM\Column(name="writerProducer", type="string", length=255, nullable=true, unique=false)
     */
    protected $writerProducer;

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