<?php

namespace Torrents\TorrentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TorrentsController extends Controller
{
    public function indexAction()
    {
        return $this->render('TorrentsBundle:Default:index.html.twig');
    }
}
