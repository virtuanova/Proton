<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\RadioTVProgram as BaseRadioTVProgram;

/**
 * RadioTVProgram
 *
 * @ORM\Table(name="radio_tv_program")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\RadioTVProgramRepository")
 */
class RadioTVProgram extends BaseRadioTVProgram
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
     * @ORM\Column(name="broadcast_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $broadcastDate;

    /**
     * @var string
     *
     * @ORM\Column(name="coCreators", type="string", length=255, nullable=true, unique=false)
     */
    protected $coCreators;

    /**
     * @var string
     *
     * @ORM\Column(name="episode_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $episodeTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="numberof_episodes", type="string", length=255, nullable=true, unique=false)
     */
    protected $numberofEpisodes;

    /**
     * @var string
     *
     * @ORM\Column(name="program_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $programTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="publisher", type="string", length=255, nullable=true, unique=false)
     */
    protected $publisher;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="series_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $seriesTitle;

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