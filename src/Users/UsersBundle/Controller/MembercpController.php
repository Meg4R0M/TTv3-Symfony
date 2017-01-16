<?php
namespace Users\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Users\UsersBundle\Entity\Users;
use Users\UsersBundle\Form\MembercpType;

class MembercpController extends Controller
{
    public function membercpAction(Request $request)
    {
        $userinfo = $this->get('security.token_storage')->getToken()->getUser();
        if ($userinfo == "anon."){
            return $this->redirectToRoute('fos_user_security_login');
        }else {
            $id = $userinfo->getId();
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('UsersBundle:Users')->find($id);

            $editForm = $this->createEditForm($user);
            $editForm->handleRequest($request);

            if ($editForm->isValid()) {
                $em->flush();

                return $this->render('UsersBundle:Membercp:membercp.html.twig', array(
                    'user' => $user,
                    'form' => $editForm->createView()
                ));
            }

            return $this->render('UsersBundle:Membercp:membercp.html.twig', array(
                'user' => $user,
                'form' => $editForm->createView()
            ));
        }
    }



    /**
     * Creates a form to edit a Produits entity.
     *
     * @param Users $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Users $user)
    {
        $form = $this->createForm(MembercpType::class, $user);

        $form->add('submit', SubmitType::class, array('label' => 'Mettre à jour', 'attr'=> array('class'=>'button is-success is-outlined')));

        return $form;
    }
}