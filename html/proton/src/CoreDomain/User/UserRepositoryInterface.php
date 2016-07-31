<?php

/**
 * Created by PhpStorm.
 * User: ravi
 * Date: 7/29/16
 * Time: 10:00 AM
 */
namespace CoreDomain\User;

/**
 * Interface UserRepositoryInterface
 * @package CoreDomain\User
 */
interface UserRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param $id
     *
     * @return mixed
     */
    public function getUserById($id);

    public function getUserPersonalInformation($id);

    public function getUserIdentifyingInfo($id);

    Public function getContactInfo($id);

    public function getEducationHistory($id);

    public function getEmploymentHistory($id);

    public function getProfessionalDistinctions($id);

    public function getFundingHistory($id);

    public function getOutputs($id);

    public function getServicesResearchScholarly($id);

    public function getServicesOther($id);

    public function getDataFromEntities(array $entities, $id);

}