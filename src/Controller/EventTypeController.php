<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route; 
use App\Entity\Evenement;
use App\Entity\TypeEvent;
use App\Form\EventType;
use App\Form\TypeEvenementType; 
use App\Form\TypeEventaddType;
use App\Repository\EvenementRepository; 
use Doctrine\Persistence\ManagerRegistry;

use App\Repository\TypeEventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


final class EventTypeController extends AbstractController{ 



    #[Route('/type', name: 'type_index')]
    public function index(TypeEventRepository $rep): Response
    {
        $event = $rep->findAll();
        return $this->render('evenements/typemod.html.twig', [
            'tabevent' => $event,
        ]);
    }
    
    

    #[Route('/addtypeEvent', name: 'type_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $evenement = new TypeEvent();
        $form = $this->createForm(TypeEventaddType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($evenement);
            $entityManager->flush(); 
            

            return $this->redirectToRoute('type_index');
        }

        return $this->render('evenements/ajoutetypeEvent.html.twig', [
            'evenement' => $evenement,
            'addform' => $form->createView(),
        ]);
         
    }


        #[Route('/editType/{id}', name: 'type_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TypeEvent $evenement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TypeEventaddType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('type_index');
        }

        return $this->render('evenements/editTypeEvent.html.twig', [
            'evenement' => $evenement,
            'addform' => $form->createView(),
        ]);
    }

    


    #[Route('/deltypeEvent/{id}', name: 'typeEvent_delete')]
    public function supprimeroffre(ManagerRegistry $m, Request $req, $id, TypeEventRepository $rep): Response
    {
        $em = $m->getManager();
        $offre = $rep->find($id);
        $em->remove($offre);
        $em->flush();
        return $this->redirectToRoute('type_index');
    }






































        
}

 
    








    

