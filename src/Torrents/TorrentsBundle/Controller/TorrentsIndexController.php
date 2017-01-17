<?php

namespace Torrents\TorrentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class TorrentsIndexController extends Controller
{
    public function shoutboxAction()
    {
        return $this->render('TorrentsBundle:Frames:shoutbox.html.twig');
    }

    public function fullpageLoginAction()
    {
        return $this->render('UsersBundle:Default:login.html.twig', array('error' => null));
    }
}