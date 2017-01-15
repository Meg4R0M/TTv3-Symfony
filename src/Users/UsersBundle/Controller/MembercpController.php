<?php
namespace Users\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Users\UsersBundle\Entity\Users;
use Users\UsersBundle\Form\MembercpType;

class MembercpController extends Controller
{
    public function membercpAction()
    {
        $id= $this->get('security.token_storage')->getToken()->getUser()->getId();
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UsersBundle:Users')->find($id);
        $editForm = $this->createEditForm($entity);
        return $this->render('UsersBundle:Membercp:membercp.html.twig', array(
            'entity' => $entity,
            'form'   => $editForm->createView()));
    }

    /**
     * Creates a form to edit a Produits entity.
     *
     * @param Users $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Users $entity)
    {
        $form = $this->createForm(MembercpType::class, $entity);

        $form->add('submit', SubmitType::class, array('label' => 'Mettre à jour', 'attr'=> array('class'=>'button is-success is-outlined')));

        return $form;
    }
}