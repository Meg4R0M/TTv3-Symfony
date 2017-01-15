<?php

namespace Torrents\TorrentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TorrentsController extends Controller
{
    public function indexAction()
    {
        $usr= $this->get('security.token_storage')->getToken()->getUser();
        if ($usr == "anon."){
            return $this->render('TorrentsBundle:Default:index.html.twig');
        }else{
            return $this->render('TorrentsBundle:Default:index.html.twig', array('user' => $usr));
        }
    }
}
