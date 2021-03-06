<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use AppBundle\Form\CicloType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class MesaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {

            $mesa = $event->getData();

        });

        $builder->addEventListener(FormEvents::SUBMIT, function (FormEvent $event) {
            $mesa = $event->getData();
                
            $form = $event->getForm();
            
        });

        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            $mesa = $event->getData();
            
            $form = $event->getForm();

        });

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $mesa = $event->getData();
                
            $form = $event->getForm();

        });
               
        $builder->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent $event) {
            $mesa = $event->getData();
                
            $form = $event->getForm();
 
            if(null === $mesa->getCiclo()){

                $form         
                ->add('ciclo', CicloType::class, array('label' => 'Adicionar um ciclo'))
                ->add('create', SubmitType::class, array('attr' => array('class' => 'btn-success'), 'label' => 'Criar'));

            } else {

                $form

                ->add('save', SubmitType::class, array('attr' => array('class' => 'btn-success'), 'label' => 'Salvar'))

                ->add('close', SubmitType::class, array('attr' => array('class' => 'btn-danger', 'data-toggle' => 'modal', 'data-target' => '#modalCheck'), 'label' => 'Acabar o ciclo'))

                ->add('status', ChoiceType::class, array(
                    'label' => 'Estado',
                    'choices' => array(
                        'Inativa' => 0, 
                        'Ativa' => 1,
                        'Tratamentos' => 2
                    ),
                ));

                if($mesa->getStatus() === 0){

                    $form
                    ->add('ciclo', CicloDateType::class, array('label' => '***'));


                } elseif($mesa->getStatus() === 1){

                    $form
                    ->add('ciclo', CicloColheitasType::class, array('label' => '***'));


                } elseif($mesa->getStatus() === 2){

                    $form
                    ->add('ciclo', CicloTratamentosType::class, array('label' => '***'));

                }
                
    
            }
        });

  
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Mesa'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_mesa';
    }


}
