<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\MailingAddress as BaseMailingAddress;

/**
 * MailingAddress
 *
 * @ORM\Table(name="mailing_address")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\MailingAddressRepository")
 */
class MailingAddress extends BaseMailingAddress
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
     * @ORM\Column(name="address_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $addressType;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true, unique=false)
     */
    protected $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true, unique=false)
     */
    protected $country;

    /**
     * @var string
     *
     * @ORM\Column(name="end_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_code", type="string", length=255, nullable=true, unique=false)
     */
    protected $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="provinceState", type="string", length=255, nullable=true, unique=false)
     */
    protected $provinceState;

    /**
     * @var string
     *
     * @ORM\Column(name="start_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $startDate;

    /**
     * @var string
     *
     * @ORM\Column(name="street_address1", type="string", length=255, nullable=true, unique=false)
     */
    protected $streetAddress1;

    /**
     * @var string
     *
     * @ORM\Column(name="street_address2", type="string", length=255, nullable=true, unique=false)
     */
    protected $streetAddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="street_address3", type="string", length=255, nullable=true, unique=false)
     */
    protected $streetAddress3;

    /**
     * @var string
     *
     * @ORM\Column(name="street_address4", type="string", length=255, nullable=true, unique=false)
     */
    protected $streetAddress4;

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