<?php
namespace Welding\WeldBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Welding\WeldBundle\Entity\Wolfram;
use Doctrine\Common\DataFixtures\AbstractFixture;

class WolframFixtures extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $wolfram1 = new Wolfram();
        $wolfram1->setSize('1.6');

        $manager->persist($wolfram1);


        $wolfram2 = new Wolfram();
        $wolfram2->setSize('2.4');

        $manager->persist($wolfram2);


        $wolfram3 = new Wolfram();
        $wolfram3->setSize('3.2');

        $manager->persist($wolfram3);


        $wolfram4 = new Wolfram();
        $wolfram4->setSize('3.2...4.8');

        $manager->persist($wolfram4);


        $wolfram5 = new Wolfram();
        $wolfram5->setSize('4.8');

        $manager->persist($wolfram5);


        $wolfram6 = new Wolfram();
        $wolfram6->setSize('4.8...6.3');

        $manager->persist($wolfram6);


        $wolfram7 = new Wolfram();
        $wolfram7->setSize('6.3');

        $manager->persist($wolfram7);

        $this->addReference('wolfram-add_1', $wolfram1);
        $this->addReference('wolfram-add_2', $wolfram2);
        $this->addReference('wolfram-add_3', $wolfram3);
        $this->addReference('wolfram-add_4', $wolfram4);
        $this->addReference('wolfram-add_5', $wolfram5);
        $this->addReference('wolfram-add_6', $wolfram6);
        $this->addReference('wolfram-add_7', $wolfram7);

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 1;
    }
}