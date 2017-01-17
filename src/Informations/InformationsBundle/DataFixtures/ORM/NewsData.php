<?php

namespace Informations\InformationsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Informations\InformationsBundle\Entity\News;

class NewsData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $news1 = new News();
        $news1->setAdded(new \DateTime());
        $news1->setTitle('Welcome to TTv3 Symfony Edition');
        $news1->setBody('Welcome to Torrent Trader v3 Symfony Edition | This site is currently under developpement. Please be Patient...');
        $user = $this->container->get('fos_user.user_manager');
        $id = $user->findUserByUsername('Admin');
        $news1->setUser($id);
        $manager->persist($news1);

        $manager->flush();

        $this->addReference('news1', $news1);

    }

    public function getOrder()
    {
        return 3;
    }
}