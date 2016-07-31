<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\ProjectBudget as BaseProjectBudget;

/**
 * ProjectBudget
 *
 * @ORM\Table(name="project_budget")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ProjectBudgetRepository")
 */
class ProjectBudget extends BaseProjectBudget
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
     * @ORM\Column(name="budget_year", type="string", length=255, nullable=true, unique=false)
     */
    protected $budgetYear;

    /**
     * @var string
     *
     * @ORM\Column(name="item_amount", type="string", length=255, nullable=true, unique=false)
     */
    protected $itemAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="item_description", type="string", length=255, nullable=true, unique=false)
     */
    protected $itemDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="item_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $itemType;

    /**
     * @var string
     *
     * @ORM\Column(name="item_type_category", type="string", length=255, nullable=true, unique=false)
     */
    protected $itemTypeCategory;

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