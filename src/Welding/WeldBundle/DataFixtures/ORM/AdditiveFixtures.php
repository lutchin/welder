<?php
namespace Welding\WeldBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Welding\WeldBundle\Entity\Additive;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;


class AdditiveFixtures extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $additive1 = new Additive();
        $additive1 ->setAdditive('Сварка в три слоя с предварительным подогревом 260 град.');

        $manager->persist($additive1 );

        $additive1 = new Additive();
        $additive1 ->setAdditive('Сварка в два слоя с предварительным подогревом 260 град.');

        $manager->persist($additive1 );


        $additive2 = new Additive();
        $additive2 ->setAdditive('Сварка в один слой с предварительным подогревом 150 град.');

        $manager->persist($additive2 );


        $additive3 = new Additive();
        $additive3 ->setAdditive('Сварка в один слой с предварительным подогревом 100 град.');

        $manager->persist($additive3 );



        $additive4 = new Additive();
        $additive4 ->setAdditive('Сварка в один слой.');

        $manager->persist($additive4 );



        $additive5 = new Additive();
        $additive5 ->setAdditive('Сварка в два слоя.');

        $manager->persist($additive5 );


        $additive6 = new Additive();
        $additive6 ->setAdditive('Сварка в два слоя без присадочного материала в первом слое.');

        $manager->persist($additive6 );


        $additive7 = new Additive();
        $additive7 ->setAdditive('Сварка в три слоя.');

        $manager->persist($additive7 );

        $this->addReference('additive-add_1', $additive1);
        $this->addReference('additive-add_2', $additive2);
        $this->addReference('additive-add_3', $additive3);
        $this->addReference('additive-add_4', $additive4);
        $this->addReference('additive-add_5', $additive5);
        $this->addReference('additive-add_6', $additive6);
        $this->addReference('additive-add_7', $additive7);

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
