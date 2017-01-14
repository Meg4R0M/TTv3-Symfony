<?php

namespace Users\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsersBlockController extends Controller
{
    public function loginAction()
    {
        return $this->render('UsersBundle:Blocks:loginblock.html.twig', array('error' => null));
    }

    public function donateAction()
    {
        return $this->render('UsersBundle:Blocks:donateblock.html.twig');
    }

    public function statsAction()
    {
        return $this->render('UsersBundle:Blocks:statsblock.html.twig');
    }

    public function membersonlineAction()
    {
        return $this->render('UsersBundle:Blocks:membersonlineblock.html.twig');
    }

    public function membersonline24Action()
    {
        return $this->render('UsersBundle:Blocks:membersonline24block.html.twig');
    }
}
