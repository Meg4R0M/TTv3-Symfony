<?php

namespace Forums\ForumsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Forums\ForumsBundle\Entity\ForumsTopics;

class ForumsTopicsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $forumsTopic1 = new ForumsTopics();
        $forumsTopic1->setUserid(1);
        $forumsTopic1->setSubject('test');
        $forumsTopic1->setLocked('no');
        $forumsTopic1->setForumid(8);
        $forumsTopic1->setLastpost(2);
        $forumsTopic1->setMoved('no');
        $forumsTopic1->setSticky('no');
        $forumsTopic1->setViews(74);
        $manager->persist($forumsTopic1);

        $manager->flush();

    }

    public function getOrder()
    {
        return 8;
    }
}