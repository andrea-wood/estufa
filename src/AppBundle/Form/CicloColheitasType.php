<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use AppBundle\Form\ColheitaType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CicloColheitasType extends AbstractType
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
       ->add('colheitas', CollectionType::class, array(
            'label' => "Colheita",
            'entry_type'   => ColheitaType::class,
            'allow_add'    => true,
            'by_reference' => false,
            'entry_options'  => array(
                'label' => false,
                'attr'      => array('class' => 'collection-box bg-info')
            ),
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
        return 'appbundle_ciclo';
    }


}
