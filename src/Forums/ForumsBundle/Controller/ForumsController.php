<?php

namespace Forums\ForumsBundle\Controller;

use Forums\ForumsBundle\Entity\Forums;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Forum controller.
 *
 */
class ForumsController extends Controller
{
    /**
     * Lists all forum entities.
     *
     */
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

    /**
     * Creates a new forum entity.
     *
     */
    public function newAction(Request $request)
    {
        $forum = new Forums();
        $form = $this->createForm('Forums\ForumsBundle\Form\ForumsType', $forum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($forum);
            $em->flush();

            return $this->redirectToRoute('forums_show', array('id' => $forum->getId()));
        }

        return $this->render('ForumsBundle:Forums:new.html.twig', array(
            'forum' => $forum,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a forum entity.
     *
     */
    public function showAction(Forums $forum)
    {
        $em=$this->getDoctrine();
        $forums = $em->getRepository('ForumsBundle:Forums')->findOneBy(array('id' => $forum->getId()));
        $forumsTopics = $em->getRepository('ForumsBundle:ForumsTopics')->findBy(array('forumid' => $forum->getId()));
        $forumsPosts = $em->getRepository('ForumsBundle:ForumsPosts')->findAll();
        //$deleteForm = $this->createDeleteForm($forum);'delete_form' => $deleteForm->createView(),

        return $this->render('ForumsBundle:Forums:show.html.twig', array(
            'forum' => $forums,
            'forumTopics' => $forumsTopics,
            'forumPosts' => $forumsPosts,
        ));
    }

    /**
     * Displays a form to edit an existing forum entity.
     *
     */
    public function editAction(Request $request, Forums $forum)
    {
        $deleteForm = $this->createDeleteForm($forum);
        $editForm = $this->createForm('Forums\ForumsBundle\Form\ForumsType', $forum);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('forums_edit', array('id' => $forum->getId()));
        }

        return $this->render('ForumsBundle:Forums:edit.html.twig', array(
            'forum' => $forum,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a forum entity.
     *
     */
    public function deleteAction(Request $request, Forums $forum)
    {
        $form = $this->createDeleteForm($forum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($forum);
            $em->flush();
        }

        return $this->redirectToRoute('forums_homepage');
    }

    /**
     * Creates a form to delete a forum entity.
     *
     * @param Forums $forum The forum entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Forums $forum)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('forums_delete', array('id' => $forum->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
