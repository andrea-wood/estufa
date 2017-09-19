<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use AppBundle\Form\TratamentoType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class CicloType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
        ->add('type', EntityType::class, array(
            'label' => false,
            'class' => 'AppBundle:Sementeira',
            'choice_label' => 'name',
            'empty_data'  => null,
            'preferred_choices' => array(null)
        ))
        ->add('isActive', HiddenType::class, array(
            'data' => 1,
        ));

        // $builder->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent $event) {
        //     if (null != $event->getData()) {

        //         $ciclo = $event->getData();
                
        //         $form = $event->getForm();
        //         //dump($ciclo);exit;
        //         if(!$ciclo->getMesa()->getStatus() && !$ciclo->getIsActive()){ //mesa vasia

        //             $form 
        //             ->add('type', ChoiceType::class, array(
        //                 'label' => false,
        //                 'choices' => array(
        //                     'Salsa' => 'salsa', 
        //                     'Coentros' => 'coentros',
        //                 ),
        //                 'empty_data'  => null,
        //                 'preferred_choices' => array(null)
        //             ));

        //         } else {

        //             $form 
        //             ->add('tratamentos', CollectionType::class, array(
        //                 'label' => false,
        //                 'entry_type'   => TratamentoType::class,
        //                 'allow_add'    => true,
        //                 'by_reference' => false,
        //                 'entry_options'  => array(
        //                     'attr'      => array('class' => 'tratamento-box')
        //                 ),
        //             ));
        //         }

        //     }
        // });

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
        return 'appbundle_ciclo';
    }


}
