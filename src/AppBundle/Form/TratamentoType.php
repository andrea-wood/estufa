<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use AppBundle\Entity\Tratamento;

class TratamentoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('produto', EntityType::class, array(
            'label' => false,
            'class' => 'AppBundle:Produto',
            'placeholder' => 'Escolher um produto',
            'choice_label' => 'name',
            'empty_data'  => null,
            'preferred_choices' => array(null)
        ));


        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $tratamento = $event->getData();
            $form = $event->getForm();

            // checks if the Product object is "new"
            // If no data is passed to the form, the data is "null".
            if ($tratamento instanceof Tratamento) {
                $form
                ->add('createdAt', DateType::class, array(
                    'label' => "Alterar a data do produto",
                    'widget' => 'single_text',
                    // this is actually the default format for single_text
                    'format' => 'dd-MM-yyyy',
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
            'data_class' => 'AppBundle\Entity\Tratamento'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_tratamento';
    }


}
