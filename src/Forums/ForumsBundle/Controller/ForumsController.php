<?php

namespace Forums\ForumsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ForumsController extends Controller
{
    public function indexAction()
    {
        $em=$this->getDoctrine();
        $forumsCategories = $em->getRepository('ForumsBundle:ForumsCategories')->findAll();
        $forums = $em->getRepository('ForumsBundle:Forums')->findAll();
        $forumsTopics = $em->getRepository('ForumsBundle:ForumsTopics')->findAll();
        $forumsPosts = $em->getRepository('ForumsBundle:ForumsPosts')->findAll();

        return $this->render('ForumsBundle:Default:index.html.twig', array('ForumsCats' => $forumsCategories,
                                                                                'Forums' => $forums,
                                                                                'ForumsTopics' => $forumsTopics,
                                                                                'ForumsPosts' => $forumsPosts));
    }
}
