<?php

namespace App\Controller;

use App\Entity\TypeContrat;
use App\Form\TypeContratType;
use App\Repository\TypeContratRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TypecontratController extends AbstractController
{
    #[Route('/typecontrat', name: 'app_typecontrat')]
    public function index(TypeContratRepository $rep): Response
    {
        $tabtypecontrat = $rep->findAll();

        return $this->render('typecontrat/index.html.twig', [
            'tabtypecontrat' => $tabtypecontrat,
        ]);
    }
    #[Route('/showtypecontrat', name: 'app_showtypecontrat')]
    public function showtypecontrat(TypeContratRepository $rep): Response
    {
        $tabtypecontrat = $rep->findAll();
        return $this->render('typecontrat/index.html.twig', [
            'tabtypecontrat' => $tabtypecontrat,
            
        ]);
    }

   
    #[Route('/addtypecontrat', name: 'app_addtypecontrat')]
    public function addtypecontrat(ManagerRegistry $m, Request $req): Response
    {
        $em = $m->getManager();
        $typecontrat = new TypeContrat();
        $form = $this->createForm(TypeContratType::class, $typecontrat);
        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($typecontrat);
            $em->flush();
            return $this->redirectToRoute('app_showtypecontrat');
        }
        return $this->render('typecontrat/addtypecontrat.html.twig', [
            'addform' => $form,
        ]);
    }


    #[Route('/updatetypecontrat/{id}', name: 'app_updatetypecontrat')]
    public function updatetypecontrat(ManagerRegistry $m, Request $req, $id, TypeContratRepository $rep): Response
    {
        $em = $m->getManager();
        $typecontrat = $rep->find($id);
        $form = $this->createForm(TypeContratType::class, $typecontrat);
        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($typecontrat);
            $em->flush();
            return $this->redirectToRoute('app_showtypecontrat');
        }
        return $this->render('typecontrat/updatetypecontrat.html.twig', [
            'addform' => $form,
        ]);
    }


    #[Route('/deletetypecontrat/{id}', name: 'app_deletetypecontrat')]
    public function deletetypecontrat(ManagerRegistry $m, Request $req, $id, TypeContratRepository $rep): Response
    {
        $em = $m->getManager();
        $typecontrat = $rep->find($id);
        $em->remove($typecontrat);
        $em->flush();
        return $this->redirectToRoute('app_showtypecontrat');
    }
}
