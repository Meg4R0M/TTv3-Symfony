<?php

namespace Users\UsersBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Users\UsersBundle\Entity\Moods;

class MoodsData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
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
        $news1 = new Moods();
        $news1->setName('Aggressive');
        $news1->setMoodpic('Aggressive.gif');
        $manager->persist($news1);

        $news2 = new Moods();
        $news2->setName('Alienated');
        $news2->setMoodpic('Alienated.gif');
        $manager->persist($news2);

        $news3 = new Moods();
        $news3->setName('Amazed');
        $news3->setMoodpic('Amazed.gif');
        $manager->persist($news3);

        $news4 = new Moods();
        $news4->setName('Amused');
        $news4->setMoodpic('Amused.gif');
        $manager->persist($news4);

        $news5 = new Moods();
        $news5->setName('Angelic');
        $news5->setMoodpic('Angelic.gif');
        $manager->persist($news5);

        $news6 = new Moods();
        $news6->setName('Angry');
        $news6->setMoodpic('Angry.gif');
        $manager->persist($news6);

        $news7 = new Moods();
        $news7->setName('Apelike');
        $news7->setMoodpic('Apelike.gif');
        $manager->persist($news7);

        $news8 = new Moods();
        $news8->setName('Artistic');
        $news8->setMoodpic('Artistic.gif');
        $manager->persist($news8);

        $news9 = new Moods();
        $news9->setName('Asleep');
        $news9->setMoodpic('Asleep.gif');
        $manager->persist($news9);

        $news10 = new Moods();
        $news10->setName('Balanced');
        $news10->setMoodpic('Balanced.gif');
        $manager->persist($news10);

        $news11 = new Moods();
        $news11->setName('Banhappy');
        $news11->setMoodpic('Banhappy.gif');
        $manager->persist($news11);

        $news12 = new Moods();
        $news12->setName('Bashful');
        $news12->setMoodpic('Bashful.gif');
        $manager->persist($news12);

        $news13 = new Moods();
        $news13->setName('Bitching');
        $news13->setMoodpic('Bitching.gif');
        $manager->persist($news13);

        $news14 = new Moods();
        $news14->setName('Blah');
        $news14->setMoodpic('Blah.gif');
        $manager->persist($news14);

        $news15 = new Moods();
        $news15->setName('Bookworm');
        $news15->setMoodpic('Bookworm.gif');
        $manager->persist($news15);

        $news16 = new Moods();
        $news16->setName('Bored');
        $news16->setMoodpic('Bored.gif');
        $manager->persist($news16);

        $news17 = new Moods();
        $news17->setName('Breezy');
        $news17->setMoodpic('Breezy.gif');
        $manager->persist($news17);

        $news18 = new Moods();
        $news18->setName('Brooding');
        $news18->setMoodpic('Brooding.gif');
        $manager->persist($news18);

        $news19 = new Moods();
        $news19->setName('Busy');
        $news19->setMoodpic('Busy.gif');
        $manager->persist($news19);

        $news20 = new Moods();
        $news20->setName('Buzzed');
        $news20->setMoodpic('Buzzed.gif');
        $manager->persist($news20);

        $news21 = new Moods();
        $news21->setName('Chatty');
        $news21->setMoodpic('Chatty.gif');
        $manager->persist($news21);

        $news22 = new Moods();
        $news22->setName('Cheeky');
        $news22->setMoodpic('Cheeky.gif');
        $manager->persist($news22);

        $news23 = new Moods();
        $news23->setName('Cheerful');
        $news23->setMoodpic('Cheerful.gif');
        $manager->persist($news23);

        $news24 = new Moods();
        $news24->setName('Cold');
        $news24->setMoodpic('Cold.gif');
        $manager->persist($news24);

        $news25 = new Moods();
        $news25->setName('Coldturkey');
        $news25->setMoodpic('Coldturkey.gif');
        $manager->persist($news25);

        $news26 = new Moods();
        $news26->setName('Confused');
        $news26->setMoodpic('Confused.gif');
        $manager->persist($news26);

        $news27 = new Moods();
        $news27->setName('Cool');
        $news27->setMoodpic('Cool.gif');
        $manager->persist($news27);

        $news28 = new Moods();
        $news28->setName('Crappy');
        $news28->setMoodpic('Crappy.gif');
        $manager->persist($news28);

        $news29 = new Moods();
        $news29->setName('Creative');
        $news29->setMoodpic('Creative.gif');
        $manager->persist($news29);

        $news30 = new Moods();
        $news30->setName('Curious');
        $news30->setMoodpic('Curious.gif');
        $manager->persist($news30);

        $news31 = new Moods();
        $news31->setName('Cynical');
        $news31->setMoodpic('Cynical.gif');
        $manager->persist($news31);

        $news32 = new Moods();
        $news32->setName('Daring');
        $news32->setMoodpic('Daring.gif');
        $manager->persist($news32);

        $news33 = new Moods();
        $news33->setName('Dead');
        $news33->setMoodpic('Dead.gif');
        $manager->persist($news33);

        $news34 = new Moods();
        $news34->setName('Depressed');
        $news34->setMoodpic('Depressed.gif');
        $manager->persist($news34);

        $news35 = new Moods();
        $news35->setName('Devilish');
        $news35->setMoodpic('Devilish.gif');
        $manager->persist($news35);

        $news36 = new Moods();
        $news36->setName('Disagree');
        $news36->setMoodpic('Disagree.gif');
        $manager->persist($news36);

        $news37 = new Moods();
        $news37->setName('Doh');
        $news37->setMoodpic('Doh.gif');
        $manager->persist($news37);

        $news38 = new Moods();
        $news38->setName('Doubtful');
        $news38->setMoodpic('Doubtful.gif');
        $manager->persist($news38);

        $news39 = new Moods();
        $news39->setName('Dramaqueen');
        $news39->setMoodpic('Dramaqueen.gif');
        $manager->persist($news39);

        $news40 = new Moods();
        $news40->setName('Dreaming');
        $news40->setMoodpic('Dreaming.gif');
        $manager->persist($news40);

        $news41 = new Moods();
        $news41->setName('Drunk');
        $news41->setMoodpic('Drunk.gif');
        $manager->persist($news41);

        $news42 = new Moods();
        $news42->setName('Elated');
        $news42->setMoodpic('Elated.gif');
        $manager->persist($news42);

        $news43 = new Moods();
        $news43->setName('Energetic');
        $news43->setMoodpic('Energetic.gif');
        $manager->persist($news43);

        $news44 = new Moods();
        $news44->setName('Fiendish');
        $news44->setMoodpic('Fiendish.gif');
        $manager->persist($news44);

        $news45 = new Moods();
        $news45->setName('Fine');
        $news45->setMoodpic('Fine.gif');
        $manager->persist($news45);

        $news46 = new Moods();
        $news46->setName('Flirty');
        $news46->setMoodpic('Flirty.gif');
        $manager->persist($news46);

        $news47 = new Moods();
        $news47->setName('Gloomy');
        $news47->setMoodpic('Gloomy.gif');
        $manager->persist($news47);

        $news48 = new Moods();
        $news48->setName('Goofy');
        $news48->setMoodpic('Goofy.gif');
        $manager->persist($news48);

        $news49 = new Moods();
        $news49->setName('Grumpy');
        $news49->setMoodpic('Grumpy.gif');
        $manager->persist($news49);

        $news50 = new Moods();
        $news50->setName('Happy');
        $news50->setMoodpic('Happy.gif');
        $manager->persist($news50);

        $news51 = new Moods();
        $news51->setName('Horny');
        $news51->setMoodpic('Horny.gif');
        $manager->persist($news51);

        $news52 = new Moods();
        $news52->setName('Hot');
        $news52->setMoodpic('Hot.gif');
        $manager->persist($news52);

        $news53 = new Moods();
        $news53->setName('Hungover');
        $news53->setMoodpic('Hungover.gif');
        $manager->persist($news53);

        $news54 = new Moods();
        $news54->setName('Innocent');
        $news54->setMoodpic('Innocent.gif');
        $manager->persist($news54);

        $news55 = new Moods();
        $news55->setName('Inpain');
        $news55->setMoodpic('Inpain.gif');
        $manager->persist($news55);

        $news56 = new Moods();
        $news56->setName('Insomnious');
        $news56->setMoodpic('Insomnious.gif');
        $manager->persist($news56);

        $news57 = new Moods();
        $news57->setName('Inspired');
        $news57->setMoodpic('Inspired.gif');
        $manager->persist($news57);

        $news58 = new Moods();
        $news58->setName('Lonely');
        $news58->setMoodpic('Lonely.gif');
        $manager->persist($news58);

        $news59 = new Moods();
        $news59->setName('Lucky');
        $news59->setMoodpic('Lucky.gif');
        $manager->persist($news59);

        $news60 = new Moods();
        $news60->setName('Lurking');
        $news60->setMoodpic('Lurking.gif');
        $manager->persist($news60);

        $news61 = new Moods();
        $news61->setName('Mellow');
        $news61->setMoodpic('Mellow.gif');
        $manager->persist($news61);

        $news62 = new Moods();
        $news62->setName('Mischievious');
        $news62->setMoodpic('Mischievious.gif');
        $manager->persist($news62);

        $news63 = new Moods();
        $news63->setName('Mondayblues');
        $news63->setMoodpic('Mondayblues.gif');
        $manager->persist($news63);

        $news64 = new Moods();
        $news64->setName('Musical');
        $news64->setMoodpic('Musical.gif');
        $manager->persist($news64);

        $news65 = new Moods();
        $news65->setName('Nerdy');
        $news65->setMoodpic('Nerdy.gif');
        $manager->persist($news65);

        $news66 = new Moods();
        $news66->setName('Notamused');
        $news66->setMoodpic('Notamused.gif');
        $manager->persist($news66);

        $news67 = new Moods();
        $news67->setName('Notworthy');
        $news67->setMoodpic('Notworthy.gif');
        $manager->persist($news67);

        $news68 = new Moods();
        $news68->setName('Paranoid');
        $news68->setMoodpic('Paranoid.gif');
        $manager->persist($news68);

        $news69 = new Moods();
        $news69->setName('Pensive');
        $news69->setMoodpic('Pensive.gif');
        $manager->persist($news69);

        $news70 = new Moods();
        $news70->setName('Predatory');
        $news70->setMoodpic('Predatory.gif');
        $manager->persist($news70);

        $news71 = new Moods();
        $news71->setName('Procrastinating');
        $news71->setMoodpic('Procrastinating.gif');
        $manager->persist($news71);

        $news72 = new Moods();
        $news72->setName('Psychedelic');
        $news72->setMoodpic('Psychedelic.gif');
        $manager->persist($news72);

        $news73 = new Moods();
        $news73->setName('Relaxed');
        $news73->setMoodpic('Relaxed.gif');
        $manager->persist($news73);

        $news74 = new Moods();
        $news74->setName('Roflmao');
        $news74->setMoodpic('Roflmao.gif');
        $manager->persist($news74);

        $news75 = new Moods();
        $news75->setName('Sad');
        $news75->setMoodpic('Sad.gif');
        $manager->persist($news75);

        $news76 = new Moods();
        $news76->setName('Scared');
        $news76->setMoodpic('Scared.gif');
        $manager->persist($news76);

        $news77 = new Moods();
        $news77->setName('Scurvy');
        $news77->setMoodpic('Scurvy.gif');
        $manager->persist($news77);

        $news78 = new Moods();
        $news78->setName('Shocked');
        $news78->setMoodpic('Shocked.gif');
        $manager->persist($news78);

        $news79 = new Moods();
        $news79->setName('Sick');
        $news79->setMoodpic('Sick.gif');
        $manager->persist($news79);

        $news80 = new Moods();
        $news80->setName('Sleepy');
        $news80->setMoodpic('Sleepy.gif');
        $manager->persist($news80);

        $news81 = new Moods();
        $news81->setName('Sluggish');
        $news81->setMoodpic('Sluggish.gif');
        $manager->persist($news81);

        $news82 = new Moods();
        $news82->setName('Sneaky');
        $news82->setMoodpic('Sneaky.gif');
        $manager->persist($news82);

        $news83 = new Moods();
        $news83->setName('Snobbish');
        $news83->setMoodpic('Snobbish.gif');
        $manager->persist($news83);

        $news84 = new Moods();
        $news84->setName('Spaced');
        $news84->setMoodpic('Spaced.gif');
        $manager->persist($news84);

        $news85 = new Moods();
        $news85->setName('Spooky');
        $news85->setMoodpic('Spooky.gif');
        $manager->persist($news85);

        $news86 = new Moods();
        $news86->setName('Sporty');
        $news86->setMoodpic('Sporty.gif');
        $manager->persist($news86);

        $news87 = new Moods();
        $news87->setName('Stressed');
        $news87->setMoodpic('Stressed.gif');
        $manager->persist($news87);

        $news88 = new Moods();
        $news88->setName('Sunshine');
        $news88->setMoodpic('Sunshine.gif');
        $manager->persist($news88);

        $news89 = new Moods();
        $news89->setName('Sweettooth');
        $news89->setMoodpic('Sweettooth.gif');
        $manager->persist($news89);

        $news90 = new Moods();
        $news90->setName('Thinking');
        $news90->setMoodpic('Thinking.gif');
        $manager->persist($news90);

        $news91 = new Moods();
        $news91->setName('Tired');
        $news91->setMoodpic('Tired.gif');
        $manager->persist($news91);

        $news92 = new Moods();
        $news92->setName('Twisted');
        $news92->setMoodpic('Twisted.gif');
        $manager->persist($news92);

        $news93 = new Moods();
        $news93->setName('Volatile');
        $news93->setMoodpic('Volatile.gif');
        $manager->persist($news93);

        $news94 = new Moods();
        $news94->setName('Woot');
        $news94->setMoodpic('Woot.gif');
        $manager->persist($news94);

        $news95 = new Moods();
        $news95->setName('Yeehaw');
        $news95->setMoodpic('Yeehaw.gif');
        $manager->persist($news95);

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
        return 4;
    }
}