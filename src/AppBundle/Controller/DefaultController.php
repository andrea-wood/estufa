<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Mesa;
use AppBundle\Form\MesaType;

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
        // replace this example code with whatever you need
        return $this->render('default/estufa_ana.html.twig');
    }

    public function estufaCatAction(Request $request)
    {
        $mesas = $this->getDoctrine()
        ->getRepository(Mesa::class)
        ->findByType('Catarina');
   
         return $this->render('default/estufa_cat.html.twig', array(
            'mesas' => $mesas,
        ));
    }

    public function mesaAction(Request $request, $id, $type)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $mesa = $em
        ->getRepository(Mesa::class)
        ->findOneBy(array("id" => $id, "type" => $type));
   
        $form = $this->createForm(MesaType::class, $mesa);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             $em->flush();
        }
         return $this->render('default/mesa.html.twig', array(
            'form' => $form->createView(),
            'mesa' => $mesa
        ));
    }
}
