<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use AppBundle\Entity\TanquesNutrientes;

class TanquesNutrientesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {

            $data = $event->getData();
                
            $form = $event->getForm();

            if ($data instanceof TanquesNutrientes) {
                
                $form
                ->add('createdAt', DateType::class, array(
                    'label' => "Data",
                    'widget' => 'single_text',
                    'html5' => false,
                    'format' => 'dd-MM-yyyy',
                    'model_timezone' => 'Europe/Lisbon',
                    'disabled' => true
                ))
                ->add('nutriente', EntityType::class, array(
                    'label' => "Nutriente",
                    'class' => 'AppBundle:Nutriente',
                    'placeholder' => 'Escolher um nutriente',
                    'choice_label' => 'name',
                    'empty_data'  => null,
                    'preferred_choices' => array(null)
                ));

                if($data->getNutriente()->getId() !== 1){ // water

                    $form->add('kg', TextType::class, array(
                        'required' => false,
                        'label' => "Quilos",
                    ));

                }


            } else {

                $form
                ->add('nutriente', EntityType::class, array(
                    'label' => "Nutriente",
                    'class' => 'AppBundle:Nutriente',
                    'placeholder' => 'Escolher um nutriente',
                    'choice_label' => 'name',
                    'empty_data'  => null,
                    'preferred_choices' => array(null)
                ))
                ->add('kg', TextType::class, array(
                        'required' => false,
                        'label' => "Quilos",
                ));


            }

        });
        
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\TanquesNutrientes'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_tanquesnutrientes';
    }


}
