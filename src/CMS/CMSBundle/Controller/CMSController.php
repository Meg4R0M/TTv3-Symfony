<?php

namespace CMS\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CMSController extends Controller
{
    public function indexAction()
    {
        $usr= $this->get('security.token_storage')->getToken()->getUser();
        if ($usr == "anon."){
            return $this->render('CMSBundle:Default:index.html.twig');
        }else{
            return $this->render('CMSBundle:Default:index.html.twig', array('user' => $usr));
        }
    }
}
