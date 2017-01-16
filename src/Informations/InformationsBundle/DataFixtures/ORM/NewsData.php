<?php

namespace Informations\InformationsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Informations\InformationsBundle\Entity\News;

class NewsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $news1 = new News();
        $news1->setAdded(new \DateTime());
        $news1->setTitle('Welcome to TTv3 Symfony Edition');
        $news1->setBody('Welcome to Torrent Trader v3 Symfony Edition | This site is currently under developpement. Please be Patient...');
        $news1->setUser(1);
        $manager->persist($news1);

        $manager->flush();

        $this->addReference('news1', $news1);

    }

    public function getOrder()
    {
        return 3;
    }
}