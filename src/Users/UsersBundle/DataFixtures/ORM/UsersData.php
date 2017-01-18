<?php

namespace Users\UsersBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Users\UsersBundle\Entity\Users;
use Users\UsersBundle\Entity\Avatar;

class UsersData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**        $user->se
     * Load data fixtures with the passed EntityManager
     * @param ObjectManager $manager
     */

    public function load(ObjectManager $manager)
    {
        $userManager = $this->container->get('fos_user.user_manager');

        $user = new Users();
        $user->setUsername('Admin');
        $user->setEmail('admin@domain.com');
        $user->setPlainPassword('password');
        $user->setEnabled(true);
        $user->addRole('ROLE_ADMIN');
        $this->addReference('user-admin', $user);
        $user->setAdded(new \DateTime());
        $user->setIp('::1');
        $user->setSecret('');
        $user->setDonated('0');
        $user->setNotifs('');
        $user->setPasskey('');
        $user->setStylesheet(0);
        $user->setAge(new \DateTime('1970-00-00'));
        $user->setTitle('');
        $user->setClient('');
        $user->setSignature('');
        $user->setTeam('');
        $user->setTzoffset('');
        $em = $this->container->get('Doctrine')->getManager();
        $mood = $em->getRepository('UsersBundle:Moods')->findOneBy(array('id' => 1));
        $user->setMoods($mood);
        $userManager->updateUser($user, true);
    }

    /**
     * Sets the container.
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function getOrder()
    {
        return 3;
    }
}