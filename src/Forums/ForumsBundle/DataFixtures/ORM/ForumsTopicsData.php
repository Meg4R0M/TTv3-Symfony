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
        $forumsTopic1->setUserid($this->getReference('user1'));
        $forumsTopic1->setSubject('test');
        $forumsTopic1->setLocked('no');
        $forumsTopic1->setForumid($this->getReference('forums2'));
        $forumsTopic1->setLastpost(2);
        $forumsTopic1->setMoved('no');
        $forumsTopic1->setSticky('no');
        $forumsTopic1->setViews(74);
        $manager->persist($forumsTopic1);

        $forumsTopic2 = new ForumsTopics();
        $forumsTopic2->setUserid($this->getReference('user1'));
        $forumsTopic2->setSubject('test 2');
        $forumsTopic2->setLocked('no');
        $forumsTopic2->setForumid($this->getReference('forums4'));
        $forumsTopic2->setLastpost(2);
        $forumsTopic2->setMoved('no');
        $forumsTopic2->setSticky('no');
        $forumsTopic2->setViews(74);
        $manager->persist($forumsTopic2);

        $forumsTopic3 = new ForumsTopics();
        $forumsTopic3->setUserid($this->getReference('user1'));
        $forumsTopic3->setSubject('test 3');
        $forumsTopic3->setLocked('no');
        $forumsTopic3->setForumid($this->getReference('forums6'));
        $forumsTopic3->setLastpost(2);
        $forumsTopic3->setMoved('no');
        $forumsTopic3->setSticky('no');
        $forumsTopic3->setViews(74);
        $manager->persist($forumsTopic3);

        $forumsTopic4 = new ForumsTopics();
        $forumsTopic4->setUserid($this->getReference('user1'));
        $forumsTopic4->setSubject('test 4');
        $forumsTopic4->setLocked('no');
        $forumsTopic4->setForumid($this->getReference('forums8'));
        $forumsTopic4->setLastpost(2);
        $forumsTopic4->setMoved('no');
        $forumsTopic4->setSticky('no');
        $forumsTopic4->setViews(74);
        $manager->persist($forumsTopic4);

        $manager->flush();

        $this->addReference('forumsTopic1', $forumsTopic1);
        $this->addReference('forumsTopic2', $forumsTopic2);
        $this->addReference('forumsTopic3', $forumsTopic3);
        $this->addReference('forumsTopic4', $forumsTopic4);

    }

    public function getOrder()
    {
        return 8;
    }
}