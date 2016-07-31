<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ResearchLocation as BaseResearchLocation;
/**
 * ResearchLocation
 *
 * @ORM\Table(name="research_location")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ResearchLocationRepository")
 */
class ResearchLocation extends BaseResearchLocation
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
     * @ORM\Column(name="location_geo_tag", type="string", length=255, nullable=true, unique=false)
     */
    protected $locationGeoTag;

    /**
     * @var string
     *
     * @ORM\Column(name="location_municipality", type="string", length=255, nullable=true, unique=false)
     */
    protected $locationMunicipality;

    /**
     * @var string
     *
     * @ORM\Column(name="location_percent_effort", type="string", length=255, nullable=true, unique=false)
     */
    protected $locationPercentEffort;

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