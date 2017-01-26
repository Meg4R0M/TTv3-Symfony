<?php

namespace Shoutbox\ShoutboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Shoutbox\ShoutboxBundle\Entity\shoutbox;

class ShoutboxController extends Controller
{
    public function shoutboxAction()
    {
        return $this->render('ShoutboxBundle:Default:Shoutbox.html.twig');
    }

    public function getShoutboxAction()
    {
        $usr= $this->get('security.token_storage')->getToken()->getUser();
        if ($usr == "anon."){
            $curuser = null;
        } else {
            $curuser = $usr;
        }
        $em = $this->getDoctrine()->getManager();
        $shouts = $em->getRepository('ShoutboxBundle:shoutbox')->findBy(array(), array('date' => 'DESC'));
        return $this->render('ShoutboxBundle:Default:getShoutbox.html.twig', array(
            'shouts' => $shouts,
            'curuser' => $curuser,
            'color' => 'red'
        ));
    }

    public function sendShoutboxAction(Request $request)
    {
        if ($request->isMethod('post')) {
            $currentName = $request->request->get('n');
            $currentChatText = $request->request->get('c');
            $currentUid = $request->request->get('u');

            $em = $this->getDoctrine()->getManager();

            $shout = new shoutbox();
            $shout->setName($currentName);
            $shout->setDate(new \Datetime('NOW'));
            $shout->setText($currentChatText);
            $currentUser = $em->getRepository('UsersBundle:Users')->findOneBy(array('id' => $currentUid));
            $shout->setUid($currentUser);

            $em->persist($shout);
            $em->flush();

            return new Response('OK', 200);
        }else{
            throw $this->createNotFoundException('This page does not exist');
        }
    }
}
