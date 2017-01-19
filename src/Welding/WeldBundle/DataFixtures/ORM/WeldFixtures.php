<?php
namespace Welding\WeldBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Welding\WeldBundle\Entity\Weld;
use Doctrine\Common\DataFixtures\AbstractFixture;

class WeldFixtures extends AbstractFixture implements FixtureInterface
{
public function load(ObjectManager $manager)
{
    $weld1 = new Weld();
    $weld1->setType('1');
    $manager->persist($weld1);


    $weld2 = new Weld();
    $weld2->setType('2');

    $manager->persist($weld2);


    $weld3 = new Weld();
    $weld3->setType('3');

    $manager->persist($weld3);


    $weld4 = new Weld();
    $weld4->setType('4');

    $manager->persist($weld4);


    $weld5 = new Weld();
    $weld5->setType('5');

    $manager->persist($weld5);


    $weld6 = new Weld();
    $weld6->setType('6');

    $manager->persist($weld6);


    $weld7 = new Weld();
    $weld7->setType('7');

    $manager->persist($weld7);

    $weld8 = new Weld();
    $weld8->setType('8');

    $manager->persist($weld8);


    $weld9 = new Weld();
    $weld9->setType('9');

    $manager->persist($weld9);


    $weld10 = new Weld();
    $weld10->setType('10');

    $manager->persist($weld10);

    $this->addReference('weld-add_1', $weld1);
    $this->addReference('weld-add_2', $weld2);
    $this->addReference('weld-add_3', $weld3);
    $this->addReference('weld-add_4', $weld4);
    $this->addReference('weld-add_5', $weld5);
    $this->addReference('weld-add_6', $weld6);
    $this->addReference('weld-add_7', $weld7);
    $this->addReference('weld-add_8', $weld8);
    $this->addReference('weld-add_9', $weld9);
    $this->addReference('weld-add_10', $weld10);


    $manager->flush();


}


    public function getOrder()
    {
        return 1;
    }
}