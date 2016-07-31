<?php

namespace CoreDomain\Objects;


/**
 * Class ResearchTechnique
 * @package CoreDomain\Objects
 */
class ResearchTechnique extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $description;
    /**
     * @var
     */
    protected $developmentRole;

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     *
     * @return ResearchTechnique
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDevelopmentRole()
    {
        return $this->developmentRole;
    }

    /**
     * @param mixed $developmentRole
     *
     * @return ResearchTechnique
     */
    public function setDevelopmentRole($developmentRole)
    {
        $this->developmentRole = $developmentRole;
        return $this;
    }

}