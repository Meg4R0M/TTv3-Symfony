<?php
namespace Users\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Users\UsersBundle\Entity\Users;
use Users\UsersBundle\Form\MembercpType;
use Users\UsersBundle\Entity\Moods;

class MembercpController extends Controller
{
    public function membercpAction()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($user == "anon."){
            return $this->redirectToRoute('fos_user_security_login');
        }else {
            $id = $user->getId();
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UsersBundle:Users')->find($id);
            $moods = $em->getRepository('UsersBundle:Moods')->findAll();
            $moodchoicename = array();
            $i = 0;
            foreach ($moods as $mood){
                $moodchoicename[$i] = $mood;
                $i++;
            }
            $editForm = $this->createEditForm($entity);
            return $this->render('UsersBundle:Membercp:membercp.html.twig', array(
                'entity' => $entity,
                'moods' => $moodchoicename,
                'form' => $editForm->createView()));
        }
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