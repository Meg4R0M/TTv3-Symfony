<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UtilisateursBlockController extends Controller
{
    public function loginAction()
    {
        return $this->render('UtilisateursBundle:Blocks:loginblock.html.twig', array('error' => null));
    }

    public function donateAction()
    {
        return $this->render('UtilisateursBundle:Blocks:donateblock.html.twig');
    }

    public function statsAction()
    {
        return $this->render('UtilisateursBundle:Blocks:statsblock.html.twig');
    }

    public function membersonlineAction()
    {
        return $this->render('UtilisateursBundle:Blocks:membersonlineblock.html.twig');
    }

    public function membersonline24Action()
    {
        return $this->render('UtilisateursBundle:Blocks:membersonline24block.html.twig');
    }
}
