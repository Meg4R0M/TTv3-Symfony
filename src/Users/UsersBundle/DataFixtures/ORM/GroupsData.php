<?php

namespace Users\UsersBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Users\UsersBundle\Entity\Groups;

class GroupsData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * Load data fixtures with the passed EntityManager
     * @param ObjectManager $manager
     */

    public function load(ObjectManager $manager)
    {
        $groups1 = new Groups();
        $groups1->setLevel('Member');
        $groups1->setColor('#00FFFF');
        $groups1->setViewTorrents(true);
        $groups1->setEditTorrents(false);
        $groups1->setDeleteTorrents(false);
        $groups1->setViewUsers(true);
        $groups1->setEditUsers(false);
        $groups1->setDeleteUsers(false);
        $groups1->setViewNews(true);
        $groups1->setEditNews(false);
        $groups1->setDeleteNews(false);
        $groups1->setCanUpload(true);
        $groups1->setCanDownload(true);
        $groups1->setViewForum(true);
        $groups1->setEditForum(false);
        $groups1->setDeleteForum(false);
        $groups1->setControlPanel(false);
        $groups1->setStaffPage(false);
        $groups1->setStaffPublic(false);
        $groups1->setStaffSort(7);
        $groups1->setMaxslots(2);

        $manager->persist($groups1);

        $groups2 = new Groups();
        $groups2->setLevel('Power User');
        $groups2->setColor('#FF7519');
        $groups2->setViewTorrents(true);
        $groups2->setEditTorrents(false);
        $groups2->setDeleteTorrents(false);
        $groups2->setViewUsers(true);
        $groups2->setEditUsers(false);
        $groups2->setDeleteUsers(false);
        $groups2->setViewNews(true);
        $groups2->setEditNews(false);
        $groups2->setDeleteNews(false);
        $groups2->setCanUpload(true);
        $groups2->setCanDownload(true);
        $groups2->setViewForum(true);
        $groups2->setEditForum(false);
        $groups2->setDeleteForum(false);
        $groups2->setControlPanel(false);
        $groups2->setStaffPage(false);
        $groups2->setStaffPublic(false);
        $groups2->setStaffSort(6);
        $groups2->setMaxslots(4);

        $manager->persist($groups2);

        $groups3 = new Groups();
        $groups3->setLevel('VIP');
        $groups3->setColor('#990099');
        $groups3->setViewTorrents(true);
        $groups3->setEditTorrents(false);
        $groups3->setDeleteTorrents(false);
        $groups3->setViewUsers(true);
        $groups3->setEditUsers(false);
        $groups3->setDeleteUsers(false);
        $groups3->setViewNews(true);
        $groups3->setEditNews(false);
        $groups3->setDeleteNews(false);
        $groups3->setCanUpload(true);
        $groups3->setCanDownload(true);
        $groups3->setViewForum(true);
        $groups3->setEditForum(false);
        $groups3->setDeleteForum(false);
        $groups3->setControlPanel(false);
        $groups3->setStaffPage(false);
        $groups3->setStaffPublic(false);
        $groups3->setStaffSort(5);
        $groups3->setMaxslots(10);

        $manager->persist($groups3);

        $groups4 = new Groups();
        $groups4->setLevel('Uploader');
        $groups4->setColor('#0000FF');
        $groups4->setViewTorrents(true);
        $groups4->setEditTorrents(false);
        $groups4->setDeleteTorrents(false);
        $groups4->setViewUsers(true);
        $groups4->setEditUsers(false);
        $groups4->setDeleteUsers(false);
        $groups4->setViewNews(true);
        $groups4->setEditNews(false);
        $groups4->setDeleteNews(false);
        $groups4->setCanUpload(true);
        $groups4->setCanDownload(true);
        $groups4->setViewForum(true);
        $groups4->setEditForum(false);
        $groups4->setDeleteForum(false);
        $groups4->setControlPanel(false);
        $groups4->setStaffPage(true);
        $groups4->setStaffPublic(false);
        $groups4->setStaffSort(4);
        $groups4->setMaxslots(50);

        $manager->persist($groups4);

        $groups5 = new Groups();
        $groups5->setLevel('Moderator');
        $groups5->setColor('#009900');
        $groups5->setViewTorrents(true);
        $groups5->setEditTorrents(true);
        $groups5->setDeleteTorrents(false);
        $groups5->setViewUsers(true);
        $groups5->setEditUsers(true);
        $groups5->setDeleteUsers(false);
        $groups5->setViewNews(true);
        $groups5->setEditNews(true);
        $groups5->setDeleteNews(false);
        $groups5->setCanUpload(true);
        $groups5->setCanDownload(true);
        $groups5->setViewForum(true);
        $groups5->setEditForum(true);
        $groups5->setDeleteForum(false);
        $groups5->setControlPanel(false);
        $groups5->setStaffPage(true);
        $groups5->setStaffPublic(true);
        $groups5->setStaffSort(3);
        $groups5->setMaxslots(100);

        $manager->persist($groups5);

        $groups6 = new Groups();
        $groups6->setLevel('Super Moderator');
        $groups6->setColor('#00FF00');
        $groups6->setViewTorrents(true);
        $groups6->setEditTorrents(true);
        $groups6->setDeleteTorrents(true);
        $groups6->setViewUsers(true);
        $groups6->setEditUsers(true);
        $groups6->setDeleteUsers(true);
        $groups6->setViewNews(true);
        $groups6->setEditNews(true);
        $groups6->setDeleteNews(true);
        $groups6->setCanUpload(true);
        $groups6->setCanDownload(true);
        $groups6->setViewForum(true);
        $groups6->setEditForum(true);
        $groups6->setDeleteForum(true);
        $groups6->setControlPanel(true);
        $groups6->setStaffPage(true);
        $groups6->setStaffPublic(true);
        $groups6->setStaffSort(2);
        $groups6->setMaxslots(100);

        $manager->persist($groups6);

        $groups7 = new Groups();
        $groups7->setLevel('Administrator');
        $groups7->setColor('#FF0000');
        $groups7->setViewTorrents(true);
        $groups7->setEditTorrents(true);
        $groups7->setDeleteTorrents(true);
        $groups7->setViewUsers(true);
        $groups7->setEditUsers(true);
        $groups7->setDeleteUsers(true);
        $groups7->setViewNews(true);
        $groups7->setEditNews(true);
        $groups7->setDeleteNews(true);
        $groups7->setCanUpload(true);
        $groups7->setCanDownload(true);
        $groups7->setViewForum(true);
        $groups7->setEditForum(true);
        $groups7->setDeleteForum(true);
        $groups7->setControlPanel(true);
        $groups7->setStaffPage(true);
        $groups7->setStaffPublic(false);
        $groups7->setStaffSort(1);
        $groups7->setMaxslots(100);

        $manager->persist($groups7);

        $manager->flush();
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
        return 5;
    }
}