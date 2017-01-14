<?php

namespace Torrents\TorrentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TorrentsIndexController extends Controller
{
    public function welcomeAction()
    {
        return $this->render('TorrentsBundle:Frames:welcome.html.twig');
    }

    public function advertisementsAction()
    {
        return $this->render('TorrentsBundle:Frames:advertisements.html.twig');
    }

    public function newsAction()
    {
        return $this->render('TorrentsBundle:Frames:news.html.twig');
    }

    public function shoutboxAction()
    {
        return $this->render('TorrentsBundle:Frames:shoutbox.html.twig');
    }

    public function disclaimerAction()
    {
        return $this->render('TorrentsBundle:Frames:disclaimer.html.twig');
    }
}