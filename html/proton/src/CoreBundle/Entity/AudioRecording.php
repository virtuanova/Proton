<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\AudioRecording as BaseAudioRecording;

/**
 * AudioRecording
 *
 * @ORM\Table(name="audio_recording")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\AudioRecordingRepository")
 */
class AudioRecording extends BaseAudioRecording
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
     * @ORM\Column(name="album_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $albumTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="co_performers", type="string", length=255, nullable=true, unique=false)
     */
    protected $coPerformers;

    /**
     * @var string
     *
     * @ORM\Column(name="distributor", type="string", length=255, nullable=true, unique=false)
     */
    protected $distributor;

    /**
     * @var string
     *
     * @ORM\Column(name="piece_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $pieceTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="producer_first_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $producerFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="producer_last_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $producerLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="release_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $releaseDate;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

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

