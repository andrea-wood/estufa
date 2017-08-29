<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Mesa;
use AppBundle\Form\MesaType;
use AppBundle\Form\ProdutoType;
use AppBundle\Entity\Produto;
use AppBundle\Entity\Ciclo;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    public function estufaAnaAction(Request $request)
    {
        $mesas = $this->getDoctrine()
        ->getRepository(Mesa::class)
        ->findByType('Ana');
   
         return $this->render('default/estufa_ana.html.twig', array(
            'mesas' => $mesas,
        ));
    }

    public function estufaAction(Request $request, $type)
    {
        $mesas = $this->getDoctrine()
        ->getRepository(Mesa::class)
        ->findByType($type);
   
         return $this->render('default/estufa.html.twig', array(
            'mesas' => $mesas,
            'type' => $type
        ));
    }

    public function produtosAction(Request $request)
    {
        $produtos = $this->getDoctrine()
        ->getRepository(Produto::class)
        ->findAll();
   
         return $this->render('default/produtos.html.twig', array(
            'produtos' => $produtos,
        ));
    }


    public function produtoAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $produto = $em
        ->getRepository(Produto::class)
        ->findOneById($id);
  
        if(null !== $produto){

            $form = $this->createForm(ProdutoType::class, $produto);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                try{

                    $em->flush();

                    $this->addFlash(
                        'success',
                        'Produto actualizado!'
                    );
                    
                }
                catch(\Exception $e){

                    error_log($e->getMessage());

                    $this->addFlash(
                        'danger',
                        $e->getMessage()
                    );
                }

                return $this->redirect($request->getUri());
            }

        }

         return $this->render('default/produto.html.twig', array(
            'form' => $form->createView(),
            'produto' => $produto,
        ));
    }

    public function addProdutoAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $produto = new Produto();

        $form = $this->createForm(ProdutoType::class, $produto);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            try{

                $em->persist($produto);

                $em->flush();

                $this->addFlash(
                    'success',
                    'Produto criado!'
                );

                return  $this->redirectToRoute('produtos');

            }
            catch(\Exception $e){

                error_log($e->getMessage());

                $this->addFlash(
                    'danger',
                    $e->getMessage()
                );

            }
  
        }

         return $this->render('default/produto.html.twig', array(
            'form' => $form->createView(),
            'produto' => $produto,
        ));
    }

    public function mesaAction(Request $request, $id, $type)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $mesa = $em
        ->getRepository(Mesa::class)
        ->findOneBy(array("id" => $id, "type" => $type));

        $ciclo = $em
        ->getRepository(Ciclo::class)
        ->findOneBy(array("mesa" => $mesa, "isActive" => true));

        if(null !== $ciclo){
            
            $mesa->setCiclo($ciclo);

        }
        
        //dump($ciclo);exit;
        
        $form = $this->createForm(MesaType::class, $mesa);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            if($form->has('create')){  

                if($form->get('create')->isClicked()){

                    $mesa->addCiclo($mesa->getCiclo());

                    $mesa->setStatus(1);

                }
            
            }

            if($form->has('close')){  

                if($form->get('close')->isClicked()){

                    $mesa->getCiclo()->setIsActive(false);

                    $mesa->setStatus(0);

                }

            }
            
            //dump($mesa);exit;

            $em->flush();

            return $this->redirect($request->getUri());
        }

        return $this->render('default/mesa.html.twig', array(
            'form' => $form->createView(),
            'mesa' => $mesa
        ));
    }


    public function exportAction(Request $request)
    {
        
        $ciclos = null;

        $allCiclos = $this->getDoctrine()
        ->getRepository(Ciclo::class)
        ->findAll();

        foreach($allCiclos as $ciclo){

            $groupedCiclos[$ciclo->getCreatedAt()->format("Y")][$ciclo->getCreatedAt()->format("m")][] = $ciclo;
        }

       $form = $this->createFormBuilder(array())
        ->add('startDate', DateType::class, array(
            'widget' => 'single_text',
            'html5' => false,
            'format' => 'dd-MM-yyyy',
            'model_timezone' => 'Europe/Lisbon',
            'attr' => ['class' => 'js-datepicker'],
        ))
        ->add('endDate', DateType::class, array(
            'widget' => 'single_text',
            'html5' => false,
            'format' => 'dd-MM-yyyy',
            'model_timezone' => 'Europe/Lisbon',
            'attr' => ['class' => 'js-datepicker'],
        ))
        ->add('save', SubmitType::class, array('attr' => array('class' => 'btn-success'), 'label' => 'Procurar'))
        ->getForm();

         $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();

            if($data["endDate"] >= $data["startDate"]){

                $ciclos = $this->getDoctrine()
                ->getRepository(Ciclo::class)
                ->findAllOrderedByDate($data["startDate"], $data["endDate"]);


            }

        }

         return $this->render('default/export.html.twig', array(
            'form' => $form->createView(),
            'ciclos' => $ciclos,
            'groupedCiclos' => $groupedCiclos
        ));
    }


    public function exportCicloAction(Request $request, $id)
    {
        $ciclo = $this->getDoctrine()
        ->getRepository(Ciclo::class)
        ->findOneById($id);

         return $this->render('print/ciclo.html.twig', array(
            'ciclo' => $ciclo,
            'header' => 'Estufa da ' . $ciclo->getMesa()->getType() . ' ' . $ciclo->getMesa()->getName(),
        ));
    }
}
