<?php

namespace App\Controller;

use App\Entity\DemandeMission;
use App\Form\DemandeMissionType;
use App\Repository\DemandeMissionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/demande/mission')]
final class DemandeMissionController extends AbstractController
{
    #[Route(name: 'app_demande_mission_index', methods: ['GET'])]
    public function index(DemandeMissionRepository $demandeMissionRepository): Response
    {
        // Utiliser la méthode pour récupérer les missions triées par titre de l'offre
        $demandeMissions = $demandeMissionRepository->findAllSortedByOffreTitre();

        return $this->render('demande_mission/index.html.twig', [
            'demande_missions' => $demandeMissions,
        ]);
    }

    #[Route('/new', name: 'app_demande_mission_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $demandeMission = new DemandeMission();
        $form = $this->createForm(DemandeMissionType::class, $demandeMission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($demandeMission);
            $entityManager->flush();

            return $this->redirectToRoute('app_demande_mission_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('demande_mission/new.html.twig', [
            'demande_mission' => $demandeMission,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_demande_mission_show', methods: ['GET'])]
    public function show(DemandeMission $demandeMission): Response
    {
        return $this->render('demande_mission/show.html.twig', [
            'demande_mission' => $demandeMission,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_demande_mission_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, DemandeMission $demandeMission, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DemandeMissionType::class, $demandeMission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_demande_mission_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('demande_mission/edit.html.twig', [
            'demande_mission' => $demandeMission,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_demande_mission_delete', methods: ['POST'])]
    public function delete(Request $request, DemandeMission $demandeMission, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$demandeMission->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($demandeMission);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_demande_mission_index', [], Response::HTTP_SEE_OTHER);
    }
}
