<?php
namespace Users\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Users\UsersBundle\Entity\Users;
use Users\UsersBundle\Form\MembercpContactType;
use Users\UsersBundle\Form\MembercpPreferencesType;
use Users\UsersBundle\Form\MembercpType;
use Users\UsersBundle\Form\MembercpPrivacyType;
use Users\UsersBundle\Form\MembercpSignatureType;
use Users\UsersBundle\Form\MembercpAvatarType;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class MembercpController extends Controller
{
    public function membercpAction(Request $request)
    {
        $userinfo = $this->get('security.token_storage')->getToken()->getUser();
        if ($userinfo == "anon.") {
            return $this->redirectToRoute('fos_user_security_login');
        }
        $em = $this->getDoctrine()->getManager();
        $user = $this->getCurrentUserId();

        $editForm = $this->createEditForm($user, $type = 'membercp');
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted()) {
            if ($editForm->isValid()) {
                $em->flush();
                $flashmessage = 'Successfull Edit !';
                return $this->render('UsersBundle:Membercp:membercp.html.twig', array(
                    'user' => $user,
                    'form' => $editForm->createView(),
                    'flashmessage' => $flashmessage
                ));
            } else {
                throw new \Exception('Something went wrong!');
            }
        }

        return $this->render('UsersBundle:Membercp:membercp.html.twig', array(
            'user' => $user,
            'form' => $editForm->createView()
        ));
    }

    public function membercpContactAction(Request $request)
    {
        $userinfo = $this->get('security.token_storage')->getToken()->getUser();
        if ($userinfo == "anon.") {
            return $this->redirectToRoute('fos_user_security_login');
        }
        $em = $this->getDoctrine()->getManager();
        $user = $this->getCurrentUserId();

        $editContactForm = $this->createEditForm($user, $type = 'contact');
        $editContactForm->handleRequest($request);

        if ($editContactForm->isSubmitted()) {
            if ($editContactForm->isValid()) {

                $em->flush();
                $flashmessage = 'Successfull Edit !';

                return $this->render('UsersBundle:Membercp:membercpcontact.html.twig', array(
                    'user' => $user,
                    'form' => $editContactForm->createView(),
                    'flashmessage' => $flashmessage
                ));
            } else {
                throw new \Exception('Something went wrong!');
            }
        }

        return $this->render('UsersBundle:Membercp:membercpcontact.html.twig', array(
            'user' => $user,
            'form' => $editContactForm->createView()
        ));
    }

    public function membercpPreferencesAction(Request $request)
    {
        $userinfo = $this->get('security.token_storage')->getToken()->getUser();
        if ($userinfo == "anon.") {
            return $this->redirectToRoute('fos_user_security_login');
        }
        $user = $this->getCurrentUserId();

        $editPreferencesForm = $this->createEditForm($user, $type = 'preferences');
        $editPreferencesForm->handleRequest($request);

        if ($editPreferencesForm->isSubmitted()) {
            if ($editPreferencesForm->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->flush();
                $flashmessage = 'Successfull Edit !';

                return $this->render('UsersBundle:Membercp:membercppreferences.html.twig', array(
                    'user' => $user,
                    'form' => $editPreferencesForm->createView(),
                    'flashmessage' => $flashmessage
                ));
            } else {
                throw new \Exception('Something went wrong!');
            }
        }

        return $this->render('UsersBundle:Membercp:membercppreferences.html.twig', array(
            'user' => $user,
            'form' => $editPreferencesForm->createView()
        ));
    }

    public function membercpPrivacyAction(Request $request) {
        $userinfo = $this->get('security.token_storage')->getToken()->getUser();
        if ($userinfo == "anon.") {
            return $this->redirectToRoute('fos_user_security_login');
        }
        $user = $this->getCurrentUserId();

        $editPrivacyForm = $this->createEditForm($user, $type = 'privacy');
        $editPrivacyForm->handleRequest($request);

        if ($editPrivacyForm->isSubmitted()) {
            if ($editPrivacyForm->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->flush();
                $flashmessage = 'Successfull Edit !';

                return $this->render('UsersBundle:Membercp:membercpprivacy.html.twig', array(
                    'user' => $user,
                    'form' => $editPrivacyForm->createView(),
                    'flashmessage' => $flashmessage
                ));
            } else {
                throw new \Exception('Something went wrong!');
            }
        }

        return $this->render('UsersBundle:Membercp:membercpprivacy.html.twig', array(
            'user' => $user,
            'form' => $editPrivacyForm->createView()
        ));
    }

    /**
     * Change user password.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function membercpPasswordAction(Request $request) {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /** @var $dispatcher EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory FactoryInterface */
        $formFactory = $this->get('fos_user.change_password.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var $userManager UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_SUCCESS, $event);

            $userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_profile_show');
                $response = new RedirectResponse($url);
            }

            $dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }

        return $this->render('UsersBundle:Membercp:membercppassword.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function membercpSignatureAction(Request $request) {
        $userinfo = $this->get('security.token_storage')->getToken()->getUser();
        if ($userinfo == "anon.") {
            return $this->redirectToRoute('fos_user_security_login');
        }
        $user = $this->getCurrentUserId();

        $editSignatureForm = $this->createEditForm($user, $type = 'signature');
        $editSignatureForm->handleRequest($request);

        if ($editSignatureForm->isSubmitted()) {
            if ($editSignatureForm->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->flush();
                $flashmessage = 'Successfull Edit !';

                return $this->render('UsersBundle:Membercp:membercpsignature.html.twig', array(
                    'user' => $user,
                    'form' => $editSignatureForm->createView(),
                    'flashmessage' => $flashmessage
                ));
            } else {
                throw new \Exception('Something went wrong!');
            }
        }

        return $this->render('UsersBundle:Membercp:membercpsignature.html.twig', array(
            'user' => $user,
            'form' => $editSignatureForm->createView()
        ));
    }

    public function membercpAvatarAction(Request $request) {
        $userinfo = $this->get('security.token_storage')->getToken()->getUser();
        if ($userinfo == "anon.") {
            return $this->redirectToRoute('fos_user_security_login');
        }
        $user = $this->getCurrentUserId();

        $editAvatarForm = $this->createEditForm($user, $type = 'avatar');
        $editAvatarForm->handleRequest($request);

        if ($editAvatarForm->isSubmitted()) {
            if ($editAvatarForm->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->flush();
                $flashmessage = 'Successfull Edit !';

                return $this->render('UsersBundle:Membercp:membercpavatar.html.twig', array(
                    'user' => $user,
                    'form' => $editAvatarForm->createView(),
                    'flashmessage' => $flashmessage
                ));
            } else {
                throw new \Exception('Something went wrong!');
            }
        }

        return $this->render('UsersBundle:Membercp:membercpavatar.html.twig', array(
            'user' => $user,
            'form' => $editAvatarForm->createView()
        ));
    }

    public function membercpInviteAction() {
        return $this->render('UsersBundle:Membercp:membercpinvite.html.twig');
    }

    public function membercpUpgradeAction() {
        return $this->render('UsersBundle:Membercp:membercpupgrade.html.twig');
    }

    public function membercpFollowAction() {
        return $this->render('UsersBundle:Membercp:membercpfollow.html.twig');
    }

    public function membercpGalleryAction() {
        return $this->render('UsersBundle:Membercp:membercpgallery.html.twig');
    }

    public function membercpPerformanceAction() {
        return $this->render('UsersBundle:Membercp:membercpperformance.html.twig');
    }

    public function membercpSubscribedAction() {
        return $this->render('UsersBundle:Membercp:membercpsubscribed.html.twig');
    }

    public function membercpPortcheckAction() {
        return $this->render('UsersBundle:Membercp:membercpportcheck.html.twig');
    }

    public function membercpAlertsAction() {
        return $this->render('UsersBundle:Membercp:membercpalerts.html.twig');
    }

    /**
     * Creates a form to edit a Produits entity.
     *
     * @param Users $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Users $user, $type)
    {
        if ($type == 'membercp') {
            $form = $this->createForm(MembercpType::class, $user);
        } elseif ($type == 'contact') {
            $form = $this->createForm(MembercpContactType::class, $user);
        } elseif ($type == 'preferences') {
            $form = $this->createForm(MembercpPreferencesType::class, $user);
        } elseif ($type == 'privacy') {
            $form = $this->createForm(MembercpPrivacyType::class, $user);
        } elseif ($type == 'signature') {
            $form = $this->createForm(MembercpSignatureType::class, $user);
        } elseif ($type == 'avatar') {
            $form = $this->createForm(MembercpAvatarType::class, $user);
        }

        $form->add('submit', SubmitType::class, array('label' => 'Update'));

        return $form;
    }

    /**
     * Get cuurent user ID or redirect to login page
     *
     * @return null|object|\Symfony\Component\HttpFoundation\RedirectResponse|Users
     */
    private function getCurrentUserId()
    {
        $userinfo = $this->get('security.token_storage')->getToken()->getUser();
        if ($userinfo == "anon.") {
            return $this->redirectToRoute('fos_user_security_login');
        } else {
            $id = $userinfo->getId();
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('UsersBundle:Users')->find($id);
            return $user;
        }
    }
}