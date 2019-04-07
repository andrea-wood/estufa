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
use Symfony\Component\Form\FormError;

class CicloType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
        ->add('type', EntityType::class, array(
            'label' => "Semente",
            'class' => 'AppBundle:Semente',
            'choice_label' => 'name',
            'empty_data'  => null,
            'preferred_choices' => array(null),
            'required' => true,
            'placeholder' => 'Tipo de semente',
        ))
        ->add('sementeira', EntityType::class, array(
            'label' => "Tabuleiro",
            'class' => 'AppBundle:Sementeira',
            'choice_label' => function ($sementeira) {
            return "[ ". $sementeira->getId() ." - " . $sementeira->getType()->getName() . "] Plantada " . $sementeira->getCreatedAt()->format("d/m/Y - H:i") ;
            },
            'empty_data'  => null,
            'preferred_choices' => array(null),
            'required' => false,
            'placeholder' => 'Tabuleiro',
        ))
        ->add('isActive', HiddenType::class, array(
            'data' => 1,
        ));

        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {

             $ciclo = $event->getData();
            
            if(null !== $ciclo->getSementeira()){
                
                $ciclo->getSementeira()->setEndedAt((new \DateTime()));
               
            }
            
//             if(null !== $ciclo->getSementeira()){
                
//                 $ciclo->setType($ciclo->getSementeira()->getType());
//             }
           
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
        });

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
