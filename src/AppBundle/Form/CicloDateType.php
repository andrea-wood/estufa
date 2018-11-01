<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use AppBundle\Form\TratamentoType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CicloDateType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
        ->add('createdAt', DateType::class, array(
            'label' => "Alterar a data de plantação",
            'widget' => 'single_text',
            // this is actually the default format for single_text
            'format' => 'dd-MM-yyyy',
        ))
        ->add('sementeira', EntityType::class, array(
            'label' => "Alterar a sementeira",
            'class' => 'AppBundle:Sementeira',
            'choice_label' => function ($sementeira) {
            return "[ ". $sementeira->getId() ." - " . $sementeira->getType()->getName() . "] Plantada " . $sementeira->getCreatedAt()->format("d/m/Y - H:i") ;
            },
            'empty_data'  => null,
            'preferred_choices' => array(null),
            'required' => false,
            'placeholder' => 'Sementeira',
        ));

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Ciclo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_ciclo_date';
    }


}
