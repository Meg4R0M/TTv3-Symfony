<?php

namespace Informations\InformationsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Forums\ForumsBundle\Entity\ForumsCategories;

class ForumsCategoriesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $fcats1 = new ForumsCategories();
        $fcats1->setName('General');
        $fcats1->setSort(1);
        $manager->persist($fcats1);

        $fcats2 = new ForumsCategories();
        $fcats2->setName('Torrents');
        $fcats2->setSort(2);
        $manager->persist($fcats2);

        $manager->flush();

    }

    public function getOrder()
    {
        return 6;
    }
}