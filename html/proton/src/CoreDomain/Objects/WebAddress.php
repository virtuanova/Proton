<?php

namespace CoreDomain\Objects;


use Doctrine\ORM\Mapping as ORM;

/**
 * Class WebAddress
 * @package CoreDomain\Objects
 */
class WebAddress extends BaseObjectInterface
{
    /**
     * @return mixed
     */
    public function getSiteType()
    {
        return $this->siteType;
    }

    /**
     * @param mixed $siteType
     *
     * @return WebAddress
     */
    public function setSiteType($siteType)
    {
        $this->siteType = $siteType;
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
     * @return WebAddress
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * @ORM\Column(type="string")
     */protected $siteType;
    /**
     * @ORM\Column(type="string")
     */protected $uRL;

}