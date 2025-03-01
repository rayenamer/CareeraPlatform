<?php

namespace App\Controller;

use App\Entity\Candidaturemission;
use App\Entity\Missionfreelencer;
use App\Entity\Utilisateur;
use App\Repository\CandidaturemissionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\DemandeMission;


final class CandidaturemissionController extends AbstractController
{
    #[Route('/candidature', name: 'app_candidature')]
    public function index(): Response
    {
        return $this->render('candidature/index.html.twig', [
            'controller_name' => 'CandidaturemissionController',
        ]);
    }

    // Le freelancer postule à une offre
    #[Route('/postuler/{offreId}/{utilisateurId}', name: 'app_postuler_a_offre')]
    public function postulerAOffre(int $offreId, int $utilisateurId, EntityManagerInterface $entityManager): Response
    {
        // Récupérer l'offre et l'utilisateur
        $offre = $entityManager->getRepository(Offre::class)->find($offreId);
        $utilisateur = $entityManager->getRepository(Utilisateur::class)->find($utilisateurId);

        if (!$offre || !$utilisateur) {
            throw $this->createNotFoundException('L\'offre ou l\'utilisateur n\'existe pas.');
        }

        // Créer la candidature
        $candidature = new Candidaturemission();
        $candidature->setUtilisateur($utilisateur);
        $candidature->setMission($offre);
       

        // Sauvegarder la candidature
        $entityManager->persist($candidature);
        $entityManager->flush();

        // Retourner une réponse ou rediriger l'utilisateur
        return $this->redirectToRoute('offre_detail', ['id' => $offre->getId()]);
    }

    // src/Controller/CandidatureController.php

#[Route('/candidatures', name: 'app_lister_toutes_candidatures')]
public function listerToutesCandidatures(EntityManagerInterface $entityManager): Response
{
    // Récupérer toutes les candidatures
    $candidatures = $entityManager->getRepository(Candidaturemission::class)->findAll();

    return $this->render('candidaturemission/voir_candidatures.html.twig', [
        'candidatures' => $candidatures,
    ]);

}
#[Route('/candidature/{id}/evaluer', name: 'evaluer_candidature', methods: ['POST'])]
public function evaluerCandidature(int $id, Request $request, EntityManagerInterface $entityManager): Response
{
    // Récupère la candidature par son ID
    $candidature = $entityManager->getRepository(Candidaturemission::class)->find($id);

    if (!$candidature) {
        $this->addFlash('error', 'Candidature non trouvée.');
        return $this->redirectToRoute('app_lister_toutes_candidatures');
    }

    // Récupérer le score depuis le formulaire
    $score = $request->request->get('score');

    if (!is_numeric($score) || $score < 1 || $score > 10) {
        $this->addFlash('error', 'Le score doit être un nombre entre 1 et 10.');
        return $this->redirectToRoute('app_lister_toutes_candidatures');
    }

    // Mettre à jour le score de la candidature
    $candidature->setScore((int)$score);

    // Sauvegarder la modification dans la base de données
    $entityManager->persist($candidature);
    $entityManager->flush();

    $this->addFlash('success', 'Score enregistré avec succès.');

    return $this->redirectToRoute('app_lister_toutes_candidatures');
}


#[Route('/candidature/{id}/{action}', name: 'accepter_refuser_candidature', methods: ['POST'])]
public function accepterOuRefuserCandidature(
    Candidaturemission $candidature,
    string $action,
    EntityManagerInterface $em
): RedirectResponse {
    try {
        if ($action === 'accepter') {
            $candidature->accepter(); // Accepte la candidature sans condition
            $this->addFlash('success', 'Candidature acceptée avec succès.');
        } elseif ($action === 'refuser') {
            $candidature->refuser(); // Refuse la candidature (vous pouvez aussi supprimer la condition ici si nécessaire)
            $this->addFlash('success', 'Candidature refusée avec succès.');
        } else {
            throw new \InvalidArgumentException('Action non valide.');
        }

        $em->flush();
    } catch (\Exception $e) {
        $this->addFlash('error', $e->getMessage());
    }

    return $this->redirectToRoute('app_lister_toutes_candidatures');
}
#[Route('/demande/mission/{id<\d+>}', name: 'voir_demande_details')]
public function voirDemandeDetails(int $id, EntityManagerInterface $entityManager): Response
{
    // Récupérer la demande par son ID
    $demandeMission = $entityManager->getRepository(DemandeMission::class)->find($id);

    // Vérifier si la demande existe
    if (!$demandeMission) {
        $this->addFlash('error', 'Demande de mission non trouvée.');
        return $this->redirectToRoute('app_lister_toutes_candidatures');
    }

    // Passer la demande à la vue
    return $this->render('demande_mission/showmoderateur.html.twig', [
        'demande_mission' => $demandeMission,
    ]);
}

#[Route('/offre/{id}', name: 'app_offre_details')]
public function showOfferDetails(int $id, EntityManagerInterface $entityManager): Response
{
    $utilisateur = $this->getUser();
    // Récupérer la candidature de l'utilisateur pour cette offre
    $candidature = $entityManager->getRepository(Candidaturemission::class)
                                ->findOneBy(['utilisateur' => $utilisateur, 'mission' => $id]);

    // Récupérer les détails de l'offre
    $offreMission = $entityManager->getRepository(OffreMission::class)->find($id);

    return $this->render('offrefrelencer/index.html.twig', [
        'offre' => $offreMission,
        'candidature' => $candidature, // Passer la candidature à la vue
    ]);
}

#[Route('/mes-candidatures', name: 'app_mes_candidatures')]
public function consulterCandidatures(CandidaturemissionRepository $candidaturemissionRepository): Response
{
    // Récupérer l'utilisateur connecté via Symfony Security
    $utilisateur = $this->getUser();
    
    if (!$utilisateur) {
        throw $this->createAccessDeniedException('Utilisateur non authentifié.');
    }

    // Récupérer les candidatures de l'utilisateur connecté
    $candidatures = $candidaturemissionRepository->findByUtilisateur($utilisateur);

    if (empty($candidatures)) {
        $this->addFlash('warning', 'Vous n\'avez pas encore de candidatures.');
    }

    // Retourner la réponse avec les candidatures
    return $this->render('demande_mission/mes_candidatures.html.twig', [
        'candidatures' => $candidatures,
    ]);
}



    }

