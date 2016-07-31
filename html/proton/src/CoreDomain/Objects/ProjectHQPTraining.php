<?php

namespace CoreDomain\Objects;


/**
 * Class ProjectHQPTraining
 * @package CoreDomain\Objects
 */
class ProjectHQPTraining extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $percentageTrainingTime;
    /**
     * @var
     */
    protected $traineeName;
    /**
     * @var
     */
    protected $traineePosition;
    /**
     * @var
     */
    protected $traineeRoleDescription;
    /**
     * @var
     */
    protected $trainingAttributes;
    /**
     * @var
     */
    protected $trainingDuration;

    /**
     * @return mixed
     */
    public function getPercentageTrainingTime()
    {
        return $this->percentageTrainingTime;
    }

    /**
     * @param mixed $percentageTrainingTime
     */
    public function setPercentageTrainingTime($percentageTrainingTime)
    {
        $this->percentageTrainingTime = $percentageTrainingTime;
    }

    /**
     * @return mixed
     */
    public function getTraineeName()
    {
        return $this->traineeName;
    }

    /**
     * @param mixed $traineeName
     */
    public function setTraineeName($traineeName)
    {
        $this->traineeName = $traineeName;
    }

    /**
     * @return mixed
     */
    public function getTraineePosition()
    {
        return $this->traineePosition;
    }

    /**
     * @param mixed $traineePosition
     */
    public function setTraineePosition($traineePosition)
    {
        $this->traineePosition = $traineePosition;
    }

    /**
     * @return mixed
     */
    public function getTraineeRoleDescription()
    {
        return $this->traineeRoleDescription;
    }

    /**
     * @param mixed $traineeRoleDescription
     */
    public function setTraineeRoleDescription($traineeRoleDescription)
    {
        $this->traineeRoleDescription = $traineeRoleDescription;
    }

    /**
     * @return mixed
     */
    public function getTrainingAttributes()
    {
        return $this->trainingAttributes;
    }

    /**
     * @param mixed $trainingAttributes
     */
    public function setTrainingAttributes($trainingAttributes)
    {
        $this->trainingAttributes = $trainingAttributes;
    }

    /**
     * @return mixed
     */
    public function getTrainingDuration()
    {
        return $this->trainingDuration;
    }

    /**
     * @param mixed $trainingDuration
     */
    public function setTrainingDuration($trainingDuration)
    {
        $this->trainingDuration = $trainingDuration;
    }

}