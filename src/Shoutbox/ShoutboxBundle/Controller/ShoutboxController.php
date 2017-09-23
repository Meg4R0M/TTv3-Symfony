<?php

namespace Shoutbox\ShoutboxBundle\Controller;

use Shoutbox\ShoutboxBundle\Entity\shoutbox;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ShoutboxController extends Controller
{
    /**
     * @return Response
     */
    public function getShoutboxAction()
    {
        $usr= $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        if ($usr == "anon."){
            $curuser = null;
        } else {
            //TODO Check Username and search him in DB
            //TODO Return userinfos to view
            $curuser = $em->getRepository('UsersBundle:Users')->findUserIdByUsername(''.$usr.'');
        }

        $shouts = $em->getRepository('ShoutboxBundle:shoutbox')->findBy(array(), array('date' => 'DESC'));

        return $this->render('ShoutboxBundle:Default:getShoutbox.html.twig', array(
            'shouts' => $shouts,
            'curuser' => $curuser,
            'color' => 'red'
        ));
    }

    /**
     * @param Request $request
     * @return Response
     */
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

    /**
     * @param Request $request
     * @return Response
     */
    public function delShoutboxAction (Request $request)
    {
        $idShout = $request->request->get('msgid');
        $em = $this->getDoctrine()->getManager();
        $shout = $em->getRepository('ShoutboxBundle:shoutbox')->findOneBy(array('id' => $idShout));
        if ($shout){
            $em->remove($shout);
            $em->flush();

            return new Response('OK', 200);
        }else{
            return new Response('NOPE', 200);
        }
    }

}
