<?php

namespace Forums\ForumsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Forums\ForumsBundle\Entity\ForumsPosts;

class ForumsPostsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $forumsPosts1 = new ForumsPosts();
        $forumsPosts1->setTopicid($this->getReference('forumsTopic1'));
        $forumsPosts1->setUserid($this->getReference('user1'));
        $forumsPosts1->setAdded(new \DateTime('now'));
        $forumsPosts1->setBody('testing the new forums');
        $forumsPosts1->setEditedby(null);
        $forumsPosts1->setEditedat(new \DateTime('now'));
        $manager->persist($forumsPosts1);

        $forumsPosts2 = new ForumsPosts();
        $forumsPosts2->setTopicid($this->getReference('forumsTopic2'));
        $forumsPosts2->setUserid($this->getReference('user1'));
        $forumsPosts2->setAdded(new \DateTime('now'));
        $forumsPosts2->setBody('testing the new forums 2');
        $forumsPosts2->setEditedby(null);
        $forumsPosts2->setEditedat(new \DateTime('now'));
        $manager->persist($forumsPosts2);

        $forumsPosts3 = new ForumsPosts();
        $forumsPosts3->setTopicid($this->getReference('forumsTopic3'));
        $forumsPosts3->setUserid($this->getReference('user1'));
        $forumsPosts3->setAdded(new \DateTime('now'));
        $forumsPosts3->setBody('testing the new forums 3');
        $forumsPosts3->setEditedby(null);
        $forumsPosts3->setEditedat(new \DateTime('now'));
        $manager->persist($forumsPosts3);

        $forumsPosts4 = new ForumsPosts();
        $forumsPosts4->setTopicid($this->getReference('forumsTopic4'));
        $forumsPosts4->setUserid($this->getReference('user1'));
        $forumsPosts4->setAdded(new \DateTime('now'));
        $forumsPosts4->setBody('testing the new forums 4');
        $forumsPosts4->setEditedby($this->getReference('user1'));
        $forumsPosts4->setEditedat(new \DateTime('now'));
        $manager->persist($forumsPosts4);

        $forumsPosts5 = new ForumsPosts();
        $forumsPosts5->setTopicid($this->getReference('forumsTopic1'));
        $forumsPosts5->setUserid($this->getReference('user1'));
        $forumsPosts5->setAdded(new \DateTime('now'));
        $forumsPosts5->setBody('testing the new forums - second entry');
        $forumsPosts5->setEditedby($this->getReference('user1'));
        $forumsPosts5->setEditedat(new \DateTime('now'));
        $manager->persist($forumsPosts5);

        $manager->flush();

    }

    public function getOrder()
    {
        return 9;
    }
}