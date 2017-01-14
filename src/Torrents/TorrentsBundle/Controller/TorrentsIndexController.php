<?php

namespace Torrents\TorrentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TorrentsIndexController extends Controller
{
    public function shoutboxAction()
    {
        return $this->render('TorrentsBundle:Frames:shoutbox.html.twig');
    }
}