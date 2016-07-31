<?php
/**
 * Created by PhpStorm.
 * User: ravi
 * Date: 7/29/16
 * Time: 12:31 AM
 */

namespace CoreBundle\Services;

use CoreDomain\User\UserRepositoryInterface;
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
}