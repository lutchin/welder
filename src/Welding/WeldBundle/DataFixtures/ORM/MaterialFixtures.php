<?php
namespace Welding\WeldBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Welding\WeldBundle\Entity\Material;
use Doctrine\Common\DataFixtures\AbstractFixture;

class MaterialFixtures extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $material1 = new Material();
        $material1 ->setType('алюминия');

        $manager->persist($material1 );


        $material2 = new Material();
        $material2 ->setType('меди');

        $manager->persist($material2 );


        $material3 = new Material();
        $material3 ->setType('нержавеющей стали');

        $manager->persist($material3 );

        $material4 = new Material();
        $material4 ->setType('титана');

        $manager->persist($material4 );


        $this->addReference('material-add_1', $material1);
        $this->addReference('material-add_2', $material2);
        $this->addReference('material-add_3', $material3);
        $this->addReference('material-add_4', $material4);



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