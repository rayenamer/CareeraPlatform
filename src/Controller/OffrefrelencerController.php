<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Form\OffreType;
use App\Repository\OffreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/offrefrelencer')]
final class OffrefrelencerController extends AbstractController
{
    #[Route(name: 'app_offrefrelencer_index', methods: ['GET'])]
    public function index(OffreRepository $offreRepository): Response
    {
        return $this->render('offrefrelencer/index.html.twig', [
            'offres' => $offreRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_offrefrelencer_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $offre = new Offre();
        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($offre);
            $entityManager->flush();

            return $this->redirectToRoute('app_offrefrelencer_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('offrefrelencer/new.html.twig', [
            'offre' => $offre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_offrefrelencer_show', methods: ['GET'])]
    public function show(Offre $offre): Response
    {
        return $this->render('offrefrelencer/show.html.twig', [
            'offre' => $offre,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_offrefrelencer_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Offre $offre, EntityManagerInterface $entityManager): Response
    {
        // Créer le formulaire
        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($request);
    
        // Vérifier si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Enregistrer les modifications
            $entityManager->flush();
    
            // Rediriger vers la liste des offres
            return $this->redirectToRoute('app_offrefrelencer_index', [], Response::HTTP_SEE_OTHER);
        }
    
        // Rendre le template d'édition
        return $this->render('offrefrelencer/edit.html.twig', [
            'offre' => $offre,
            'form' => $form->createView(), // Assurez-vous d'appeler createView pour rendre le formulaire
            'button_label' => 'Update', // Texte du bouton
        ]);
    }
    
    #[Route('/{id}', name: 'app_offrefrelencer_delete', methods: ['POST'])]
    public function delete(Request $request, Offre $offre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offre->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($offre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_offrefrelencer_index', [], Response::HTTP_SEE_OTHER);
    }
}
