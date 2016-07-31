<?php

namespace CoreDomain\Objects;


/**
 * Class CareerStatus
 * @package CoreDomain\Objects
 */
class CareerStatus extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $careerStage;
    /**
     * @var
     */
    protected $researchCareerStart;
    /**
     * @var
     */
    protected $researchCentre;

    /**
     * @return mixed
     */
    public function getCareerStage()
    {
        return $this->careerStage;
    }

    /**
     * @param mixed $careerStage
     * @return CareerStatus
     */
    public function setCareerStage($careerStage)
    {
        $this->careerStage = $careerStage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResearchCareerStart()
    {
        return $this->researchCareerStart;
    }

    /**
     * @param mixed $researchCareerStart
     * @return CareerStatus
     */
    public function setResearchCareerStart($researchCareerStart)
    {
        $this->researchCareerStart = $researchCareerStart;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResearchCentre()
    {
        return $this->researchCentre;
    }

    /**
     * @param mixed $researchCentre
     * @return CareerStatus
     */
    public function setResearchCentre($researchCentre)
    {
        $this->researchCentre = $researchCentre;
        return $this;
    }

}