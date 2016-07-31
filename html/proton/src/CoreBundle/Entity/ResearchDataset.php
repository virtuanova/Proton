<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ResearchDataset as BaseResearchDataset;
/**
 * ResearchDataset
 *
 * @ORM\Table(name="research_dataset")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ResearchDatasetRepository")
 */
class ResearchDataset extends BaseResearchDataset
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
     * @ORM\Column(name="capture_modes", type="string", length=255, nullable=true, unique=false)
     */
    protected $captureModes;

    /**
     * @var string
     *
     * @ORM\Column(name="content_description", type="string", length=255, nullable=true, unique=false)
     */
    protected $contentDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="destruction_policy", type="string", length=255, nullable=true, unique=false)
     */
    protected $destructionPolicy;

    /**
     * @var string
     *
     * @ORM\Column(name="embargo_end_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $embargoEndDate;

    /**
     * @var string
     *
     * @ORM\Column(name="embargo_start_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $embargoStartDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ethics_compliance", type="string", length=255, nullable=true, unique=false)
     */
    protected $ethicsCompliance;

    /**
     * @var string
     *
     * @ORM\Column(name="i_prownership", type="string", length=255, nullable=true, unique=false)
     */
    protected $iPROwnership;

    /**
     * @var string
     *
     * @ORM\Column(name="license", type="string", length=255, nullable=true, unique=false)
     */
    protected $license;

    /**
     * @var string
     *
     * @ORM\Column(name="licensingof_existing_data", type="string", length=255, nullable=true, unique=false)
     */
    protected $licensingofExistingData;

    /**
     * @var string
     *
     * @ORM\Column(name="managed_access_procedures", type="string", length=255, nullable=true, unique=false)
     */
    protected $managedAccessProcedures;

    /**
     * @var string
     *
     * @ORM\Column(name="preservation_end_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $preservationEndDate;

    /**
     * @var string
     *
     * @ORM\Column(name="preservation_start_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $preservationStartDate;

    /**
     * @var string
     *
     * @ORM\Column(name="sharing_method", type="string", length=255, nullable=true, unique=false)
     */
    protected $sharingMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="storage_access", type="string", length=255, nullable=true, unique=false)
     */
    protected $storageAccess;

    /**
     * @var string
     *
     * @ORM\Column(name="storage_security", type="string", length=255, nullable=true, unique=false)
     */
    protected $storageSecurity;

    /**
     * @var string
     *
     * @ORM\Column(name="storage_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $storageType;

    /**
     * @var string
     *
     * @ORM\Column(name="structural_approach", type="string", length=255, nullable=true, unique=false)
     */
    protected $structuralApproach;

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