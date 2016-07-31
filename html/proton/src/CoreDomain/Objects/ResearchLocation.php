<?php

namespace CoreDomain\Objects;


/**
 * Class ResearchLocation
 * @package CoreDomain\Objects
 */
class ResearchLocation extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $locationGeoTag;
    /**
     * @var
     */
    protected $locationMunicipality;
    /**
     * @var
     */
    protected $locationPercentEffort;

    /**
     * @return mixed
     */
    public function getLocationGeoTag()
    {
        return $this->locationGeoTag;
    }

    /**
     * @param mixed $locationGeoTag
     *
     * @return ResearchLocation
     */
    public function setLocationGeoTag($locationGeoTag)
    {
        $this->locationGeoTag = $locationGeoTag;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocationMunicipality()
    {
        return $this->locationMunicipality;
    }

    /**
     * @param mixed $locationMunicipality
     *
     * @return ResearchLocation
     */
    public function setLocationMunicipality($locationMunicipality)
    {
        $this->locationMunicipality = $locationMunicipality;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocationPercentEffort()
    {
        return $this->locationPercentEffort;
    }

    /**
     * @param mixed $locationPercentEffort
     *
     * @return ResearchLocation
     */
    public function setLocationPercentEffort($locationPercentEffort)
    {
        $this->locationPercentEffort = $locationPercentEffort;
        return $this;
    }

}