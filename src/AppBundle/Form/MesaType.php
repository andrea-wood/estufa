<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
           

            if($mesa->getStatus() === 0){

                foreach($mesa->getCiclos() as $ciclo){

                    if($ciclo->getIsActive()){
                        $ciclo->setIsActive(false);
                    }

                }  

            }

        });

        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $mesa = $event->getData();
                
            $form = $event->getForm();
     
        });

        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            $mesa = $event->getData();
                
            $form = $event->getForm();

            if(null !== $mesa->getCiclo() && 0 === $mesa->getStatus()){
                $mesa->addCiclo($mesa->getCiclo());
                $mesa->setStatus(1);

            } else {

                foreach($mesa->getCiclos() as $ciclo){
                    if($ciclo->getIsActive()){

                        foreach($ciclo->getTratamentos() as $tratamento){
                            $tratamento->setProdutoName($tratamento->getProduto()->getName());

                        }
                    }

                }
            }

        });

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $mesa = $event->getData();
                
            $form = $event->getForm();
            foreach($mesa->getCiclos() as $ciclo){
                    if($ciclo->getIsActive()){
                        $mesa->setCiclo($ciclo);
                    }
            }
        });
               
        $builder->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent $event) {
            $mesa = $event->getData();
                
            $form = $event->getForm();

            if($mesa->getStatus() === 0){
                $form         
                ->add('ciclo', CicloType::class, array('label' => 'Adicionar um ciclo'));
            } else {

                $form
                ->add('status', ChoiceType::class, array(
                    'label' => 'Estado',
                    'choices' => array(
                        'Vazia' => 0, 
                        'Espera' => 1,
                        'Produtos' => 2
                    ),
                ));

                if($mesa->getStatus() === 2){
                    $form
                    ->add('ciclo', CicloTratamentosType::class, array('label' => 'Tratamentos'));
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
