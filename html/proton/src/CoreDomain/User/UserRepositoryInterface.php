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
}