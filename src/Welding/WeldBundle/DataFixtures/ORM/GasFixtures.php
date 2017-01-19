<?php
namespace Welding\WeldBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Welding\WeldBundle\Entity\Gas;
use Doctrine\Common\DataFixtures\AbstractFixture;

class GasFixtures extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $gas1 = new Gas();
        $gas1->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas1->setPower('0.15');
        $gas1->setConsumption('18');

        $manager->persist($gas1);


        $gas2 = new Gas();
        $gas2->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas2->setPower('0.15');
        $gas2->setConsumption('18');

        $manager->persist($gas2);


        $gas3 = new Gas();
        $gas3->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas3->setPower('0.15');
        $gas3->setConsumption('18');

        $manager->persist($gas3);

        $gas4 = new Gas();
        $gas4->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas4->setPower('0.15');
        $gas4->setConsumption('15');

        $manager->persist($gas4);

        $gas5 = new Gas();
        $gas5->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas5->setPower('0.15');
        $gas5->setConsumption('15');

        $manager->persist($gas5);


        $gas6 = new Gas();
        $gas6->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas6->setPower('0.15');
        $gas6->setConsumption('15');

        $manager->persist($gas6);


        $gas7 = new Gas();
        $gas7->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas7->setPower('0.15');
        $gas7->setConsumption('10');

        $manager->persist($gas6);


        $gas8 = new Gas();
        $gas8->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas8->setPower('0.15');
        $gas8->setConsumption('10');

        $manager->persist($gas8);

        $gas9 = new Gas();
        $gas9->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas9->setPower('0.15');
        $gas9->setConsumption('10');

        $manager->persist($gas9);

        $gas10 = new Gas();
        $gas10->setValue('0.18');
        $gas10->setPower('0.15');
        $gas10->setConsumption('8');

        $manager->persist($gas10);


        $gas11 = new Gas();
        $gas11->setValue('0.23');
        $gas11->setPower('0.18');
        $gas11->setConsumption('8');

        $manager->persist($gas11);

        $gas12 = new Gas();
        $gas12->setValue('0.20');
        $gas12->setPower('0.15');
        $gas12->setConsumption('8');

        $manager->persist($gas12);


        $gas13 = new Gas();
        $gas13->setValue('0.20');
        $gas13->setPower('0.15');
        $gas13->setConsumption('8');

        $manager->persist($gas13);//Titan


        $gas14 = new Gas();
        $gas14->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas14->setPower('0.15');
        $gas14->setConsumption('15');

        $manager->persist($gas14);


        $gas15 = new Gas();
        $gas15->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas15->setPower('0.15');
        $gas15->setConsumption('15');

        $manager->persist($gas15);


        $gas16 = new Gas();
        $gas16->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas16->setPower('0.15');
        $gas16->setConsumption('15');

        $manager->persist($gas16);

        $gas17 = new Gas();
        $gas17->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas17->setPower('0.15');
        $gas17->setConsumption('15');

        $manager->persist($gas17);

        $gas18 = new Gas();
        $gas18->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas18->setPower('0.15');
        $gas18->setConsumption('14');

        $manager->persist($gas18);


        $gas19 = new Gas();
        $gas19->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas19->setPower('0.15');
        $gas19->setConsumption('14');

        $manager->persist($gas19);


        $gas20 = new Gas();
        $gas20->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas20->setPower('0.15');
        $gas20->setConsumption('14');

        $manager->persist($gas20);


        $gas21 = new Gas();
        $gas21->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas21->setPower('0.15');
        $gas21->setConsumption('14');

        $manager->persist($gas21);

        $gas21 = new Gas();
        $gas21->setValue('0.20');
        $gas21->setPower('0.15');
        $gas21->setConsumption('12');

        $manager->persist($gas21);

        $gas22 = new Gas();
        $gas22->setValue('0.25');
        $gas22->setPower('0.15');
        $gas22->setConsumption('12');

        $manager->persist($gas22);


        $gas23 = new Gas();
        $gas23->setValue('0.20');
        $gas23->setPower('0.15');
        $gas23->setConsumption('12');

        $manager->persist($gas23);

        $gas24 = new Gas();
        $gas24->setValue('0.25');
        $gas24->setPower('0.15');
        $gas24->setConsumption('12');

        $manager->persist($gas24);


        $gas24 = new Gas();
        $gas24->setValue('0.23');
        $gas24->setPower('0.15');
        $gas24->setConsumption('10');

        $manager->persist($gas24);


        $gas25 = new Gas();
        $gas25->setValue('0.28');
        $gas25->setPower('0.15');
        $gas25->setConsumption('10');

        $manager->persist($gas25);


        $gas26 = new Gas();
        $gas26->setValue('0.23');
        $gas26->setPower('0.15');
        $gas26->setConsumption('10');

        $manager->persist($gas26);


        $gas27 = new Gas();
        $gas27->setValue('0.28');
        $gas27->setPower('0.15');
        $gas27->setConsumption('10');

        $manager->persist($gas27);


        $gas28 = new Gas();
        $gas28->setValue('0.25');
        $gas28->setPower('0.15');
        $gas28->setConsumption('8');

        $manager->persist($gas28);


        $gas29 = new Gas();
        $gas29->setValue('0.30');
        $gas29->setPower('0.15');
        $gas29->setConsumption('8');

        $manager->persist($gas29);


        $gas30 = new Gas();
        $gas30->setValue('0.25');
        $gas30->setPower('0.15');
        $gas30->setConsumption('8');

        $manager->persist($gas1);


        $gas31 = new Gas();
        $gas31->setValue('0.30');
        $gas31->setPower('0.15');
        $gas31->setConsumption('8');

        $manager->persist($gas31);


        $gas32 = new Gas();
        $gas32->setValue('0.25');
        $gas32->setPower('0.15');
        $gas32->setConsumption('6');

        $manager->persist($gas32);


        $gas33 = new Gas();
        $gas33->setValue('0.23');
        $gas33->setPower('0.15');
        $gas33->setConsumption('6');

        $manager->persist($gas33);


        $gas34 = new Gas();
        $gas34->setValue('0.25');
        $gas34->setPower('0.15');
        $gas34->setConsumption('6');

        $manager->persist($gas34);


        $gas35 = new Gas();
        $gas35->setValue('0.30');
        $gas35->setPower('0.15');
        $gas35->setConsumption('6');

        $manager->persist($gas35);//Aluminium



        $gas36 = new Gas();
        $gas36->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas36->setPower('0.10');
        $gas36->setConsumption('19');

        $manager->persist($gas36);


        $gas37 = new Gas();
        $gas37->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas37->setPower('0.10');
        $gas37->setConsumption('19');

        $manager->persist($gas37);


        $gas38 = new Gas();
        $gas38->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas38->setPower('0.10');
        $gas38->setConsumption('19');

        $manager->persist($gas38);


        $gas39 = new Gas();
        $gas39->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas39->setPower('0.10');
        $gas39->setConsumption('19');

        $manager->persist($gas39);


        $gas40 = new Gas();
        $gas40->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas40->setPower('0.10');
        $gas40->setConsumption('19');

        $manager->persist($gas40);


        $gas41 = new Gas();
        $gas41->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas41->setPower('0.10');
        $gas41->setConsumption('19');

        $manager->persist($gas41);


        $gas42 = new Gas();
        $gas42->setValue('0.18');
        $gas42->setPower('0.10');
        $gas42->setConsumption('14');

        $manager->persist($gas42);


        $gas43 = new Gas();
        $gas43->setValue('0.18');
        $gas43->setPower('0.10');
        $gas43->setConsumption('14');

        $manager->persist($gas43);


        $gas44 = new Gas();
        $gas44->setValue('0.23');
        $gas44->setPower('0.10');
        $gas44->setConsumption('14');

        $manager->persist($gas44);


        $gas45 = new Gas();
        $gas45->setValue('0.18');
        $gas45->setPower('0.10');
        $gas45->setConsumption('14');//

        $manager->persist($gas45);

        $gas46 = new Gas();
        $gas46->setValue('0.23');
        $gas46->setPower('0.10');
        $gas46->setConsumption('14');//

        $manager->persist($gas46);


        $gas47 = new Gas();
        $gas47->setValue('0.20');
        $gas47->setPower('0.10');
        $gas47->setConsumption('14');//

        $manager->persist($gas47);


        $gas48 = new Gas();
        $gas48->setValue('0.20');
        $gas48->setPower('0.10');
        $gas48->setConsumption('14');//

        $manager->persist($gas48);


        $gas49 = new Gas();
        $gas49->setValue('0.25');
        $gas49->setPower('0.10');
        $gas49->setConsumption('14');//

        $manager->persist($gas49);


        $gas50 = new Gas();
        $gas50->setValue('0.20');
        $gas50->setPower('0.10');
        $gas50->setConsumption('14');//

        $manager->persist($gas50);


        $gas51 = new Gas();
        $gas51->setValue('0.25');
        $gas51->setPower('0.10');
        $gas51->setConsumption('14');//

        $manager->persist($gas51);


        $gas52 = new Gas();
        $gas52->setValue('0.23');
        $gas52->setPower('0.10');
        $gas52->setConsumption('7');//

        $manager->persist($gas52);


        $gas53 = new Gas();
        $gas53->setValue('0.28');
        $gas53->setPower('0.10');
        $gas53->setConsumption('7');

        $manager->persist($gas53);


        $gas54 = new Gas();
        $gas54->setValue('0.23');
        $gas54->setPower('0.10');
        $gas54->setConsumption('7');

        $manager->persist($gas54);


        $gas56 = new Gas();
        $gas56->setValue('0.28');
        $gas56->setPower('0.10');
        $gas56->setConsumption('7');

        $manager->persist($gas56);

        $gas57 = new Gas();
        $gas57->setValue('0.20');
        $gas57->setPower('0.10');
        $gas57->setConsumption('7');

        $manager->persist($gas57);


        $gas58 = new Gas();
        $gas58->setValue('0.30');
        $gas58->setPower('0.10');
        $gas58->setConsumption('7');

        $manager->persist($gas58);

        $gas59 = new Gas();
        $gas59->setValue('0.20');
        $gas59->setPower('0.10');
        $gas59->setConsumption('7');

        $manager->persist($gas59);

        $gas60 = new Gas();
        $gas60->setValue('0.30');
        $gas60->setPower('0.10');
        $gas60->setConsumption('7');

        $manager->persist($gas60);//Cooper



        $gas61 = new Gas();
        $gas61->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas61->setPower('0.15');
        $gas61->setConsumption('7');

        $manager->persist($gas17);

        $gas62 = new Gas();
        $gas62->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas62->setPower('0.15');
        $gas62->setConsumption('7');

        $manager->persist($gas62);


        $gas63 = new Gas();
        $gas63->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas63->setPower('0.15');
        $gas63->setConsumption('7');

        $manager->persist($gas63);


        $gas64 = new Gas();
        $gas64->setValue('Cкорость многослойной сварки не может быть точно определена');
        $gas64->setPower('0.15');
        $gas64->setConsumption('7');

        $manager->persist($gas64);


        $gas65 = new Gas();
        $gas65->setValue('0.13');
        $gas65->setPower('0.15');
        $gas65->setConsumption('6');

        $manager->persist($gas65);

        $gas66 = new Gas();
        $gas66->setValue('0.13');
        $gas66->setPower('0.15');
        $gas66->setConsumption('6');

        $manager->persist($gas66);

        $gas67 = new Gas();
        $gas67->setValue('0.13');
        $gas67->setPower('0.15');
        $gas67->setConsumption('6');

        $manager->persist($gas67);


        $gas68 = new Gas();
        $gas68->setValue('0.13');
        $gas68->setPower('0.15');
        $gas68->setConsumption('6');

        $manager->persist($gas68);

        $gas69 = new Gas();
        $gas69->setValue('0.20');
        $gas69->setPower('0.15');
        $gas69->setConsumption('6');

        $manager->persist($gas69);


        $gas70 = new Gas();
        $gas70->setValue('0.25');
        $gas70->setPower('0.15');
        $gas70->setConsumption('6');

        $manager->persist($ga70);


        $gas71 = new Gas();
        $gas71->setValue('0.20');
        $gas71->setPower('0.15');
        $gas71->setConsumption('6');

        $manager->persist($gas71);


        $gas72 = new Gas();
        $gas72->setValue('0.25');
        $gas72->setPower('0.15');
        $gas72->setConsumption('6');

        $manager->persist($gas72);


        $gas73 = new Gas();
        $gas73->setValue('0.25');
        $gas73->setPower('0.15');
        $gas73->setConsumption('5');

        $manager->persist($gas73);


        $gas74 = new Gas();
        $gas74->setValue('0.30');
        $gas74->setPower('0.15');
        $gas74->setConsumption('5');

        $manager->persist($gas74);


        $gas75 = new Gas();
        $gas75->setValue('0.25');
        $gas75->setPower('0.15');
        $gas75->setConsumption('5');

        $manager->persist($gas75);


        $gas76 = new Gas();
        $gas76->setValue('0.30');
        $gas76->setPower('0.15');
        $gas76->setConsumption('5');

        $manager->persist($gas76);


        $gas77 = new Gas();
        $gas77->setValue('0.25');
        $gas77->setPower('0.15');
        $gas77->setConsumption('5');

        $manager->persist($gas77);


        $gas78 = new Gas();
        $gas78->setValue('0.30');
        $gas78->setPower('0.15');
        $gas78->setConsumption('5');

        $manager->persist($gas78);


        $gas79 = new Gas();
        $gas79->setValue('0.25');
        $gas79->setPower('0.15');
        $gas79->setConsumption('5');

        $manager->persist($gas79);


        $gas80 = new Gas();
        $gas80->setValue('0.30');
        $gas80->setPower('0.15');
        $gas80->setConsumption('5');

        $manager->persist($gas80);


        $gas81 = new Gas();
        $gas81->setValue('0.25');
        $gas81->setPower('0.15');
        $gas81->setConsumption('5');

        $manager->persist($gas81);


        $gas82 = new Gas();
        $gas82->setValue('0.30');
        $gas82->setPower('0.15');
        $gas82->setConsumption('5');

        $manager->persist($gas82);



        $gas83 = new Gas();
        $gas83->setValue('0.25');
        $gas83->setPower('0.15');
        $gas83->setConsumption('5');

        $manager->persist($gas83);

        $gas84 = new Gas();
        $gas84->setValue('0.30');
        $gas84->setPower('0.15');
        $gas84->setConsumption('5');

        $manager->persist($gas84);

        $this->addReference('gas-add_1', $gas1);
        $this->addReference('gas-add_2', $gas2);
        $this->addReference('gas-add_3', $gas3);
        $this->addReference('gas-add_4', $gas4);
        $this->addReference('gas-add_5', $gas5);
        $this->addReference('gas-add_6', $gas6);
        $this->addReference('gas-add_7', $gas7);
        $this->addReference('gas-add_8', $gas8);
        $this->addReference('gas-add_9', $gas9);
        $this->addReference('gas-add_10', $gas10);
        $this->addReference('gas-add_11', $gas11);
        $this->addReference('gas-add_12', $gas12);
        $this->addReference('gas-add_13', $gas13);
        $this->addReference('gas-add_14', $gas14);
        $this->addReference('gas-add_15', $gas15);
        $this->addReference('gas-add_16', $gas16);
        $this->addReference('gas-add_17', $gas17);
        $this->addReference('gas-add_18', $gas18);
        $this->addReference('gas-add_19', $gas19);
        $this->addReference('gas-add_20', $gas20);
        $this->addReference('gas-add_21', $gas21);
        $this->addReference('gas-add_22', $gas22);
        $this->addReference('gas-add_23', $gas23);
        $this->addReference('gas-add_24', $gas24);
        $this->addReference('gas-add_25', $gas25);
        $this->addReference('gas-add_26', $gas26);
        $this->addReference('gas-add_27', $gas27);
        $this->addReference('gas-add_28', $gas28);
        $this->addReference('gas-add_29', $gas29);
        $this->addReference('gas-add_30', $gas30);
        $this->addReference('gas-add_31', $gas31);
        $this->addReference('gas-add_32', $gas32);
        $this->addReference('gas-add_33', $gas33);
        $this->addReference('gas-add_34', $gas34);
        $this->addReference('gas-add_35', $gas35);
        $this->addReference('gas-add_36', $gas36);
        $this->addReference('gas-add_37', $gas37);
        $this->addReference('gas-add_38', $gas38);
        $this->addReference('gas-add_39', $gas39);
        $this->addReference('gas-add_40', $gas40);
        $this->addReference('gas-add_41', $gas41);
        $this->addReference('gas-add_42', $gas42);
        $this->addReference('gas-add_43', $gas43);
        $this->addReference('gas-add_44', $gas44);
        $this->addReference('gas-add_45', $gas45);
        $this->addReference('gas-add_46', $gas46);
        $this->addReference('gas-add_47', $gas47);
        $this->addReference('gas-add_48', $gas48);
        $this->addReference('gas-add_49', $gas49);
        $this->addReference('gas-add_50', $gas50);
        $this->addReference('gas-add_51', $gas51);
        $this->addReference('gas-add_52', $gas52);
        $this->addReference('gas-add_53', $gas53);
        $this->addReference('gas-add_54', $gas54);
      //  $this->addReference('gas-add_55', $gas55);
        $this->addReference('gas-add_56', $gas56);
        $this->addReference('gas-add_57', $gas57);
        $this->addReference('gas-add_58', $gas58);
        $this->addReference('gas-add_59', $gas59);
        $this->addReference('gas-add_60', $gas60);
        $this->addReference('gas-add_61', $gas61);
        $this->addReference('gas-add_62', $gas62);
        $this->addReference('gas-add_63', $gas63);
        $this->addReference('gas-add_64', $gas64);
        $this->addReference('gas-add_65', $gas65);
        $this->addReference('gas-add_66', $gas66);
        $this->addReference('gas-add_67', $gas67);
        $this->addReference('gas-add_68', $gas68);
        $this->addReference('gas-add_69', $gas69);
        $this->addReference('gas-add_70', $gas70);
        $this->addReference('gas-add_71', $gas71);
        $this->addReference('gas-add_72', $gas72);
        $this->addReference('gas-add_73', $gas73);
        $this->addReference('gas-add_74', $gas74);
        $this->addReference('gas-add_75', $gas75);
        $this->addReference('gas-add_76', $gas76);
        $this->addReference('gas-add_77', $gas77);
        $this->addReference('gas-add_78', $gas78);
        $this->addReference('gas-add_79', $gas79);
        $this->addReference('gas-add_80', $gas80);
        $this->addReference('gas-add_81', $gas81);
        $this->addReference('gas-add_82', $gas82);
        $this->addReference('gas-add_83', $gas83);
        $this->addReference('gas-add_84', $gas84);


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