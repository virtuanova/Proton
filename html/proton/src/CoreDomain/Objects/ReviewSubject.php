<?php

namespace CoreDomain\Objects;


/**
 * Class ReviewSubject
 * @package CoreDomain\Objects
 */
class ReviewSubject extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $container;
    /**
     * @var
     */
    protected $id;
    /**
     * @var
     */
    protected $idType;
    /**
     * @var
     */
    protected $title;
    /**
     * @var
     */
    protected $type;
    /**
     * @var
     */
    protected $uRL;

    /**
     * @return mixed
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @param mixed $container
     *
     * @return ReviewSubject
     */
    public function setContainer($container)
    {
        $this->container = $container;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return ReviewSubject
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * @param mixed $idType
     *
     * @return ReviewSubject
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     *
     * @return ReviewSubject
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     *
     * @return ReviewSubject
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * @param mixed $uRL
     *
     * @return ReviewSubject
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

}