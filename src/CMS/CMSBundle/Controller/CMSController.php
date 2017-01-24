<?php

namespace CMS\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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

    public function ajaxAction(Request $request)
    {
        if ($request->isXmlHttpRequest()){
            $action = $request->request->get('action');
            if ($action == 'view_unread_messages')
            {
                $provider = $this->container->get('fos_message.provider');
                $threads = $provider->getInboxThreads();

                return $this->render('MessageBundle:Message:inboxAjax.html.twig', array(
                    'threads' => $threads
                ));
            }
            return new Response("<hr><br /><b>".$action."</b><br /><hr>", 200);
        }
        return new Response("Erreur : Ce n'est pas une requete Ajax", 400);
    }

    public function ajaxMessagesAction(Request $request)
    {
        if ($request->isXmlHttpRequest()){
            $action = $request->request->get('action');
            if ($action == 'messages_new_message')
            {
                $form = $this->container->get('fos_message.new_thread_form.factory')->create();
                $formHandler = $this->container->get('fos_message.new_thread_form.handler');

                $do = $request->request->get('do');
                if ($do == 'save') {
                    $message = $formHandler->process($form);
                    return new RedirectResponse($this->container->get('router')->generate('message_thread_view', array(
                        'threadId' => $message->getThread()->getId(),
                    )));
                }

                return $this->container->get('templating')->renderResponse('MessageBundle:Message:newThreadAjax.html.twig', array(
                    'form' => $form->createView(),
                    'data' => $form->getData(),
                ));
            }
            elseif ($action == 'mark_as_unread')
            {
                /*$idThread = $request->request->get('id');
                $em = $this->getDoctrine()->getManager();
                $thread = $em->getRepository('UsersBundle:MessageMetadata')->findOneBy(array('id' => $idThread));
                $thread->setIsRead(0);
                $em->persist($thread);
                $em->flush();*/
                return new Response("<hr><br /><b>Not yet implemented !</b><br /><hr>", 200);
            }
            return new Response("<hr><br /><b>".$action."</b><br /><hr>", 200);
        }
        return new Response("Erreur : Ce n'est pas une requete Ajax", 400);
    }
}
