<?php
namespace Welding\WeldBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Welding\WeldBundle\Entity\Nozzle;
use Doctrine\Common\DataFixtures\AbstractFixture;

class NozzleFixtures extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $nozzle1 = new Nozzle();
        $nozzle1->setNozzle('6.5...9.5');

        $manager->persist($nozzle1);


        $nozzle2 = new Nozzle();
        $nozzle2->setNozzle('9.5...11');

        $manager->persist($nozzle2);


        $nozzle3 = new Nozzle();
        $nozzle3->setNozzle('9.5...12.5');

        $manager->persist($nozzle3);


        $nozzle4 = new Nozzle();
        $nozzle4->setNozzle('11...12.5');

        $manager->persist($nozzle4);


        $nozzle5 = new Nozzle();
        $nozzle5->setNozzle('12.5');

        $manager->persist($nozzle5);


        $nozzle6 = new Nozzle();
        $nozzle6->setNozzle('12.5...16');

        $manager->persist($nozzle6);


        $nozzle7 = new Nozzle();
        $nozzle7->setNozzle('12.5...19');

        $manager->persist($nozzle7);

        $nozzle8 = new Nozzle();
        $nozzle8->setNozzle('16');

        $manager->persist($nozzle8);


        $this->addReference('nozzle-add_1', $nozzle1);
        $this->addReference('nozzle-add_2', $nozzle2);
        $this->addReference('nozzle-add_3', $nozzle3);
        $this->addReference('nozzle-add_4', $nozzle4);
        $this->addReference('nozzle-add_5', $nozzle5);
        $this->addReference('nozzle-add_6', $nozzle6);
        $this->addReference('nozzle-add_7', $nozzle7);
        $this->addReference('nozzle-add_8', $nozzle8);


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