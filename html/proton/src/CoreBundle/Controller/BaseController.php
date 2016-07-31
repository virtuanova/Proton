<?php

namespace CoreBundle\Controller;

use CoreBundle\Services\UserService;
use Symfony\Component\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Response;
abstract class BaseController implements ControllerInterface
{

    protected $templateEngine;
    protected $userService;

    public function __construct(EngineInterface $engineInterface, UserService $userService)
    {
        $this->templateEngine = $engineInterface;
        $this->userService = $userService;
    }


    public function indexAction() {}

    public function showAction(){}

    public function getUserById($id){}
}
