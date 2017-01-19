<?php
namespace Welding\WeldBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Welding\WeldBundle\Entity\Current;
use Doctrine\Common\DataFixtures\AbstractFixture;

class CurrentFixtures extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $current1 = new Current();
        $current1 ->setValue('50...80');

        $manager->persist($current1 );


        $current2 = new Current();
        $current2 ->setValue('60...80');

        $manager->persist($current2 );


        $current3 = new Current();
        $current3 ->setValue('60...90');

        $manager->persist($current3 );


        $current4 = new Current();
        $current4 ->setValue('70...90');

        $manager->persist($current4 );

        $current5 = new Current();
        $current5 ->setValue('80...110');

        $manager->persist($current5 );


        $current6 = new Current();
        $current6 ->setValue('80...120');

        $manager->persist($current6 );

        $current7 = new Current();
        $current7 ->setValue('85...120');

        $manager->persist($current7 );


        $current8 = new Current();
        $current8 ->setValue('90...110');

        $manager->persist($current8 );


        $current9 = new Current();
        $current9 ->setValue('90...120');

        $manager->persist($current9 );


        $current10 = new Current();
        $current10 ->setValue('110...140');

        $manager->persist($current10 );

        $current11 = new Current();
        $current11 ->setValue('110...150');

        $manager->persist($current11 );

        $current12 = new Current();
        $current12 ->setValue('125...145');

        $manager->persist($current12 );


        $current13 = new Current();
        $current13 ->setValue('125...200');

        $manager->persist($current13 );


        $current14= new Current();
        $current14 ->setValue('130...150');

        $manager->persist($current14 );


        $current15 = new Current();
        $current15 ->setValue('140...160');

        $manager->persist($current15 );


        $current16 = new Current();
        $current16 ->setValue('150...200');

        $manager->persist($current16);

        $current17 = new Current();
        $current17->setValue('175...225');

        $manager->persist($current17 );


        $current18 = new Current();
        $current18 ->setValue('190...220');

        $manager->persist($current18 );


        $current19 = new Current();
        $current19->setValue('190...225');

        $manager->persist($current19 );


        $current20 = new Current();
        $current20 ->setValue('200...;250');

        $manager->persist($current20 );

        $current21 = new Current();
        $current21 ->setValue('205...250');

        $manager->persist($current21 );


        $current22 = new Current();
        $current22 ->setValue('210...240');

        $manager->persist($current22 );

        $current23 = new Current();
        $current23 ->setValue('210...250');

        $manager->persist($current23 );


        $current24 = new Current();
        $current24 ->setValue('220...250');

        $manager->persist($current24 );


        $current25 = new Current();
        $current25 ->setValue('225...260');

        $manager->persist($current25 );

        $current26 = new Current();
        $current26 ->setValue('225...300');

        $manager->persist($current26 );


        $current27 = new Current();
        $current27 ->setValue('240...280');

        $manager->persist($current27 );


        $current28= new Current();
        $current28 ->setValue('250...280');

        $manager->persist($current28 );


        $current29 = new Current();
        $current29 ->setValue('250...325');

        $manager->persist($current29 );


        $current30 = new Current();
        $current30 ->setValue('260...300');

        $manager->persist($current30 );


        $current31 = new Current();
        $current31 ->setValue('275...310');

        $manager->persist($current31 );


        $current32 = new Current();
        $current32 ->setValue('280...320');

        $manager->persist($current32 );


        $current33 = new Current();
        $current33 ->setValue('290...340');

        $manager->persist($current33 );


        $current34 = new Current();
        $current34 ->setValue('300...340');

        $manager->persist($current34 );


        $current35 = new Current();
        $current35->setValue('300...350');

        $manager->persist($current35 );


        $current36 = new Current();
        $current36 ->setValue('330...380');

        $manager->persist($current36 );


        $current37 = new Current();
        $current37 ->setValue('350...400');

        $manager->persist($current37 );


        $current38 = new Current();
        $current38 ->setValue('350...450');

        $manager->persist($current38 );


        $current39 = new Current();
        $current39 ->setValue('375...525');

        $manager->persist($current39 );


        $current40 = new Current();
        $current40 ->setValue('400...450');

        $manager->persist($current40 );



        $current41 = new Current();
        $current41 ->setValue('420...470');

        $manager->persist($current41 );

        $this->addReference('current-add_1', $current1);
        $this->addReference('current-add_2', $current2);
        $this->addReference('current-add_3', $current3);
        $this->addReference('current-add_4', $current4);
        $this->addReference('current-add_5', $current5);
        $this->addReference('current-add_6', $current6);
        $this->addReference('current-add_7', $current7);
        $this->addReference('current-add_8', $current8);
        $this->addReference('current-add_9', $current9);
        $this->addReference('current-add_10', $current10);
        $this->addReference('current-add_11', $current11);
        $this->addReference('current-add_12', $current12);
        $this->addReference('current-add_13', $current13);
        $this->addReference('current-add_14', $current14);
        $this->addReference('current-add_15', $current15);
        $this->addReference('current-add_16', $current16);
        $this->addReference('current-add_17', $current17);
        $this->addReference('current-add_18', $current18);
        $this->addReference('current-add_19', $current19);
        $this->addReference('current-add_20', $current20);
        $this->addReference('current-add_21', $current21);
        $this->addReference('current-add_22', $current22);
        $this->addReference('current-add_23', $current23);
        $this->addReference('current-add_24', $current24);
        $this->addReference('current-add_25', $current25);
        $this->addReference('current-add_26', $current26);
        $this->addReference('current-add_27', $current27);
        $this->addReference('current-add_28', $current28);
        $this->addReference('current-add_29', $current29);
        $this->addReference('current-add_30', $current30);
        $this->addReference('current-add_31', $current31);
        $this->addReference('current-add_32', $current32);
        $this->addReference('current-add_33', $current33);
        $this->addReference('current-add_34', $current34);
        $this->addReference('current-add_35', $current35);
        $this->addReference('current-add_36', $current36);
        $this->addReference('current-add_37', $current37);
        $this->addReference('current-add_38', $current38);
        $this->addReference('current-add_39', $current39);
        $this->addReference('current-add_40', $current40);
        $this->addReference('current-add_41', $current41);



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