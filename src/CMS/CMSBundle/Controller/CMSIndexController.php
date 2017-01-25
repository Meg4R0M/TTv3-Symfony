<?php

namespace CMS\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CMSIndexController extends Controller
{
    public function shoutboxAction()
    {
        $usr= $this->get('security.token_storage')->getToken()->getUser();
        return $this->render('CMSBundle:Frames:shoutbox.html.twig', array(
            'usr' => $usr));
    }

    public function fullpageLoginAction()
    {
        return $this->render('UsersBundle:Default:login.html.twig', array('error' => null));
    }
}