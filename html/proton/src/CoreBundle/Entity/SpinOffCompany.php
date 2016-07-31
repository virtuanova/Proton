<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\SpinOffCompany as BaseSpinOffCompany;
/**
 * SpinOffCompany
 *
 * @ORM\Table(name="spin_off_company")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\SpinOffCompanyRepository")
 */
class SpinOffCompany extends BaseSpinOffCompany
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
     * @ORM\Column(name="areaof_activity", type="string", length=255, nullable=true, unique=false)
     */
    protected $areaofActivity;

    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="company_status", type="string", length=255, nullable=true, unique=false)
     */
    protected $companyStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="date_established", type="string", length=255, nullable=true, unique=false)
     */
    protected $dateEstablished;

    /**
     * @var string
     *
     * @ORM\Column(name="numberof_employees", type="string", length=255, nullable=true, unique=false)
     */
    protected $numberofEmployees;

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