<?php
namespace Welding\WeldBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class WelderType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('materialId', HiddenType::class)
            ->add('depthId', ChoiceType::class, array('choices'  => array( 1  => '1.5',
                2 => '3.0',3 => '5.0', 4 => '6.0', 5 => '10.0', 6 => '13.0',),'label' => 'Толщина свариваемого материала:' ))
            ->add('weldId', ChoiceType::class, array('choices'  => array( '8' => 'угловой',
                '2' => 'стыковой', '10' => 'тавровый',),'label' => 'Тип сварного соединения:'))
            ->add('save', SubmitType::class, array('label' => 'Рассчитать'))
            ->getForm();

        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Welding\WeldBundle\Entity\Welder'
        ));
    }

    public function getBlockPrefix()
    {
        return 'welding_weldbundle_weldertype';
    }
}
