<?php
namespace Users\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InfosController extends Controller
{
    public function infobarAction()
    {
        $usr= $this->get('security.token_storage')->getToken()->getUser();
        return $this->render('UsersBundle:Infos:infobar.html.twig', array('user' => $usr));
    }
}