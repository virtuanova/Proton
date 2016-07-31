<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\Reference as BaseReference;

/**
 * Reference
 *
 * @ORM\Table(name="reference")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ReferenceRepository")
 */
class Reference extends BaseReference
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
     * @ORM\Column(name="c_asraiid", type="string", length=255, nullable=true, unique=false)
     */
    protected $cASRAIID;

    /**
     * @var string
     *
     * @ORM\Column(name="date_given", type="string", length=255, nullable=true, unique=false)
     */
    protected $dateGiven;

    /**
     * @var string
     *
     * @ORM\Column(name="institution_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $institutionID;

    /**
     * @var string
     *
     * @ORM\Column(name="presented_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $presentedName;

    /**
     * @var string
     *
     * @ORM\Column(name="primary_address", type="string", length=255, nullable=true, unique=false)
     */
    protected $primaryAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="primary_email", type="string", length=255, nullable=true, unique=false)
     */
    protected $primaryEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="primary_phone", type="string", length=255, nullable=true, unique=false)
     */
    protected $primaryPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="reference_attachment", type="string", length=255, nullable=true, unique=false)
     */
    protected $referenceAttachment;

    /**
     * @var string
     *
     * @ORM\Column(name="reference_summary", type="string", length=255, nullable=true, unique=false)
     */
    protected $referenceSummary;

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