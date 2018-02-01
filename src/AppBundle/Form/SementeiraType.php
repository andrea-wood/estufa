<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class SementeiraType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('type', EntityType::class, array(
            'label' => 'Tipo de semente',
            'class' => 'AppBundle:Semente',
            'choice_label' => 'name',
            'empty_data'  => null,
            'preferred_choices' => array(null),
            'placeholder' => 'Choose an option',
        ))
        ->add('quantitade', IntegerType::class, array(
            'label' => "Quantitade",
        ))
        ->add('createdAt', DateTimeType::class, array(
            'widget' => 'choice',
            'label' => 'Dia de plantação',
        ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Sementeira'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_sementeira';
    }


}
