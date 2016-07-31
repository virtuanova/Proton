<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ResearchDatasetContributor as BaseResearchDatasetContributor;

/**
 * ResearchDatasetContributor
 *
 * @ORM\Table(name="research_dataset_contributor")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ResearchDatasetContributorRepository")
 */
class ResearchDatasetContributor extends BaseResearchDatasetContributor
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
     * @ORM\Column(name="i_d", type="string", length=255, nullable=true, unique=false)
     */
    protected $Id;

    /**
     * @var string
     *
     * @ORM\Column(name="i_dtype", type="string", length=255, nullable=true, unique=false)
     */
    protected $idType;

    /**
     * @var string
     *
     * @ORM\Column(name="institution_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $institutionID;

    /**
     * @var string
     *
     * @ORM\Column(name="institution_idtype", type="string", length=255, nullable=true, unique=false)
     */
    protected $institutionIDType;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255, nullable=true, unique=false)
     */
    protected $role;

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