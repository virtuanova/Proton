<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\PersonInfo as BasePersonalInfo;

/**
 * PersonInfo
 *
 * @ORM\Table(name="person_info")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\PersonInfoRepository")
 */
class PersonInfo extends BasePersonalInfo
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
     * @ORM\Column(name="correspondence_language", type="string", length=255, nullable=true, unique=false)
     */
    protected $correspondenceLanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="dateof_birth", type="datetimetz", nullable=true, unique=false)
     */
    protected $dateofBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="designated_group", type="string", length=255, nullable=true, unique=false)
     */
    protected $designatedGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="family_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $familyName;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255, nullable=true, unique=false)
     */
    protected $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="middle_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $middleName;

    /**
     * @var string
     *
     * @ORM\Column(name="presented_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $presentedName;

    /**
     * @var string
     *
     * @ORM\Column(name="previous_family_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $previousFamilyName;

    /**
     * @var string
     *
     * @ORM\Column(name="salutation", type="string", length=255, nullable=true, unique=false)
     */
    protected $salutation;

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