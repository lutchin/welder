<?php
namespace Welding\WeldBundle\DataFixtures\ORM;


use Doctrine\Common\Persistence\ObjectManager;
use Welding\WeldBundle\Entity\Welder;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;






class WelderFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {

        $welder1 = new Welder();
        $welder1->addWeldId($this->getReference('weld-add_3'));
        $welder1->addDepthId($this->getReference('depth-add_6'));
        $welder1->addNozzleId($this->getReference('nozzle-add_6'));
        $welder1->addWolframId($this->getReference('wolfram-add_3'));
        $welder1->addGasId($this->getReference('gas-add_1'));
        $welder1->addCurrentId($this->getReference('current-add_38'));
        $welder1->addAdviceId($this->getReference('advice-add_13'));
        $welder1->addAdditive($this->getReference('additive-add_5'));
        $welder1->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder1);



        $welder2 = new Welder();
        $welder2->addWeldId($this->getReference('weld-add_3'));
        $welder2->addDepthId($this->getReference('depth-add_5'));
        $welder2->addNozzleId($this->getReference('nozzle-add_5'));
        $welder2->addWolframId($this->getReference('wolfram-add_1'));
        $welder2->addGasId($this->getReference('gas-add_2'));
        $welder2->addCurrentId($this->getReference('current-add_35'));
        $welder2->addAdviceId($this->getReference('advice-add_13'));
        $welder2->addAdditive($this->getReference('additive-add_6'));
        $welder2->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder2);




        $welder3 = new Welder();
        $welder3->addWeldId($this->getReference('weld-add_2'));
        $welder3->addDepthId($this->getReference('depth-add_5'));
        $welder3->addNozzleId($this->getReference('nozzle-add_5'));
        $welder3->addWolframId($this->getReference('wolfram-add_3'));
        $welder3->addGasId($this->getReference('gas-add_3'));
        $welder3->addCurrentId($this->getReference('current-add_35'));
        $welder3->addAdviceId($this->getReference('advice-add_13'));
        $welder3->addAdditive($this->getReference('additive-add_6'));
        $welder3->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder3);





        $welder4 = new Welder();
        $welder4->addWeldId($this->getReference('weld-add_10'));
        $welder4->addDepthId($this->getReference('depth-add_4'));
        $welder4->addNozzleId($this->getReference('nozzle-add_6'));
        $welder4->addWolframId($this->getReference('wolfram-add_3'));
        $welder4->addGasId($this->getReference('gas-add_4'));
        $welder4->addCurrentId($this->getReference('current-add_34'));
        $welder4->addAdviceId($this->getReference('advice-add_13'));
        $welder4->addAdditive($this->getReference('additive-add_6'));
        $welder4->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder4);





        $welder5 = new Welder();
        $welder5->addWeldId($this->getReference('weld-add_8'));
        $welder5->addDepthId($this->getReference('depth-add_4'));
        $welder5->addNozzleId($this->getReference('nozzle-add_6'));
        $welder5->addWolframId($this->getReference('wolfram-add_3'));
        $welder5->addGasId($this->getReference('gas-add_5'));
        $welder5->addCurrentId($this->getReference('current-add_34'));
        $welder5->addAdviceId($this->getReference('advice-add_13'));
        $welder5->addAdditive($this->getReference('additive-add_6'));
        $welder5->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder5);




        $welder6 = new Welder();
        $welder6->addWeldId($this->getReference('weld-add_3'));
        $welder6->addDepthId($this->getReference('depth-add_4'));
        $welder6->addNozzleId($this->getReference('nozzle-add_6'));
        $welder6->addWolframId($this->getReference('wolfram-add_3'));
        $welder6->addGasId($this->getReference('gas-add_6'));
        $welder6->addCurrentId($this->getReference('current-add_32'));
        $welder6->addAdviceId($this->getReference('advice-add_13'));
        $welder6->addAdditive($this->getReference('additive-add_6'));
        $welder6->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder6);





        $welder7 = new Welder();
        $welder7->addWeldId($this->getReference('weld-add_10'));
        $welder7->addDepthId($this->getReference('depth-add_3'));
        $welder7->addNozzleId($this->getReference('nozzle-add_1'));
        $welder7->addWolframId($this->getReference('wolfram-add_2'));
        $welder7->addGasId($this->getReference('gas-add_7'));
        $welder7->addCurrentId($this->getReference('current-add_28'));
        $welder7->addAdviceId($this->getReference('advice-add_13'));
        $welder7->addAdditive($this->getReference('additive-add_6'));
        $welder7->addMaterialId($this->getReference('material-add_4'));

        $manager->persist( $welder7);




        $welder8 = new Welder();
        $welder8->addWeldId($this->getReference('weld-add_8'));
        $welder8->addDepthId($this->getReference('depth-add_3'));
        $welder8->addNozzleId($this->getReference('nozzle-add_1'));
        $welder8->addWolframId($this->getReference('wolfram-add_2'));
        $welder8->addGasId($this->getReference('gas-add_8'));
        $welder8->addCurrentId($this->getReference('current-add_28'));
        $welder8->addAdviceId($this->getReference('advice-add_13'));
        $welder8->addAdditive($this->getReference('additive-add_6'));
        $welder8->addMaterialId($this->getReference('material-add_4'));

        $manager->persist( $welder8);





        $welder9 = new Welder();
        $welder9->addWeldId($this->getReference('weld-add_3'));
        $welder9->addDepthId($this->getReference('depth-add_3'));
        $welder9->addNozzleId($this->getReference('nozzle-add_1'));
        $welder9->addWolframId($this->getReference('wolfram-add_2'));
        $welder9->addGasId($this->getReference('gas-add_9'));
        $welder9->addCurrentId($this->getReference('current-add_25'));
        $welder9->addAdviceId($this->getReference('advice-add_13'));
        $welder9->addAdditive($this->getReference('additive-add_6'));
        $welder9->addMaterialId($this->getReference('material-add_4'));

        $manager->persist( $welder9);





        $welder10 = new Welder();
        $welder10->addWeldId($this->getReference('weld-add_10'));
        $welder10->addDepthId($this->getReference('depth-add_2'));
        $welder10->addNozzleId($this->getReference('nozzle-add_1'));
        $welder10->addWolframId($this->getReference('wolfram-add_2'));
        $welder10->addGasId($this->getReference('gas-add_10'));
        $welder10->addCurrentId($this->getReference('current-add_24'));
        $welder10->addAdviceId($this->getReference('advice-add_14'));
        $welder10->addAdditive($this->getReference('additive-add_4'));
        $welder10->addMaterialId($this->getReference('material-add_4'));

        $manager->persist( $welder10);





        $welder11 = new Welder();
        $welder11->addWeldId($this->getReference('weld-add_2'));
        $welder11->addDepthId($this->getReference('depth-add_2'));
        $welder11->addNozzleId($this->getReference('nozzle-add_1'));
        $welder11->addWolframId($this->getReference('wolfram-add_2'));
        $welder11->addGasId($this->getReference('gas-add_11'));
        $welder11->addCurrentId($this->getReference('current-add_19'));
        $welder11->addAdviceId($this->getReference('advice-add_14'));
        $welder11->addAdditive($this->getReference('additive-add_4'));
        $welder11->addMaterialId($this->getReference('material-add_4'));

        $manager->persist( $welder11);






        $welder12 = new Welder();
        $welder12->addWeldId($this->getReference('weld-add_10'));
        $welder12->addDepthId($this->getReference('depth-add_1'));
        $welder12->addNozzleId($this->getReference('nozzle-add_1'));
        $welder12->addWolframId($this->getReference('wolfram-add_1'));
        $welder12->addGasId($this->getReference('gas-add_12'));
        $welder12->addCurrentId($this->getReference('current-add_11'));
        $welder12->addAdviceId($this->getReference('advice-add_14'));
        $welder12->addAdditive($this->getReference('additive-add_4'));
        $welder12->addMaterialId($this->getReference('material-add_4'));

        $manager->persist( $welder12);




        $welder13 = new Welder();
        $welder13->addWeldId($this->getReference('weld-add_1'));
        $welder13->addDepthId($this->getReference('depth-add_1'));
        $welder13->addNozzleId($this->getReference('nozzle-add_1'));
        $welder13->addWolframId($this->getReference('wolfram-add_1'));
        $welder13->addGasId($this->getReference('gas-add_13'));
        $welder13->addCurrentId($this->getReference('current-add_8'));
        $welder13->addAdviceId($this->getReference('advice-add_14'));
        $welder13->addAdditive($this->getReference('additive-add_4'));
        $welder13->addMaterialId($this->getReference('material-add_4'));

        $manager->persist( $welder13);


  //Titan*/



        $welder14 = new Welder();
        $welder14->addWeldId($this->getReference('weld-add_10'));
        $welder14->addDepthId($this->getReference('depth-add_6'));
        $welder14->addNozzleId($this->getReference('nozzle-add_8'));
        $welder14->addWolframId($this->getReference('wolfram-add_6'));
        $welder14->addGasId($this->getReference('gas-add_14'));
        $welder14->addCurrentId($this->getReference('current-add_40'));
        $welder14->addAdviceId($this->getReference('advice-add_14'));
        $welder14->addAdditive($this->getReference('additive-add_4'));
        $welder14->addMaterialId($this->getReference('material-add_1'));

        $manager->persist( $welder14);



        $welder15 = new Welder();
        $welder15->addWeldId($this->getReference('weld-add_8'));
        $welder15->addDepthId($this->getReference('depth-add_6'));
        $welder15->addNozzleId($this->getReference('nozzle-add_8'));
        $welder15->addWolframId($this->getReference('wolfram-add_6'));
        $welder15->addGasId($this->getReference('gas-add_15'));
        $welder15->addCurrentId($this->getReference('current-add_41'));
        $welder15->addAdviceId($this->getReference('advice-add_14'));
        $welder15->addAdditive($this->getReference('additive-add_4'));
        $welder15->addMaterialId($this->getReference('material-add_1'));

        $manager->persist(  $welder15);



        $welder16 = new Welder();
        $welder16->addWeldId($this->getReference('weld-add_5'));
        $welder16->addDepthId($this->getReference('depth-add_6'));
        $welder16->addNozzleId($this->getReference('nozzle-add_8'));
        $welder16->addWolframId($this->getReference('wolfram-add_6'));
        $welder16->addGasId($this->getReference('gas-add_16'));
        $welder16->addCurrentId($this->getReference('current-add_40'));
        $welder16->addAdviceId($this->getReference('advice-add_14'));
        $welder16->addAdditive($this->getReference('additive-add_4'));
        $welder16->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder16);




        $welder17 = new Welder();
        $welder17->addWeldId($this->getReference('weld-add_2'));
        $welder17->addDepthId($this->getReference('depth-add_6'));
        $welder17->addNozzleId($this->getReference('nozzle-add_8'));
        $welder17->addWolframId($this->getReference('wolfram-add_6'));
        $welder17->addGasId($this->getReference('gas-add_17'));
        $welder17->addCurrentId($this->getReference('current-add_40'));
        $welder17->addAdviceId($this->getReference('advice-add_14'));
        $welder17->addAdditive($this->getReference('additive-add_4'));
        $welder17->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder17);




        $welder18 = new Welder();
        $welder18->addWeldId($this->getReference('weld-add_10'));
        $welder18->addDepthId($this->getReference('depth-add_5'));
        $welder18->addNozzleId($this->getReference('nozzle-add_8'));
        $welder18->addWolframId($this->getReference('wolfram-add_6'));
        $welder18->addGasId($this->getReference('gas-add_18'));
        $welder18->addCurrentId($this->getReference('current-add_36'));
        $welder18->addAdviceId($this->getReference('advice-add_14'));
        $welder18->addAdditive($this->getReference('additive-add_4'));
        $welder18->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder18);




        $welder19 = new Welder();
        $welder19->addWeldId($this->getReference('weld-add_8'));
        $welder19->addDepthId($this->getReference('depth-add_5'));
        $welder19->addNozzleId($this->getReference('nozzle-add_8'));
        $welder19->addWolframId($this->getReference('wolfram-add_6'));
        $welder19->addGasId($this->getReference('gas-add_19'));
        $welder19->addCurrentId($this->getReference('current-add_37'));
        $welder19->addAdviceId($this->getReference('advice-add_14'));
        $welder19->addAdditive($this->getReference('additive-add_4'));
        $welder19->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder19);




        $welder20 = new Welder();
        $welder20->addWeldId($this->getReference('weld-add_5'));
        $welder20->addDepthId($this->getReference('depth-add_5'));
        $welder20->addNozzleId($this->getReference('nozzle-add_8'));
        $welder20->addWolframId($this->getReference('wolfram-add_6'));
        $welder20->addGasId($this->getReference('gas-add_20'));
        $welder20->addCurrentId($this->getReference('current-add_36'));
        $welder20->addAdviceId($this->getReference('advice-add_14'));
        $welder20->addAdditive($this->getReference('additive-add_4'));
        $welder20->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder20);





        $welder21 = new Welder();
        $welder21->addWeldId($this->getReference('weld-add_2'));
        $welder21->addDepthId($this->getReference('depth-add_5'));
        $welder21->addNozzleId($this->getReference('nozzle-add_8'));
        $welder21->addWolframId($this->getReference('wolfram-add_6'));
        $welder21->addGasId($this->getReference('gas-add_21'));
        $welder21->addCurrentId($this->getReference('current-add_36'));
        $welder21->addAdviceId($this->getReference('advice-add_14'));
        $welder21->addAdditive($this->getReference('additive-add_4'));
        $welder21->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder21);



        $welder22 = new Welder();
        $welder22->addWeldId($this->getReference('weld-add_10'));
        $welder22->addDepthId($this->getReference('depth-add_4'));
        $welder22->addNozzleId($this->getReference('nozzle-add_7'));
        $welder22->addWolframId($this->getReference('wolfram-add_5'));
        $welder22->addGasId($this->getReference('gas-add_22'));
        $welder22->addCurrentId($this->getReference('current-add_32'));
        $welder22->addAdviceId($this->getReference('advice-add_14'));
        $welder22->addAdditive($this->getReference('additive-add_4'));
        $welder22->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder22);




        $welder23 = new Welder();
        $welder23->addWeldId($this->getReference('weld-add_6'));
        $welder23->addDepthId($this->getReference('depth-add_4'));
        $welder23->addNozzleId($this->getReference('nozzle-add_7'));
        $welder23->addWolframId($this->getReference('wolfram-add_5'));
        $welder23->addGasId($this->getReference('gas-add_23'));
        $welder23->addCurrentId($this->getReference('current-add_32'));
        $welder23->addAdviceId($this->getReference('advice-add_14'));
        $welder23->addAdditive($this->getReference('additive-add_4'));
        $welder23->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder23);




        $welder24 = new Welder();
        $welder24->addWeldId($this->getReference('weld-add_4'));
        $welder24->addDepthId($this->getReference('depth-add_4'));
        $welder24->addNozzleId($this->getReference('nozzle-add_7'));
        $welder24->addWolframId($this->getReference('wolfram-add_5'));
        $welder24->addGasId($this->getReference('gas-add_24'));
        $welder24->addCurrentId($this->getReference('current-add_33'));
        $welder24->addAdviceId($this->getReference('advice-add_14'));
        $welder24->addAdditive($this->getReference('additive-add_4'));
        $welder24->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder24);




        $welder25 = new Welder();
        $welder25->addWeldId($this->getReference('weld-add_1'));
        $welder25->addDepthId($this->getReference('depth-add_4'));
        $welder25->addNozzleId($this->getReference('nozzle-add_7'));
        $welder25->addWolframId($this->getReference('wolfram-add_5'));
        $welder25->addGasId($this->getReference('gas-add_25'));
        $welder25->addCurrentId($this->getReference('current-add_30'));
        $welder25->addAdviceId($this->getReference('advice-add_14'));
        $welder25->addAdditive($this->getReference('additive-add_4'));
        $welder25->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder25);




        $welder26 = new Welder();
        $welder26->addWeldId($this->getReference('weld-add_10'));
        $welder26->addDepthId($this->getReference('depth-add_3'));
        $welder26->addNozzleId($this->getReference('nozzle-add_4'));
        $welder26->addWolframId($this->getReference('wolfram-add_3'));
        $welder26->addGasId($this->getReference('gas-add_26'));
        $welder26->addCurrentId($this->getReference('current-add_22'));
        $welder26->addAdviceId($this->getReference('advice-add_14'));
        $welder26->addAdditive($this->getReference('additive-add_4'));
        $welder26->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder26);



        $welder27 = new Welder();
        $welder27->addWeldId($this->getReference('weld-add_6'));
        $welder27->addDepthId($this->getReference('depth-add_3'));
        $welder27->addNozzleId($this->getReference('nozzle-add_4'));
        $welder27->addWolframId($this->getReference('wolfram-add_3'));
        $welder27->addGasId($this->getReference('gas-add_27'));
        $welder27->addCurrentId($this->getReference('current-add_18'));
        $welder27->addAdviceId($this->getReference('advice-add_14'));
        $welder27->addAdditive($this->getReference('additive-add_4'));
        $welder27->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder27);




        $welder28 = new Welder();
        $welder28->addWeldId($this->getReference('weld-add_4'));
        $welder28->addDepthId($this->getReference('depth-add_3'));
        $welder28->addNozzleId($this->getReference('nozzle-add_4'));
        $welder28->addWolframId($this->getReference('wolfram-add_3'));
        $welder28->addGasId($this->getReference('gas-add_28'));
        $welder28->addCurrentId($this->getReference('current-add_22'));
        $welder28->addAdviceId($this->getReference('advice-add_14'));
        $welder28->addAdditive($this->getReference('additive-add_4'));
        $welder28->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder28);



        $welder29 = new Welder();
        $welder29->addWeldId($this->getReference('weld-add_1'));
        $welder29->addDepthId($this->getReference('depth-add_3'));
        $welder29->addNozzleId($this->getReference('nozzle-add_4'));
        $welder29->addWolframId($this->getReference('wolfram-add_3'));
        $welder29->addGasId($this->getReference('gas-add_29'));
        $welder29->addCurrentId($this->getReference('current-add_18'));
        $welder29->addAdviceId($this->getReference('advice-add_14'));
        $welder29->addAdditive($this->getReference('additive-add_4'));
        $welder29->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder29);



        $welder30 = new Welder();
        $welder30->addWeldId($this->getReference('weld-add_10'));
        $welder30->addDepthId($this->getReference('depth-add_2'));
        $welder30->addNozzleId($this->getReference('nozzle-add_2'));
        $welder30->addWolframId($this->getReference('wolfram-add_2'));
        $welder30->addGasId($this->getReference('gas-add_30'));
        $welder30->addCurrentId($this->getReference('current-add_15'));
        $welder30->addAdviceId($this->getReference('advice-add_14'));
        $welder30->addAdditive($this->getReference('additive-add_4'));
        $welder30->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder30);




        $welder31 = new Welder();
        $welder31->addWeldId($this->getReference('weld-add_6'));
        $welder31->addDepthId($this->getReference('depth-add_2'));
        $welder31->addNozzleId($this->getReference('nozzle-add_2'));
        $welder31->addWolframId($this->getReference('wolfram-add_2'));
        $welder31->addGasId($this->getReference('gas-add_31'));
        $welder31->addCurrentId($this->getReference('current-add_12'));
        $welder31->addAdviceId($this->getReference('advice-add_14'));
        $welder31->addAdditive($this->getReference('additive-add_4'));
        $welder31->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder31);




        $welder32 = new Welder();
        $welder32->addWeldId($this->getReference('weld-add_4'));
        $welder32->addDepthId($this->getReference('depth-add_2'));
        $welder32->addNozzleId($this->getReference('nozzle-add_2'));
        $welder32->addWolframId($this->getReference('wolfram-add_2'));
        $welder32->addGasId($this->getReference('gas-add_32'));
        $welder32->addCurrentId($this->getReference('current-add_15'));
        $welder32->addAdviceId($this->getReference('advice-add_14'));
        $welder32->addAdditive($this->getReference('additive-add_4'));
        $welder32->addMaterialId($this->getReference('material-add_1'));

        $manager->persist( $welder32);



        $welder33 = new Welder();
        $welder33->addWeldId($this->getReference('weld-add_1'));
        $welder33->addDepthId($this->getReference('depth-add_2'));
        $welder33->addNozzleId($this->getReference('nozzle-add_2'));
        $welder33->addWolframId($this->getReference('wolfram-add_2'));
        $welder33->addGasId($this->getReference('gas-add_33'));
        $welder33->addCurrentId($this->getReference('current-add_12'));
        $welder33->addAdviceId($this->getReference('advice-add_14'));
        $welder33->addAdditive($this->getReference('additive-add_4'));
        $welder33->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder33);



        $welder34 = new Welder();
        $welder34->addWeldId($this->getReference('weld-add_10'));
        $welder34->addDepthId($this->getReference('depth-add_1'));
        $welder34->addNozzleId($this->getReference('nozzle-add_1'));
        $welder34->addWolframId($this->getReference('wolfram-add_1'));
        $welder34->addGasId($this->getReference('gas-add_34'));
        $welder34->addCurrentId($this->getReference('current-add_4'));
        $welder34->addAdviceId($this->getReference('advice-add_14'));
        $welder34->addAdditive($this->getReference('additive-add_4'));
        $welder34->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder34);



        $welder35 = new Welder();
        $welder35->addWeldId($this->getReference('weld-add_6'));
        $welder35->addDepthId($this->getReference('depth-add_1'));
        $welder35->addNozzleId($this->getReference('nozzle-add_1'));
        $welder35->addWolframId($this->getReference('wolfram-add_1'));
        $welder35->addGasId($this->getReference('gas-add_35'));
        $welder35->addCurrentId($this->getReference('current-add_3'));
        $welder35->addAdviceId($this->getReference('advice-add_14'));
        $welder35->addAdditive($this->getReference('additive-add_4'));
        $welder35->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder35);



        $welder36 = new Welder();
        $welder36->addWeldId($this->getReference('weld-add_4'));
        $welder36->addDepthId($this->getReference('depth-add_1'));
        $welder36->addNozzleId($this->getReference('nozzle-add_1'));
        $welder36->addWolframId($this->getReference('wolfram-add_1'));
        $welder36->addGasId($this->getReference('gas-add_36'));
        $welder36->addCurrentId($this->getReference('current-add_4'));
        $welder36->addAdviceId($this->getReference('advice-add_14'));
        $welder36->addAdditive($this->getReference('additive-add_4'));
        $welder36->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder36);




        $welder37 = new Welder();
        $welder37->addWeldId($this->getReference('weld-add_1'));
        $welder37->addDepthId($this->getReference('depth-add_1'));
        $welder37->addNozzleId($this->getReference('nozzle-add_1'));
        $welder37->addWolframId($this->getReference('wolfram-add_1'));
        $welder37->addGasId($this->getReference('gas-add_37'));
        $welder37->addCurrentId($this->getReference('current-add_3'));
        $welder37->addAdviceId($this->getReference('advice-add_14'));
        $welder37->addAdditive($this->getReference('additive-add_4'));
        $welder37->addMaterialId($this->getReference('material-add_1'));

        $manager->persist($welder37);//aluminium



        $welder38 = new Welder();
        $welder38->addWeldId($this->getReference('weld-add_1'));
        $welder38->addDepthId($this->getReference('depth-add_1'));
        $welder38->addNozzleId($this->getReference('nozzle-add_1'));
        $welder38->addWolframId($this->getReference('wolfram-add_1'));
        $welder38->addGasId($this->getReference('gas-add_38'));
        $welder38->addCurrentId($this->getReference('current-add_8'));
        $welder38->addAdviceId($this->getReference('advice-add_14'));
        $welder38->addAdditive($this->getReference('additive-add_4'));
        $welder38->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder38);



        $welder39 = new Welder();
        $welder39->addWeldId($this->getReference('weld-add_1'));
        $welder39->addDepthId($this->getReference('depth-add_1'));
        $welder39->addNozzleId($this->getReference('nozzle-add_1'));
        $welder39->addWolframId($this->getReference('wolfram-add_1'));
        $welder39->addGasId($this->getReference('gas-add_39'));
        $welder39->addCurrentId($this->getReference('current-add_8'));
        $welder39->addAdviceId($this->getReference('advice-add_14'));
        $welder39->addAdditive($this->getReference('additive-add_4'));
        $welder39->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder39);



        $welder40 = new Welder();
        $welder40->addWeldId($this->getReference('weld-add_1'));
        $welder40->addDepthId($this->getReference('depth-add_1'));
        $welder40->addNozzleId($this->getReference('nozzle-add_1'));
        $welder40->addWolframId($this->getReference('wolfram-add_1'));
        $welder40->addGasId($this->getReference('gas-add_40'));
        $welder40->addCurrentId($this->getReference('current-add_8'));
        $welder40->addAdviceId($this->getReference('advice-add_14'));
        $welder40->addAdditive($this->getReference('additive-add_4'));
        $welder40->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder40);



        $welder41 = new Welder();
        $welder41->addWeldId($this->getReference('weld-add_1'));
        $welder41->addDepthId($this->getReference('depth-add_1'));
        $welder41->addNozzleId($this->getReference('nozzle-add_1'));
        $welder41->addWolframId($this->getReference('wolfram-add_1'));
        $welder41->addGasId($this->getReference('gas-add_41'));
        $welder41->addCurrentId($this->getReference('current-add_8'));
        $welder41->addAdviceId($this->getReference('advice-add_14'));
        $welder41->addAdditive($this->getReference('additive-add_4'));
        $welder41->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder41);



        $welder42 = new Welder();
        $welder42->addWeldId($this->getReference('weld-add_1'));
        $welder42->addDepthId($this->getReference('depth-add_1'));
        $welder42->addNozzleId($this->getReference('nozzle-add_1'));
        $welder42->addWolframId($this->getReference('wolfram-add_1'));
        $welder42->addGasId($this->getReference('gas-add_42'));
        $welder42->addCurrentId($this->getReference('current-add_8'));
        $welder42->addAdviceId($this->getReference('advice-add_14'));
        $welder42->addAdditive($this->getReference('additive-add_4'));
        $welder42->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder42);



        $welder43 = new Welder();
        $welder43->addWeldId($this->getReference('weld-add_1'));
        $welder43->addDepthId($this->getReference('depth-add_1'));
        $welder43->addNozzleId($this->getReference('nozzle-add_1'));
        $welder43->addWolframId($this->getReference('wolfram-add_1'));
        $welder43->addGasId($this->getReference('gas-add_43'));
        $welder43->addCurrentId($this->getReference('current-add_8'));
        $welder43->addAdviceId($this->getReference('advice-add_14'));
        $welder43->addAdditive($this->getReference('additive-add_4'));
        $welder43->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder43);



        $welder44 = new Welder();
        $welder44->addWeldId($this->getReference('weld-add_1'));
        $welder44->addDepthId($this->getReference('depth-add_1'));
        $welder44->addNozzleId($this->getReference('nozzle-add_1'));
        $welder44->addWolframId($this->getReference('wolfram-add_1'));
        $welder44->addGasId($this->getReference('gas-add_44'));
        $welder44->addCurrentId($this->getReference('current-add_8'));
        $welder44->addAdviceId($this->getReference('advice-add_14'));
        $welder44->addAdditive($this->getReference('additive-add_4'));
        $welder44->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder44);




        $welder45 = new Welder();
        $welder45->addWeldId($this->getReference('weld-add_1'));
        $welder45->addDepthId($this->getReference('depth-add_1'));
        $welder45->addNozzleId($this->getReference('nozzle-add_1'));
        $welder45->addWolframId($this->getReference('wolfram-add_1'));
        $welder45->addGasId($this->getReference('gas-add_45'));
        $welder45->addCurrentId($this->getReference('current-add_8'));
        $welder45->addAdviceId($this->getReference('advice-add_14'));
        $welder45->addAdditive($this->getReference('additive-add_4'));
        $welder45->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder45);



        $welder46 = new Welder();
        $welder46->addWeldId($this->getReference('weld-add_1'));
        $welder46->addDepthId($this->getReference('depth-add_1'));
        $welder46->addNozzleId($this->getReference('nozzle-add_1'));
        $welder46->addWolframId($this->getReference('wolfram-add_1'));
        $welder46->addGasId($this->getReference('gas-add_46'));
        $welder46->addCurrentId($this->getReference('current-add_8'));
        $welder46->addAdviceId($this->getReference('advice-add_14'));
        $welder46->addAdditive($this->getReference('additive-add_4'));
        $welder46->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder46);



        $welder47 = new Welder();
        $welder47->addWeldId($this->getReference('weld-add_1'));
        $welder47->addDepthId($this->getReference('depth-add_1'));
        $welder47->addNozzleId($this->getReference('nozzle-add_1'));
        $welder47->addWolframId($this->getReference('wolfram-add_1'));
        $welder47->addGasId($this->getReference('gas-add_47'));
        $welder47->addCurrentId($this->getReference('current-add_8'));
        $welder47->addAdviceId($this->getReference('advice-add_14'));
        $welder47->addAdditive($this->getReference('additive-add_4'));
        $welder47->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder47);




        $welder48 = new Welder();
        $welder48->addWeldId($this->getReference('weld-add_1'));
        $welder48->addDepthId($this->getReference('depth-add_1'));
        $welder48->addNozzleId($this->getReference('nozzle-add_1'));
        $welder48->addWolframId($this->getReference('wolfram-add_1'));
        $welder48->addGasId($this->getReference('gas-add_48'));
        $welder48->addCurrentId($this->getReference('current-add_8'));
        $welder48->addAdviceId($this->getReference('advice-add_14'));
        $welder48->addAdditive($this->getReference('additive-add_4'));
        $welder48->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder48);



        $welder49 = new Welder();
        $welder49->addWeldId($this->getReference('weld-add_1'));
        $welder49->addDepthId($this->getReference('depth-add_1'));
        $welder49->addNozzleId($this->getReference('nozzle-add_1'));
        $welder49->addWolframId($this->getReference('wolfram-add_1'));
        $welder49->addGasId($this->getReference('gas-add_49'));
        $welder49->addCurrentId($this->getReference('current-add_8'));
        $welder49->addAdviceId($this->getReference('advice-add_14'));
        $welder49->addAdditive($this->getReference('additive-add_4'));
        $welder49->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder49);



        $welder50 = new Welder();
        $welder50->addWeldId($this->getReference('weld-add_1'));
        $welder50->addDepthId($this->getReference('depth-add_1'));
        $welder50->addNozzleId($this->getReference('nozzle-add_1'));
        $welder50->addWolframId($this->getReference('wolfram-add_1'));
        $welder50->addGasId($this->getReference('gas-add_50'));
        $welder50->addCurrentId($this->getReference('current-add_8'));
        $welder50->addAdviceId($this->getReference('advice-add_14'));
        $welder50->addAdditive($this->getReference('additive-add_4'));
        $welder50->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder50);



        $welder51 = new Welder();
        $welder51->addWeldId($this->getReference('weld-add_1'));
        $welder51->addDepthId($this->getReference('depth-add_1'));
        $welder51->addNozzleId($this->getReference('nozzle-add_1'));
        $welder51->addWolframId($this->getReference('wolfram-add_1'));
        $welder51->addGasId($this->getReference('gas-add_51'));
        $welder51->addCurrentId($this->getReference('current-add_8'));
        $welder51->addAdviceId($this->getReference('advice-add_14'));
        $welder51->addAdditive($this->getReference('additive-add_4'));
        $welder51->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder51);



        $welder52 = new Welder();
        $welder52->addWeldId($this->getReference('weld-add_1'));
        $welder52->addDepthId($this->getReference('depth-add_1'));
        $welder52->addNozzleId($this->getReference('nozzle-add_1'));
        $welder52->addWolframId($this->getReference('wolfram-add_1'));
        $welder52->addGasId($this->getReference('gas-add_52'));
        $welder52->addCurrentId($this->getReference('current-add_8'));
        $welder52->addAdviceId($this->getReference('advice-add_14'));
        $welder52->addAdditive($this->getReference('additive-add_4'));
        $welder52->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder52);



        $welder53 = new Welder();
        $welder53->addWeldId($this->getReference('weld-add_1'));
        $welder53->addDepthId($this->getReference('depth-add_1'));
        $welder53->addNozzleId($this->getReference('nozzle-add_1'));
        $welder53->addWolframId($this->getReference('wolfram-add_1'));
        $welder53->addGasId($this->getReference('gas-add_53'));
        $welder53->addCurrentId($this->getReference('current-add_8'));
        $welder53->addAdviceId($this->getReference('advice-add_14'));
        $welder53->addAdditive($this->getReference('additive-add_4'));
        $welder53->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder53);



        $welder54 = new Welder();
        $welder54->addWeldId($this->getReference('weld-add_1'));
        $welder54->addDepthId($this->getReference('depth-add_1'));
        $welder54->addNozzleId($this->getReference('nozzle-add_1'));
        $welder54->addWolframId($this->getReference('wolfram-add_1'));
        $welder54->addGasId($this->getReference('gas-add_54'));
        $welder54->addCurrentId($this->getReference('current-add_8'));
        $welder54->addAdviceId($this->getReference('advice-add_14'));
        $welder54->addAdditive($this->getReference('additive-add_4'));
        $welder54->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder54);



       /* $welder55 = new Welder();
        $welder55->addWeldId($this->getReference('weld-add_1'));
        $welder55->addDepthId($this->getReference('depth-add_1'));
        $welder55->addNozzleId($this->getReference('nozzle-add_1'));
        $welder55->addWolframId($this->getReference('wolfram-add_1'));
        $welder55->addGasId($this->getReference('gas-add_55'));
        $welder55->addCurrentId($this->getReference('current-add_8'));
        $welder55->addAdviceId($this->getReference('advice-add_14'));
        $welder55->addAdditive($this->getReference('additive-add_4'));
        $welder55->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder55);*/



        $welder56 = new Welder();
        $welder56->addWeldId($this->getReference('weld-add_1'));
        $welder56->addDepthId($this->getReference('depth-add_1'));
        $welder56->addNozzleId($this->getReference('nozzle-add_1'));
        $welder56->addWolframId($this->getReference('wolfram-add_1'));
        $welder56->addGasId($this->getReference('gas-add_56'));
        $welder56->addCurrentId($this->getReference('current-add_8'));
        $welder56->addAdviceId($this->getReference('advice-add_14'));
        $welder56->addAdditive($this->getReference('additive-add_4'));
        $welder56->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder56);



        $welder57 = new Welder();
        $welder57->addWeldId($this->getReference('weld-add_1'));
        $welder57->addDepthId($this->getReference('depth-add_1'));
        $welder57->addNozzleId($this->getReference('nozzle-add_1'));
        $welder57->addWolframId($this->getReference('wolfram-add_1'));
        $welder57->addGasId($this->getReference('gas-add_57'));
        $welder57->addCurrentId($this->getReference('current-add_8'));
        $welder57->addAdviceId($this->getReference('advice-add_14'));
        $welder57->addAdditive($this->getReference('additive-add_4'));
        $welder57->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder57);



        $welder58 = new Welder();
        $welder58->addWeldId($this->getReference('weld-add_1'));
        $welder58->addDepthId($this->getReference('depth-add_1'));
        $welder58->addNozzleId($this->getReference('nozzle-add_1'));
        $welder58->addWolframId($this->getReference('wolfram-add_1'));
        $welder58->addGasId($this->getReference('gas-add_58'));
        $welder58->addCurrentId($this->getReference('current-add_8'));
        $welder58->addAdviceId($this->getReference('advice-add_14'));
        $welder58->addAdditive($this->getReference('additive-add_4'));
        $welder58->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder58);



        $welder59 = new Welder();
        $welder59->addWeldId($this->getReference('weld-add_1'));
        $welder59->addDepthId($this->getReference('depth-add_1'));
        $welder59->addNozzleId($this->getReference('nozzle-add_1'));
        $welder59->addWolframId($this->getReference('wolfram-add_1'));
        $welder59->addGasId($this->getReference('gas-add_59'));
        $welder59->addCurrentId($this->getReference('current-add_8'));
        $welder59->addAdviceId($this->getReference('advice-add_14'));
        $welder59->addAdditive($this->getReference('additive-add_4'));
        $welder59->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder59);


        $welder60 = new Welder();
        $welder60->addWeldId($this->getReference('weld-add_1'));
        $welder60->addDepthId($this->getReference('depth-add_1'));
        $welder60->addNozzleId($this->getReference('nozzle-add_1'));
        $welder60->addWolframId($this->getReference('wolfram-add_1'));
        $welder60->addGasId($this->getReference('gas-add_60'));
        $welder60->addCurrentId($this->getReference('current-add_8'));
        $welder60->addAdviceId($this->getReference('advice-add_14'));
        $welder60->addAdditive($this->getReference('additive-add_4'));
        $welder60->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder60);//cooper




        $welder61 = new Welder();
        $welder61->addWeldId($this->getReference('weld-add_1'));
        $welder61->addDepthId($this->getReference('depth-add_1'));
        $welder61->addNozzleId($this->getReference('nozzle-add_1'));
        $welder61->addWolframId($this->getReference('wolfram-add_1'));
        $welder61->addGasId($this->getReference('gas-add_61'));
        $welder61->addCurrentId($this->getReference('current-add_8'));
        $welder61->addAdviceId($this->getReference('advice-add_14'));
        $welder61->addAdditive($this->getReference('additive-add_4'));
        $welder61->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder61);




        $welder62 = new Welder();
        $welder62->addWeldId($this->getReference('weld-add_1'));
        $welder62->addDepthId($this->getReference('depth-add_1'));
        $welder62->addNozzleId($this->getReference('nozzle-add_1'));
        $welder62->addWolframId($this->getReference('wolfram-add_1'));
        $welder62->addGasId($this->getReference('gas-add_62'));
        $welder62->addCurrentId($this->getReference('current-add_8'));
        $welder62->addAdviceId($this->getReference('advice-add_14'));
        $welder62->addAdditive($this->getReference('additive-add_4'));
        $welder62->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder62);



        $welder63 = new Welder();
        $welder63->addWeldId($this->getReference('weld-add_1'));
        $welder63->addDepthId($this->getReference('depth-add_1'));
        $welder63->addNozzleId($this->getReference('nozzle-add_1'));
        $welder63->addWolframId($this->getReference('wolfram-add_1'));
        $welder63->addGasId($this->getReference('gas-add_63'));
        $welder63->addCurrentId($this->getReference('current-add_8'));
        $welder63->addAdviceId($this->getReference('advice-add_14'));
        $welder63->addAdditive($this->getReference('additive-add_4'));
        $welder63->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder63);



        $welder64 = new Welder();
        $welder64->addWeldId($this->getReference('weld-add_1'));
        $welder64->addDepthId($this->getReference('depth-add_1'));
        $welder64->addNozzleId($this->getReference('nozzle-add_1'));
        $welder64->addWolframId($this->getReference('wolfram-add_1'));
        $welder64->addGasId($this->getReference('gas-add_64'));
        $welder64->addCurrentId($this->getReference('current-add_8'));
        $welder64->addAdviceId($this->getReference('advice-add_14'));
        $welder64->addAdditive($this->getReference('additive-add_4'));
        $welder64->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder64);



        $welder65 = new Welder();
        $welder65->addWeldId($this->getReference('weld-add_1'));
        $welder65->addDepthId($this->getReference('depth-add_1'));
        $welder65->addNozzleId($this->getReference('nozzle-add_1'));
        $welder65->addWolframId($this->getReference('wolfram-add_1'));
        $welder65->addGasId($this->getReference('gas-add_65'));
        $welder65->addCurrentId($this->getReference('current-add_8'));
        $welder65->addAdviceId($this->getReference('advice-add_14'));
        $welder65->addAdditive($this->getReference('additive-add_4'));
        $welder65->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder65);



        $welder66 = new Welder();
        $welder66->addWeldId($this->getReference('weld-add_1'));
        $welder66->addDepthId($this->getReference('depth-add_1'));
        $welder66->addNozzleId($this->getReference('nozzle-add_1'));
        $welder66->addWolframId($this->getReference('wolfram-add_1'));
        $welder66->addGasId($this->getReference('gas-add_66'));
        $welder66->addCurrentId($this->getReference('current-add_8'));
        $welder66->addAdviceId($this->getReference('advice-add_14'));
        $welder66->addAdditive($this->getReference('additive-add_4'));
        $welder66->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder66);



        $welder67 = new Welder();
        $welder67->addWeldId($this->getReference('weld-add_1'));
        $welder67->addDepthId($this->getReference('depth-add_1'));
        $welder67->addNozzleId($this->getReference('nozzle-add_1'));
        $welder67->addWolframId($this->getReference('wolfram-add_1'));
        $welder67->addGasId($this->getReference('gas-add_67'));
        $welder67->addCurrentId($this->getReference('current-add_8'));
        $welder67->addAdviceId($this->getReference('advice-add_14'));
        $welder67->addAdditive($this->getReference('additive-add_4'));
        $welder67->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder67);



        $welder68 = new Welder();
        $welder68->addWeldId($this->getReference('weld-add_1'));
        $welder68->addDepthId($this->getReference('depth-add_1'));
        $welder68->addNozzleId($this->getReference('nozzle-add_1'));
        $welder68->addWolframId($this->getReference('wolfram-add_1'));
        $welder68->addGasId($this->getReference('gas-add_68'));
        $welder68->addCurrentId($this->getReference('current-add_8'));
        $welder68->addAdviceId($this->getReference('advice-add_14'));
        $welder68->addAdditive($this->getReference('additive-add_4'));
        $welder68->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder68);



        $welder69 = new Welder();
        $welder69->addWeldId($this->getReference('weld-add_1'));
        $welder69->addDepthId($this->getReference('depth-add_1'));
        $welder69->addNozzleId($this->getReference('nozzle-add_1'));
        $welder69->addWolframId($this->getReference('wolfram-add_1'));
        $welder69->addGasId($this->getReference('gas-add_69'));
        $welder69->addCurrentId($this->getReference('current-add_8'));
        $welder69->addAdviceId($this->getReference('advice-add_14'));
        $welder69->addAdditive($this->getReference('additive-add_4'));
        $welder69->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder69);



        $welder70 = new Welder();
        $welder70->addWeldId($this->getReference('weld-add_1'));
        $welder70->addDepthId($this->getReference('depth-add_1'));
        $welder70->addNozzleId($this->getReference('nozzle-add_1'));
        $welder70->addWolframId($this->getReference('wolfram-add_1'));
        $welder70->addGasId($this->getReference('gas-add_70'));
        $welder70->addCurrentId($this->getReference('current-add_8'));
        $welder70->addAdviceId($this->getReference('advice-add_14'));
        $welder70->addAdditive($this->getReference('additive-add_4'));
        $welder70->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder70);




        $welder71 = new Welder();
        $welder71->addWeldId($this->getReference('weld-add_1'));
        $welder71->addDepthId($this->getReference('depth-add_1'));
        $welder71->addNozzleId($this->getReference('nozzle-add_1'));
        $welder71->addWolframId($this->getReference('wolfram-add_1'));
        $welder71->addGasId($this->getReference('gas-add_71'));
        $welder71->addCurrentId($this->getReference('current-add_8'));
        $welder71->addAdviceId($this->getReference('advice-add_14'));
        $welder71->addAdditive($this->getReference('additive-add_4'));
        $welder71->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder71);




        $welder72 = new Welder();
        $welder72->addWeldId($this->getReference('weld-add_1'));
        $welder72->addDepthId($this->getReference('depth-add_1'));
        $welder72->addNozzleId($this->getReference('nozzle-add_1'));
        $welder72->addWolframId($this->getReference('wolfram-add_1'));
        $welder72->addGasId($this->getReference('gas-add_72'));
        $welder72->addCurrentId($this->getReference('current-add_8'));
        $welder72->addAdviceId($this->getReference('advice-add_14'));
        $welder72->addAdditive($this->getReference('additive-add_4'));
        $welder72->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder72);




        $welder73 = new Welder();
        $welder73->addWeldId($this->getReference('weld-add_1'));
        $welder73->addDepthId($this->getReference('depth-add_1'));
        $welder73->addNozzleId($this->getReference('nozzle-add_1'));
        $welder73->addWolframId($this->getReference('wolfram-add_1'));
        $welder73->addGasId($this->getReference('gas-add_73'));
        $welder73->addCurrentId($this->getReference('current-add_8'));
        $welder73->addAdviceId($this->getReference('advice-add_14'));
        $welder73->addAdditive($this->getReference('additive-add_4'));
        $welder73->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder73);



        $welder74 = new Welder();
        $welder74->addWeldId($this->getReference('weld-add_1'));
        $welder74->addDepthId($this->getReference('depth-add_1'));
        $welder74->addNozzleId($this->getReference('nozzle-add_1'));
        $welder74->addWolframId($this->getReference('wolfram-add_1'));
        $welder74->addGasId($this->getReference('gas-add_74'));
        $welder74->addCurrentId($this->getReference('current-add_8'));
        $welder74->addAdviceId($this->getReference('advice-add_14'));
        $welder74->addAdditive($this->getReference('additive-add_4'));
        $welder74->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder74);



        $welder75 = new Welder();
        $welder75->addWeldId($this->getReference('weld-add_1'));
        $welder75->addDepthId($this->getReference('depth-add_1'));
        $welder75->addNozzleId($this->getReference('nozzle-add_1'));
        $welder75->addWolframId($this->getReference('wolfram-add_1'));
        $welder75->addGasId($this->getReference('gas-add_75'));
        $welder75->addCurrentId($this->getReference('current-add_8'));
        $welder75->addAdviceId($this->getReference('advice-add_14'));
        $welder75->addAdditive($this->getReference('additive-add_4'));
        $welder75->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder75);



        $welder76 = new Welder();
        $welder76->addWeldId($this->getReference('weld-add_1'));
        $welder76->addDepthId($this->getReference('depth-add_1'));
        $welder76->addNozzleId($this->getReference('nozzle-add_1'));
        $welder76->addWolframId($this->getReference('wolfram-add_1'));
        $welder76->addGasId($this->getReference('gas-add_76'));
        $welder76->addCurrentId($this->getReference('current-add_8'));
        $welder76->addAdviceId($this->getReference('advice-add_14'));
        $welder76->addAdditive($this->getReference('additive-add_4'));
        $welder76->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder76);



        $welder77 = new Welder();
        $welder77->addWeldId($this->getReference('weld-add_1'));
        $welder77->addDepthId($this->getReference('depth-add_1'));
        $welder77->addNozzleId($this->getReference('nozzle-add_1'));
        $welder77->addWolframId($this->getReference('wolfram-add_1'));
        $welder77->addGasId($this->getReference('gas-add_77'));
        $welder77->addCurrentId($this->getReference('current-add_8'));
        $welder77->addAdviceId($this->getReference('advice-add_14'));
        $welder77->addAdditive($this->getReference('additive-add_4'));
        $welder77->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder77);



        $welder78 = new Welder();
        $welder78->addWeldId($this->getReference('weld-add_1'));
        $welder78->addDepthId($this->getReference('depth-add_1'));
        $welder78->addNozzleId($this->getReference('nozzle-add_1'));
        $welder78->addWolframId($this->getReference('wolfram-add_1'));
        $welder78->addGasId($this->getReference('gas-add_78'));
        $welder78->addCurrentId($this->getReference('current-add_8'));
        $welder78->addAdviceId($this->getReference('advice-add_14'));
        $welder78->addAdditive($this->getReference('additive-add_4'));
        $welder78->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder78);



        $welder79 = new Welder();
        $welder79->addWeldId($this->getReference('weld-add_1'));
        $welder79->addDepthId($this->getReference('depth-add_1'));
        $welder79->addNozzleId($this->getReference('nozzle-add_1'));
        $welder79->addWolframId($this->getReference('wolfram-add_1'));
        $welder79->addGasId($this->getReference('gas-add_79'));
        $welder79->addCurrentId($this->getReference('current-add_8'));
        $welder79->addAdviceId($this->getReference('advice-add_14'));
        $welder79->addAdditive($this->getReference('additive-add_4'));
        $welder79->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder79);



        $welder80 = new Welder();
        $welder80->addWeldId($this->getReference('weld-add_1'));
        $welder80->addDepthId($this->getReference('depth-add_1'));
        $welder80->addNozzleId($this->getReference('nozzle-add_1'));
        $welder80->addWolframId($this->getReference('wolfram-add_1'));
        $welder80->addGasId($this->getReference('gas-add_80'));
        $welder80->addCurrentId($this->getReference('current-add_8'));
        $welder80->addAdviceId($this->getReference('advice-add_14'));
        $welder80->addAdditive($this->getReference('additive-add_4'));
        $welder80->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder80);




        $welder81 = new Welder();
        $welder81->addWeldId($this->getReference('weld-add_1'));
        $welder81->addDepthId($this->getReference('depth-add_1'));
        $welder81->addNozzleId($this->getReference('nozzle-add_1'));
        $welder81->addWolframId($this->getReference('wolfram-add_1'));
        $welder81->addGasId($this->getReference('gas-add_81'));
        $welder81->addCurrentId($this->getReference('current-add_8'));
        $welder81->addAdviceId($this->getReference('advice-add_14'));
        $welder81->addAdditive($this->getReference('additive-add_4'));
        $welder81->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder81);




        $welder82 = new Welder();
        $welder82->addWeldId($this->getReference('weld-add_1'));
        $welder82->addDepthId($this->getReference('depth-add_1'));
        $welder82->addNozzleId($this->getReference('nozzle-add_1'));
        $welder82->addWolframId($this->getReference('wolfram-add_1'));
        $welder82->addGasId($this->getReference('gas-add_82'));
        $welder82->addCurrentId($this->getReference('current-add_8'));
        $welder82->addAdviceId($this->getReference('advice-add_14'));
        $welder82->addAdditive($this->getReference('additive-add_4'));
        $welder82->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder82);





        $welder83 = new Welder();
        $welder83->addWeldId($this->getReference('weld-add_1'));
        $welder83->addDepthId($this->getReference('depth-add_1'));
        $welder83->addNozzleId($this->getReference('nozzle-add_1'));
        $welder83->addWolframId($this->getReference('wolfram-add_1'));
        $welder83->addGasId($this->getReference('gas-add_83'));
        $welder83->addCurrentId($this->getReference('current-add_8'));
        $welder83->addAdviceId($this->getReference('advice-add_14'));
        $welder83->addAdditive($this->getReference('additive-add_4'));
        $welder83->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder83);




        $welder84 = new Welder();
        $welder84->addWeldId($this->getReference('weld-add_1'));
        $welder84->addDepthId($this->getReference('depth-add_1'));
        $welder84->addNozzleId($this->getReference('nozzle-add_1'));
        $welder84->addWolframId($this->getReference('wolfram-add_1'));
        $welder84->addGasId($this->getReference('gas-add_84'));
        $welder84->addCurrentId($this->getReference('current-add_8'));
        $welder84->addAdviceId($this->getReference('advice-add_14'));
        $welder84->addAdditive($this->getReference('additive-add_4'));
        $welder84->addMaterialId($this->getReference('material-add_4'));

        $manager->persist($welder84);







        $manager->flush();

    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 2;
    }
}