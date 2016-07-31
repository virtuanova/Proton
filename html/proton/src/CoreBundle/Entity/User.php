<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\User\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\UserRepository")
 */
class User extends BaseUser
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
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    protected $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    protected $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=255)
     */
    protected $department;

    /**
     * @var string
     *
     * @ORM\Column(name="job_title", type="string", length=255)
     */
    protected $jobTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="internalId", type="string", length=255, unique=false)
     */
    protected $internalId;


    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255,nullable=false, unique=false)
     */
    protected $password;
}

