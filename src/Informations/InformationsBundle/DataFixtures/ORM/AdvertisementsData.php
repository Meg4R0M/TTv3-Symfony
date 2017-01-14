<?php

namespace Informations\InformationsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Informations\InformationsBundle\Entity\Advertisements;

class AdvertisementsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $advertisements1 = new Advertisements();
        $advertisements1->setTitle('TTv3: Social Engagement');
        $advertisements1->setBody('Keep your members coming back by letting them earn points for posting comments, torrents... An intuitive "TTv3 like" system makes members feel appreciated for their contributions, while integration with Facebook, Twitter and Google +1 allows easy sharing.');
        $advertisements1->setImagePath('http://templateshares-ue.net/images/social.png');
        $manager->persist($advertisements1);

        $advertisements2 = new Advertisements();
        $advertisements2->setTitle('TTv3: Great Plugins');
        $advertisements2->setBody('TTv3 is built to be the most extensible and flexible CMS software ever. There are many build-in plugins available in the vanilla source, such as Shoutbox, Recent News, Recent Threads, Recent Torrents, Poll and much more...');
        $advertisements2->setImagePath('http://templateshares-ue.net/images/plugins.png');
        $manager->persist($advertisements2);

        $advertisements3 = new Advertisements();
        $advertisements3->setTitle('TTv3: Easy Styling');
        $advertisements3->setBody('You can make further changes through an extensive TTv3 style manager, or edit HTML and CSS in your favorite editor. No code changes necessary!');
        $advertisements3->setImagePath('http://templateshares-ue.net/images/styles.png');
        $manager->persist($advertisements3);

        $advertisements4 = new Advertisements();
        $advertisements4->setTitle('TTv3: Alerts');
        $advertisements4->setBody('Make it easy for members to stay up to date with updates that are applicable to them. They\'ll receive alerts when someone quotes their post or responds to a status update, when they receive a new message, and more.');
        $advertisements4->setImagePath('http://templateshares-ue.net/images/alerts.png');
        $manager->persist($advertisements4);

        $advertisements5 = new Advertisements();
        $advertisements5->setTitle('TTv3: Affordable');
        $advertisements5->setBody('Pay Once and use TTv3 Free for Lifetime! No recurring billing!');
        $manager->persist($advertisements5);

        $advertisements6 = new Advertisements();
        $advertisements6->setTitle('TTv3: Scalable');
        $advertisements6->setBody('TTv3 works on a small VPS server or a Dedicated server.');
        $manager->persist($advertisements6);

        $advertisements7 = new Advertisements();
        $advertisements7->setTitle('TTv3: Mobile Support');
        $advertisements7->setBody('TTv3 works with mobile devices. This includes IOS and Android.');
        $manager->persist($advertisements7);

        $advertisements8 = new Advertisements();
        $advertisements8->setTitle('TTv3: Technical support');
        $advertisements8->setBody('We make our customers happy by providing superior support.');
        $manager->persist($advertisements8);

        $advertisements9 = new Advertisements();
        $advertisements9->setTitle('TTv3: Development');
        $advertisements9->setBody('We\'re constantly updating TTv3 to improve features and performance.');
        $manager->persist($advertisements9);

        $manager->flush();

        $this->addReference('advertisements1', $advertisements1);
        $this->addReference('advertisements2', $advertisements2);
        $this->addReference('advertisements3', $advertisements3);
        $this->addReference('advertisements4', $advertisements4);
        $this->addReference('advertisements5', $advertisements5);
        $this->addReference('advertisements6', $advertisements6);
        $this->addReference('advertisements7', $advertisements7);
        $this->addReference('advertisements8', $advertisements8);
        $this->addReference('advertisements9', $advertisements9);

    }

    public function getOrder()
    {
        return 1;
    }
}