<?php
/**
 * Created by PhpStorm.
 * User: ravi
 * Date: 7/29/16
 * Time: 12:21 PM
 */

namespace CoreBundle\Controller;


use CoreBundle\Services\UserService;
use Symfony\Component\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Response;
interface ControllerInterface
{
    public function __construct(EngineInterface $engineInterface, UserService $userService);

}