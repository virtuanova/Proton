<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\DataSet as BaseDataSet;
/**
 * DataSet
 *
 * @ORM\Table(name="data_set")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\DataSetRepository")
 */
class DataSet extends BaseDataSet
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
     * @ORM\Column(name="description", type="string", length=255, nullable=true, unique=false)
     */
    protected $description;

    /**
     * @var string
     *
     * @ORM\Column(name="location_lodged", type="string", length=255, nullable=true, unique=false)
     */
    protected $locationLodged;

    /**
     * @var string
     *
     * @ORM\Column(name="primary_users", type="string", length=255, nullable=true, unique=false)
     */
    protected $primaryUsers;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true, unique=false)
     */
    protected $title;

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

