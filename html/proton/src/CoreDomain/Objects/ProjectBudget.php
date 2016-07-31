<?php

namespace CoreDomain\Objects;


/**
 * Class ProjectBudget
 * @package CoreDomain\Objects
 */
class ProjectBudget extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $budgetYear;
    /**
     * @var
     */
    protected $itemAmount;
    /**
     * @var
     */
    protected $itemDescription;
    /**
     * @var
     */
    protected $itemType;
    /**
     * @var
     */
    protected $itemTypeCategory;

    /**
     * @return mixed
     */
    public function getBudgetYear()
    {
        return $this->budgetYear;
    }

    /**
     * @param mixed $budgetYear
     */
    public function setBudgetYear($budgetYear)
    {
        $this->budgetYear = $budgetYear;
    }

    /**
     * @return mixed
     */
    public function getItemAmount()
    {
        return $this->itemAmount;
    }

    /**
     * @param mixed $itemAmount
     */
    public function setItemAmount($itemAmount)
    {
        $this->itemAmount = $itemAmount;
    }

    /**
     * @return mixed
     */
    public function getItemDescription()
    {
        return $this->itemDescription;
    }

    /**
     * @param mixed $itemDescription
     */
    public function setItemDescription($itemDescription)
    {
        $this->itemDescription = $itemDescription;
    }

    /**
     * @return mixed
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * @param mixed $itemType
     */
    public function setItemType($itemType)
    {
        $this->itemType = $itemType;
    }

    /**
     * @return mixed
     */
    public function getItemTypeCategory()
    {
        return $this->itemTypeCategory;
    }

    /**
     * @param mixed $itemTypeCategory
     */
    public function setItemTypeCategory($itemTypeCategory)
    {
        $this->itemTypeCategory = $itemTypeCategory;
    }

}