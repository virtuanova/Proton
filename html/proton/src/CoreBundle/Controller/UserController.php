<?php
/**
 * Created by PhpStorm.
 * User: ravi
 * Date: 7/29/16
 * Time: 12:35 PM
 */

namespace CoreBundle\Controller;

use CoreBundle\Entity\PersonInfo;

class UserController extends BaseController
{


    public function indexAction()
    {
        return $this->templateEngine->render(
            'CoreBundle:Default:index.html.twig',
            ['table' => '']
        );

    }

    public function showAction()
    {
        $users = $this->userService->getAllUsers();
        $html ='<tbody>';
        foreach($users as $user) {
            $html .= sprintf('<tr><td>%s</td><td>%s</td></tr>','First Name', $user->getFirstName());
            $html .= sprintf('<tr><td>%s</td><td>%s</td></tr>','Last Name', $user->getLastName());
            $html .= sprintf('<tr><td>%s</td><td>%s</td></tr>','Internal Id', $user->getInternalId());

        }
        $html .='</tbody>';
        return $this->templateEngine->render(
            'CoreBundle:Default:index.html.twig',
            [
            'table' => $html
        ]
        );
    }
    public function getUserById($id)
    {
        $html ='<tbody>';
        $user = $this->userService->getUserById($id);
        /** @var PersonInfo $userInfo */
        $userInfo = $this->userService->getUserPersonalInfo($id);
        $html .= sprintf('<tr><td>%s</td><td>%s</td></tr>','First Name', $user->getFirstName());
        $html .= sprintf('<tr><td>%s</td><td>%s</td></tr>','Last Name', $user->getLastName());
        $html .= sprintf('<tr><td>%s</td><td>%s</td></tr>','Internal Id', $user->getInternalId());
        $html .= sprintf('<tr><td>%s</td><td>%s</td></tr>','PersonalInfo', $userInfo[0]->getDateofBirth()->format('d-M-Y'));
        $html .='</tbody>';
        return $this->templateEngine->render(
            'CoreBundle:Default:index.html.twig',
            [
                'table' => $html
            ]
        );

    }

}