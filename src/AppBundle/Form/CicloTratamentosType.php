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

class CicloTratamentosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
       ->add('tratamentos', CollectionType::class, array(
            'label' => false,
            'entry_type'   => TratamentoType::class,
            'allow_add'    => true,
            'by_reference' => false,
            'entry_options'  => array(
                'label' => false,
                'attr'      => array('class' => 'tratamento-box')
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
