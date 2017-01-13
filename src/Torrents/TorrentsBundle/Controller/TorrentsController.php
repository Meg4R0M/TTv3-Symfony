<?php

namespace Torrents\TorrentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TorrentsController extends Controller
{
    public function indexAction()
    {
        return $this->render('TorrentsBundle:Default:index.html.twig');
    }

    public function welcomeAction()
    {
        return $this->render('TorrentsBundle:Default:welcome.html.twig');
    }

    public function advertisementsAction()
    {
        return $this->render('TorrentsBundle:Default:advertisements.html.twig');
    }
}
