<?php
/**
 * Created by PhpStorm.
 * User: ravi
 * Date: 7/29/16
 * Time: 12:31 AM
 */

namespace CoreBundle\Services;

use CoreDomain\User\UserRepositoryInterface;
use stdClass;

class UserService
{
    /**
     * @var UserRepository $userRepo
     */
    protected $userRepo;

    /**
     * UserService constructor.
     *
     * @param UserRepository $repository
     */
    public function __construct(UserRepositoryInterface $repository)
    {
        $this->userRepo = $repository;
    }

    /**
     * Method getAllUsers
     *
     * Gets all the users from the User table
     *
     * @return mixed
     */
    public function getAllUsers()
    {
        $users = $this->userRepo->getAll();
        return $users;
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function getUserById($id)
    {
        $user = $this->userRepo->getUserById($id);
        return $user;
    }

    public function getUserPersonalInfo($id)
    {
        $pi = $this->userRepo->getUserPersonalInformation($id);
        return $pi;
    }

    public function getIdentifyingInfo($id)
    {
        $identifyingInfo = $this->userRepo->getUserIdentifyingInfo($id);
        return $identifyingInfo;
    }

    public function getFullProfile($id)
    {
        $profile  = new stdClass();
        $profile->IdentifyingInfo = $this->userRepo->getUserIdentifyingInfo($id);
        $profile->ContactInfo = $this->userRepo->getContactInfo($id);
        $profile->EducationHistory = $this->userRepo->getEducationHistory($id);
        $profile->EmploymentHistory = $this->userRepo->getEmploymentHistory($id);
        $profile->ProfessionalDistinctions = $this->userRepo->getProfessionalDistinctions($id);
        $profile->FundingHistory = $this->userRepo->getFundingHistory($id);
        $profile->Outputs = $this->userRepo->getOutputs($id);
        $profile->ServicesResearchScholarly = $this->userRepo->getServicesResearchScholarly($id);
        $profile->ServicesOther = $this->userRepo->getServicesOther($id);

        return $profile;
    }
}