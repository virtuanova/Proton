<?php

namespace CoreDomain\Objects;


/**
 * Class StandardorPolicy
 * @package CoreDomain\Objects
 */
class StandardorPolicy extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $description;
    /**
     * @var
     */
    protected $publicationDate;
    /**
     * @var
     */
    protected $standardorPolicyTitle;
    /**
     * @var
     */
    protected $uRL;

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
     * @return StandardorPolicy
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * @param mixed $publicationDate
     *
     * @return StandardorPolicy
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStandardorPolicyTitle()
    {
        return $this->standardorPolicyTitle;
    }

    /**
     * @param mixed $standardorPolicyTitle
     *
     * @return StandardorPolicy
     */
    public function setStandardorPolicyTitle($standardorPolicyTitle)
    {
        $this->standardorPolicyTitle = $standardorPolicyTitle;
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
     * @return StandardorPolicy
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

}