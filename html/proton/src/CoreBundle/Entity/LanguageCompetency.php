<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\LanguageCompetency as BaseLanguageCompetency;

/**
 * LanguageCompetency
 *
 * @ORM\Table(name="language_competency")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\LanguageCompetencyRepository")
 */
class LanguageCompetency extends BaseLanguageCompetency
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
     * @ORM\Column(name="can_peer_review", type="string", length=255, nullable=true, unique=false)
     */
    protected $canPeerReview;

    /**
     * @var string
     *
     * @ORM\Column(name="can_read", type="string", length=255, nullable=true, unique=false)
     */
    protected $canRead;

    /**
     * @var string
     *
     * @ORM\Column(name="can_speak", type="string", length=255, nullable=true, unique=false)
     */
    protected $canSpeak;

    /**
     * @var string
     *
     * @ORM\Column(name="can_understand_spoken", type="string", length=255, nullable=true, unique=false)
     */
    protected $canUnderstandSpoken;

    /**
     * @var string
     *
     * @ORM\Column(name="can_write", type="string", length=255, nullable=true, unique=false)
     */
    protected $canWrite;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255, nullable=true, unique=false)
     */
    protected $language;

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