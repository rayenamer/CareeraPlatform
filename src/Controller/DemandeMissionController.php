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
use Symfony\Component\Security\Core\Security;

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
public function new(Request $request, EntityManagerInterface $entityManager, Security $security): Response
{
    // Récupérer l'utilisateur connecté
    $user = $security->getUser();
    if (!$user) {
        throw $this->createAccessDeniedException("Vous devez être connecté pour créer une demande de mission.");
    }

    // Créer une nouvelle demande de mission
    $demandeMission = new DemandeMission();
    
    // Assigner l'ID de l'utilisateur connecté à la demande de mission
    $demandeMission->setUserid((string) $user->getUserIdentifier());  // Utilise getUserIdentifier() pour obtenir l'ID de l'utilisateur
    
    // Créer le formulaire pour la demande de mission
    $form = $this->createForm(DemandeMissionType::class, $demandeMission);
    $form->handleRequest($request);
    
    // Vérifier si le formulaire est soumis et valide
    if ($form->isSubmitted() && $form->isValid()) {
        // Persister la demande de mission dans la base de données
        $entityManager->persist($demandeMission);
        $entityManager->flush();
    
        // Récupérer l'offre liée à la demande (à adapter selon ton modèle)
        $offreMission = $demandeMission->getOffreMission();
        
        // Créer une nouvelle candidature pour cette demande
        $candidature = new Candidaturemission();
        $candidature->setUserid((string) $user->getUserIdentifier());  // Utiliser getUserIdentifier() pour l'ID de l'utilisateur
        $candidature->setMission($offreMission);  // Associer la mission
        $candidature->setDemande($demandeMission);  // Associer la demande de mission
        $candidature->setEtat('En attente');  // Initialiser l'état de la candidature
    
        // Persister la candidature dans la base de données
        $entityManager->persist($candidature);
        $entityManager->flush();
    
        // Ajouter un message flash pour informer l'utilisateur
        $this->addFlash('success', 'Votre candidature a été envoyée.');
    
        // Rediriger vers la page des offres après la création
        return $this->redirectToRoute('app_offrefrelencer_index', [], Response::HTTP_SEE_OTHER);
    }

    // Rendre le template avec le formulaire
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
#[Route('/mes-candidatures', name: 'app_mes_candidatures')]
public function consulterCandidatures(CandidaturemissionRepository $candidaturemissionRepository, Security $security): Response
{
    // Récupérer l'utilisateur connecté
    $user = $security->getUser();
    if (!$user) {
        throw $this->createAccessDeniedException("Vous devez être connecté pour consulter vos candidatures.");
    }

    // Récupérer l'ID de l'utilisateur connecté (assuré qu'il est une chaîne)
    $userId = (string) $user->getId();  // Assurez-vous d'utiliser l'ID correctement selon votre entité

    // Récupérer les candidatures de cet utilisateur par son ID
    $candidatures = $candidaturemissionRepository->findByUserId($userId);

    // Vérifier si l'utilisateur n'a pas de candidatures
    if (empty($candidatures)) {
        $this->addFlash('warning', 'Vous n\'avez pas encore de candidatures.');
    }

    // Rendre la vue avec les candidatures de l'utilisateur
    return $this->render('demande_mission/mes_candidatures.html.twig', [
        'candidatures' => $candidatures,
    ]);
}


}
