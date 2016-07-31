<?php

namespace CoreDomain\Objects;


/**
 * Class TechnicalStandard
 * @package CoreDomain\Objects
 */
class TechnicalStandard extends BaseObjectInterface
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
    protected $pubmedID;
    /**
     * @var
     */
    protected $technicalStandardTitle;
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
     * @return TechnicalStandard
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
     * @return TechnicalStandard
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPubmedID()
    {
        return $this->pubmedID;
    }

    /**
     * @param mixed $pubmedID
     *
     * @return TechnicalStandard
     */
    public function setPubmedID($pubmedID)
    {
        $this->pubmedID = $pubmedID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTechnicalStandardTitle()
    {
        return $this->technicalStandardTitle;
    }

    /**
     * @param mixed $technicalStandardTitle
     *
     * @return TechnicalStandard
     */
    public function setTechnicalStandardTitle($technicalStandardTitle)
    {
        $this->technicalStandardTitle = $technicalStandardTitle;
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
     * @return TechnicalStandard
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

}