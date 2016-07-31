<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\CuratorialMuseumExhibition as BaseCuratorialMuseumExhibition;
/**
 * CuratorialMuseumExhibition
 *
 * @ORM\Table(name="curatorial_museum_exhibition")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\CuratorialMuseumExhibitionRepository")
 */
class CuratorialMuseumExhibition extends BaseCuratorialMuseumExhibition
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
     * @ORM\Column(name="artists", type="string", length=255, nullable=true, unique=false)
     */
    protected $artists;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255, nullable=true, unique=false)
     */
    protected $date;

    /**
     * @var string
     *
     * @ORM\Column(name="dateof_subsequent_exhibition", type="string", length=255, nullable=true, unique=false)
     */
    protected $dateofSubsequentExhibition;

    /**
     * @var string
     *
     * @ORM\Column(name="exhibition_catalogue_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $exhibitionCatalogueTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="exhibition_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $exhibitionTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="research_classification", type="string", length=255, nullable=true, unique=false)
     */
    protected $researchClassification;

    /**
     * @var string
     *
     * @ORM\Column(name="venues", type="string", length=255, nullable=true, unique=false)
     */
    protected $venues;

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

