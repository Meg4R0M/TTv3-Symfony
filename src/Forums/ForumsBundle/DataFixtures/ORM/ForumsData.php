<?php

namespace Forums\ForumsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Forums\ForumsBundle\Entity\Forums;

class ForumsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $forums1 = new Forums();
        $forums1->setSort(1);
        $forums1->setName('General Torrent Discussions');
        $forums1->setDecription('Everything related to the torrents world is discussed here');
        $forums1->setMinclassread(1);
        $forums1->setMinclasswrite(1);
        $forums1->setGuestRead('yes');
        $forums1->setCategory(1);
        $manager->persist($forums1);

        $forums2 = new Forums();
        $forums2->setSort(2);
        $forums2->setName('Site News & Announcements');
        $forums2->setDecription('Latest site news and announcements');
        $forums2->setMinclassread(1);
        $forums2->setMinclasswrite(1);
        $forums2->setGuestRead('yes');
        $forums2->setCategory(1);
        $manager->persist($forums2);

        $forums3 = new Forums();
        $forums3->setSort(3);
        $forums3->setName('Site Rules');
        $forums3->setDecription('Please read before posting');
        $forums3->setMinclassread(1);
        $forums3->setMinclasswrite(1);
        $forums3->setGuestRead('yes');
        $forums3->setCategory(1);
        $manager->persist($forums3);

        $forums4 = new Forums();
        $forums4->setSort(4);
        $forums4->setName('Mobile Cell Phone & Tablet App');
        $forums4->setDecription('hand held devices');
        $forums4->setMinclassread(1);
        $forums4->setMinclasswrite(1);
        $forums4->setGuestRead('yes');
        $forums4->setCategory(2);
        $manager->persist($forums4);

        $forums5 = new Forums();
        $forums5->setSort(5);
        $forums5->setName('Torrent Issues');
        $forums5->setDecription('Category changes, fake torrent information, general information about bad torrents');
        $forums5->setMinclassread(1);
        $forums5->setMinclasswrite(1);
        $forums5->setGuestRead('yes');
        $forums5->setCategory(2);
        $manager->persist($forums5);

        $forums6 = new Forums();
        $forums6->setSort(6);
        $forums6->setName('Torrent Requests');
        $forums6->setDecription('Can\'t find the torrent you want? Help is here.');
        $forums6->setMinclassread(1);
        $forums6->setMinclasswrite(1);
        $forums6->setGuestRead('yes');
        $forums6->setCategory(2);
        $manager->persist($forums6);

        $forums7 = new Forums();
        $forums7->setSort(7);
        $forums7->setName('My First Torrent');
        $forums7->setDecription('Please POST Here!');
        $forums7->setMinclassread(1);
        $forums7->setMinclasswrite(1);
        $forums7->setGuestRead('yes');
        $forums7->setCategory(2);
        $manager->persist($forums7);

        $forums8 = new Forums();
        $forums8->setSort(8);
        $forums8->setName('Releasers');
        $forums8->setDecription('For releasers who like to keep a thread');
        $forums8->setMinclassread(1);
        $forums8->setMinclasswrite(1);
        $forums8->setGuestRead('yes');
        $forums8->setCategory(2);
        $manager->persist($forums8);

        $manager->flush();

    }

    public function getOrder()
    {
        return 7;
    }
}