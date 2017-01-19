<?php
namespace Welding\WeldBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Welding\WeldBundle\Entity\Depth;
use Doctrine\Common\DataFixtures\AbstractFixture;

class DepthFixtures extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $depth1 = new Depth();
        $depth1->setSize('1.5');

        $manager->persist($depth1);


        $depth2 = new Depth();
        $depth2->setSize('3.0');

        $manager->persist($depth2);


        $depth3 = new Depth();
        $depth3->setSize('5.0');

        $manager->persist($depth3);


        $depth4 = new Depth();
        $depth4->setSize('6.0');

        $manager->persist($depth4);


        $depth5 = new Depth();
        $depth5->setSize('10.0');

        $manager->persist($depth5);



        $depth6 = new Depth();
        $depth6->setSize('13.0');

        $manager->persist($depth6);

        $this->addReference('depth-add_1', $depth1);
        $this->addReference('depth-add_2', $depth2);
        $this->addReference('depth-add_3', $depth3);
        $this->addReference('depth-add_4', $depth4);
        $this->addReference('depth-add_5', $depth5);
        $this->addReference('depth-add_6', $depth6);


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