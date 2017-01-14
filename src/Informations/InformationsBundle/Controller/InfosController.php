<?php

namespace Informations\InformationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InfosController extends Controller
{
    public function advertisementsAction()
    {
        return $this->render('InformationsBundle:Frames:advertisements.html.twig');
    }

    public function disclaimerAction()
    {
        return $this->render('InformationsBundle:Frames:disclaimer.html.twig');
    }

    public function newsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $news = $em->getRepository('InformationsBundle:News')->findBy(array(), array('added' => 'desc'), 3);
        return $this->render('InformationsBundle:Frames:news.html.twig', array('news' => $news));
    }

    public function welcomeAction()
    {
        return $this->render('InformationsBundle:Frames:welcome.html.twig');
    }
}
