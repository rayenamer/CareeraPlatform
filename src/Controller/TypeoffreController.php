<?php

namespace App\Controller;

use App\Entity\TypeOffre;
use App\Form\TypeContratType;
use App\Form\TypeOffreType;
use App\Repository\TypeOffreRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TypeoffreController extends AbstractController
{
    #[Route('/typeoffre', name: 'app_typeoffre')]
    public function index(TypeOffreRepository $rep): Response
    {
        $tabtypeoffre = $rep->findAll();
        return $this->render('typeoffre/index.html.twig', [
            'tabtypeoffre' => $tabtypeoffre,
        ]);
    }
    #[Route('/showtypeoffre', name: 'app_showtypeoffre')]
    public function showtypeoffre(TypeOffreRepository $rep): Response
    {
        $tabtypeoffre = $rep->findAll();
        return $this->render('typeoffre/index.html.twig', [
            'tabtypeoffre' => $tabtypeoffre,
            
        ]);
    }

   
    #[Route('/addtypeoffre', name: 'app_addtypeoffre')]
    public function addtypeoffre(ManagerRegistry $m, Request $req): Response
    {
        $em = $m->getManager();
        $typeoffre = new TypeOffre();
        $form = $this->createForm(TypeOffreType::class, $typeoffre);
        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($typeoffre);
            $em->flush();
            return $this->redirectToRoute('app_showtypeoffre');
        }
        return $this->render('typeoffre/addtypeoffre.html.twig', [
            'addform' => $form,
        ]);
    }


    #[Route('/updatetypeoffre/{id}', name: 'app_updatetypeoffre')]
    public function updatetypeoffre(ManagerRegistry $m, Request $req, $id, TypeOffreRepository $rep): Response
    {
        $em = $m->getManager();
        $typeoffre = $rep->find($id);
        $form = $this->createForm(TypeOffreType::class, $typeoffre);
        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($typeoffre);
            $em->flush();
            return $this->redirectToRoute('app_showtypeoffre');
        }
        return $this->render('typeoffre/updatetypeoffre.html.twig', [
            'addform' => $form,
        ]);
    }


    #[Route('/deletetypeoffre/{id}', name: 'app_deletetypeoffre')]
    public function deletetypeoffre(ManagerRegistry $m, Request $req, $id, TypeOffreRepository $rep): Response
    {
        $em = $m->getManager();
        $typeoffre = $rep->find($id);
        $em->remove($typeoffre);
        $em->flush();
        return $this->redirectToRoute('app_showtypeoffre');
    }
}
