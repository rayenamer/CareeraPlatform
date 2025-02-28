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
    $utilisateur = $this->getUser(); 
    $demandeMission = new DemandeMission();
    $form = $this->createForm(DemandeMissionType::class, $demandeMission);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Associer l'utilisateur à la demande
        $demandeMission->setUtilisateur($utilisateur);
        
        $entityManager->persist($demandeMission);
        $entityManager->flush();

        // Récupérer l'offre liée à la demande (exemple, à adapter selon ton modèle)
        $offreMission = $demandeMission->getOffreMission();
        
        // Créer la candidature
        $candidature = new Candidaturemission();
        $candidature->setUtilisateur($utilisateur);
        $candidature->setMission($offreMission);
        $candidature->setDemande($demandeMission);  // Correction ici
        $candidature->setEtat('En attente');

        $entityManager->persist($candidature);
        $entityManager->flush();

        $this->addFlash('success', 'Votre candidature a été envoyée.');

        return $this->redirectToRoute('app_offrefrelencer_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('demande_mission/new.html.twig', [
        'demande_mission' => $demandeMission,
        'form' => $form,
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
    // Fonction pour calculer la somme des notes
    public function calculerSommeNotes(DemandeMission $demandeMission): int
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        // Récupérer toutes les évaluations liées à cette demande
        $evaluations = $entityManager->getRepository(Evaluation::class)->findBy(['demandeMission' => $demandeMission]);

        // Calculer la somme des notes
        $totalNotes = 0;

        foreach ($evaluations as $evaluation) {
            $totalNotes += $evaluation->getNote();  // Assurez-vous que getNote() retourne la note de l'évaluation
        }

        return $totalNotes;
    }

   // Dans ton contrôleur, dans la méthode qui gère la création de la demande de mission
public function create(Request $request, EntityManagerInterface $em): Response
{
    $demandeMission = new DemandeMission();
    $form = $this->createForm(DemandeMissionType::class, $demandeMission);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Ici, tu récupères l'évaluation que tu veux associer automatiquement
        // Par exemple, si tu veux associer l'évaluation par défaut à la demande de mission :
        
        $evaluation = $em->getRepository(Evaluation::class)->findOneBy(['nom' => 'Evaluation Par Défaut']);
        
        if ($evaluation) {
            // Associe l'évaluation à la demande de mission
            $demandeMission->setEvaluation($evaluation);
        }

        // Persiste la demande de mission
        $em->persist($demandeMission);
        $em->flush();

        return $this->redirectToRoute('demande_mission_index');
    }

    return $this->render('demande_mission/new.html.twig', [
        'form' => $form->createView(),
    ]);
}

}
