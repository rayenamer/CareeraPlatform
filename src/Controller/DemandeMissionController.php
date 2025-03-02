<?php

namespace App\Controller;

use App\Entity\Candidaturemission;
use App\Entity\DemandeMission;
use App\Form\DemandeMissionType;
use App\Repository\DemandeMissionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\CandidaturemissionRepository;
use App\Service\Cloudinarymissionfreelencer;
use Symfony\Bundle\SecurityBundle\Security;
#[Route('/demande/mission')]
final class DemandeMissionController extends AbstractController
{
    #[Route(name: 'app_demande_mission_index', methods: ['GET'])]
    public function index(DemandeMissionRepository $demandeMissionRepository): Response
    {
        $demandeMissions = $demandeMissionRepository->findAllSortedByOffreTitre();

        return $this->render('demande_mission/index.html.twig', [
            'demande_missions' => $demandeMissions,
        ]);
    }
    #[Route('/demande/{id}', name: 'app_demande_mission_show', methods: ['GET'])]
public function show(DemandeMission $demandeMission): Response
{
    return $this->render('demande_mission/show.html.twig', [
        'demande_mission' => $demandeMission,
    ]);
}

    


    #[Route('/new', name: 'app_demande_mission_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager, Security $security): Response
{
    // Check if the user is authenticated
    if (!$security->isGranted('IS_AUTHENTICATED_FULLY')) {
        throw $this->createAccessDeniedException('You must be logged in to access this page.');
    }

    $user = $security->getUser();
    if (!$user) {
        throw new \RuntimeException('User not found.');
    }

    $demandeMission = new DemandeMission();
    $demandeMission->setUserid($user->getId());
    $form = $this->createForm(DemandeMissionType::class, $demandeMission);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($demandeMission);
        $entityManager->flush();

       // Création automatique de la candidature
$offreMission = $demandeMission->getOffreMission();
$candidature = new Candidaturemission();
$candidature->setUserid($user->getId());
$candidature->setUser($user->getUserIdentifier()); // Ajouté pour éviter l'erreur
$candidature->setMission($offreMission);
$candidature->setDemande($demandeMission);
$candidature->setEtat('En attente');

$entityManager->persist($candidature);
$entityManager->flush();

        $this->addFlash('success', 'Votre candidature a été envoyée.');

        return $this->redirectToRoute('app_offrefrelencer_index');
    }

    return $this->render('demande_mission/new.html.twig', [
        'form' => $form->createView(),
    ]);



    return $this->render('demande_mission/new.html.twig', [
        'demande_mission' => $demandeMission,
        'form' => $form->createView(),
    ]);
}


    #[Route('/{id}/edit', name: 'app_demande_mission_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, DemandeMission $demandeMission, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DemandeMissionType::class, $demandeMission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_demande_mission_index');
        }

        return $this->render('demande_mission/edit.html.twig', [
            'demande_mission' => $demandeMission,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_demande_mission_delete', methods: ['POST'])]
    public function delete(Request $request, DemandeMission $demandeMission, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $demandeMission->getId(), $request->request->get('_token'))) {
            $entityManager->remove($demandeMission);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_demande_mission_show');
    }

    #[Route('/mes-candidatures', name: 'app_mes_candidatures', methods: ['GET'])]
    public function consulterCandidatures(CandidaturemissionRepository $candidaturemissionRepository, Security $security): Response
    {
        $user = $security->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException("Vous devez être connecté pour consulter vos candidatures.");
        }

        $userId = $user->getId();
        $candidatures = $candidaturemissionRepository->findBy(['userid' => $userId]);

        if (empty($candidatures)) {
            $this->addFlash('warning', "Vous n'avez pas encore de candidatures.");
        }

        return $this->render('demande_mission/mes_candidatures.html.twig', [
            'candidatures' => $candidatures,
        ]);
    }
}

