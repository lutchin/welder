<?php
namespace Welding\WeldBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Welding\WeldBundle\Entity\Advice;
use Doctrine\Common\DataFixtures\AbstractFixture;


class AdviceFixtures extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $advice1 = new Advice();
        $advice1 ->setAdvice('Следует снизить ток на 10-20% при сварке в вертикальном и потолочном положении.');
        $advice1 ->setNote('&nbsp;');


        $manager->persist($advice1 );


        $advice2 = new Advice();
        $advice2 ->setAdvice('Для сварочных токов до 250А следует использовать керамические либо кварцевые сопла.');
        $advice2 ->setNote('&nbsp;');

        $manager->persist($advice2 );


        $advice3 = new Advice();
        $advice3 ->setAdvice('Для токов сварки свыше 250А следует использовать сопла с жидкосным охлаждением.');
        $advice3 ->setNote('&nbsp;');

        $manager->persist($advice3 );


        $advice4 = new Advice();
        $advice4 ->setAdvice('Скорость многослойной сварки не может быть точно определена.');
        $advice4 ->setNote('&nbsp;');

        $manager->persist($advice4 );


        $advice5 = new Advice();
        $advice5 ->setAdvice('Дополнительный слой шва повышает расход газа на 60-100%');
        $advice5 ->setNote('&nbsp;');
        $manager->persist($advice5 );


        $advice6 = new Advice();
        $advice6 ->setAdvice('Сварку выполнять без присадочного материала в первом слое.');
        $advice6 ->setNote('&nbsp;');

        $manager->persist($advice6 );


        $advice7 = new Advice();
        $advice7 ->setAdvice('Без валика либо подкладки следует уменьшить ток на 20%.');
        $advice7 ->setNote('&nbsp;');

        $manager->persist($advice7 );


        $advice8 = new Advice();
        $advice8 ->setAdvice('Рекомендуется сваривать титан в нижнем положении.');
        $advice8 ->setNote('&nbsp;');

        $manager->persist($advice8 );


        $advice9 = new Advice();
        $advice9 ->setAdvice('Для восстановленной меди рекомендуется сварка в нижнем положении.');
        $advice9 ->setNote('&nbsp;');

        $manager->persist($advice9 );


        $advice10 = new Advice();
        $advice10 ->setAdvice('1. Для токов сварки свыше 250А следует использовать сопла с жидкосным охлаждением. 2. Скорость многослойной сварки не может быть точно определена. 3. Сварку выполнять без присадочного материала в первом слое.');
        $advice10 ->setNote('&nbsp;');

        $manager->persist($advice10 );


        $advice11 = new Advice();
        $advice11 ->setAdvice('1. Для токов сварки свыше 250А следует использовать сопла с жидкосным охлаждением. 2. Сварку выполнять без присадочного материала в первом слое.');
        $advice11 ->setNote('&nbsp;');

        $manager->persist($advice11 );

        $advice12 = new Advice();
        $advice12 ->setAdvice('1. Для сварочных токов до 250А следует использовать керамические либо кварцевые сопла. 2. Сварку выполнять без присадочного материала в первом слое.');
        $advice12 ->setNote('&nbsp;');

        $manager->persist($advice12 );


        $advice13 = new Advice();
        $advice13 ->setAdvice('1. Для токов сварки свыше 250А следует использовать сопла с жидкосным охлаждением. 2. Рекомендуется сваривать титан в нижнем положении. 3.  Скорость многослойной сварки не может быть точно определена.');
        $advice13 ->setNote('&nbsp;');

        $manager->persist($advice13 );


        $advice14 = new Advice();
        $advice14 ->setAdvice('1. Для токов сварки свыше 250А следует использовать сопла с жидкосным охлаждением. 2. Рекомендуется сваривать титан в нижнем положении.');
        $advice14 ->setNote('&nbsp;');

        $manager->persist($advice14 );


        $this->addReference('advice-add_1', $advice1);
        $this->addReference('advice-add_2', $advice2);
        $this->addReference('advice-add_3', $advice3);
        $this->addReference('advice-add_4', $advice4);
        $this->addReference('advice-add_5', $advice5);
        $this->addReference('advice-add_6', $advice6);
        $this->addReference('advice-add_7', $advice7);
        $this->addReference('advice-add_8', $advice8);
        $this->addReference('advice-add_9', $advice9);
        $this->addReference('advice-add_10', $advice10);
        $this->addReference('advice-add_11', $advice11);
        $this->addReference('advice-add_12', $advice12);
        $this->addReference('advice-add_13', $advice13);
        $this->addReference('advice-add_14', $advice14);

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