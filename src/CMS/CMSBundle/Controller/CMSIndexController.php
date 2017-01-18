<?php

namespace CMS\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CMSIndexController extends Controller
{
    public function shoutboxAction()
    {
        return $this->render('CMSBundle:Frames:shoutbox.html.twig');
    }

    public function fullpageLoginAction()
    {
        return $this->render('UsersBundle:Default:login.html.twig', array('error' => null));
    }
}