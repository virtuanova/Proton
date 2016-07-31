<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\PhoneNumber as BasePhoneNumber;

/**
 * PhoneNumber
 *
 * @ORM\Table(name="phone_number")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\PhoneNumberRepository")
 */
class PhoneNumber extends BasePhoneNumber
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
     * @ORM\Column(name="area_code", type="string", length=255, nullable=true, unique=false)
     */
    protected $areaCode;

    /**
     * @var string
     *
     * @ORM\Column(name="country_code", type="string", length=255, nullable=true, unique=false)
     */
    protected $countryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="end_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=255, nullable=true, unique=false)
     */
    protected $extension;

    /**
     * @var string
     *
     * @ORM\Column(name="local_number", type="string", length=255, nullable=true, unique=false)
     */
    protected $localNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $phoneType;

    /**
     * @var string
     *
     * @ORM\Column(name="start_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $startDate;

    /**
     * @var string
     *
     * @ORM\Column(name="use_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $useType;

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