<?php

namespace App\Controller;

use App\Entity\Missionfreelencer;
use App\Entity\Candidaturemission;
use App\Form\MissionfreelencerType;
use App\Repository\MissionfreelencerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\SecurityBundle\Security;
use App\Entity\User;
use App\Entity\Chercheur;
use App\Entity\Freelancer;
#[Route('/offrefrelencer')]
final class MissionfreelencerController extends AbstractController
{
    
    #[Route(name: 'app_offrefrelencer_index', methods: ['GET'])]
    public function index(MissionfreelencerRepository $MissionfreelencerRepository): Response
    {
        return $this->render('offrefrelencer/index.html.twig', [
            'offres' => $MissionfreelencerRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_offrefrelencer_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager,Security $security): Response
{
     // Récupérer l'utilisateur connecté
     $user = $security->getUser();
     if (!$user) {
         throw $this->createAccessDeniedException("Vous devez être connecté pour créer une mission.");
     }

   // Créer une nouvelle mission
   $offre = new Missionfreelencer();
   $offre->setUserId($user->getUserIdentifier()); // Assigner l'ID de l'utilisateur connecté

    // Créer le formulaire en utilisant le type de formulaire OffreType
    $form = $this->createForm(MissionfreelencerType::class, $offre);
    $form->handleRequest($request);

    // Vérifier si le formulaire est soumis et valide
    if ($form->isSubmitted() && $form->isValid()) {
        // Persister l'entité Offre dans la base de données
        $entityManager->persist($offre);
        $entityManager->flush();
  
        // Partie commentée : Envoi des notifications aux utilisateurs
        /*
        $users = $userRepository->findAll();
        foreach ($users as $user) {
            $notification = new Notification();
            $notification->setUser($user);
            $notification->setMessage("Une nouvelle mission a été ajoutée : " . $offre->getTitre());
            $notification->setMission($offre); // Associer la mission à la notification
            $entityManager->persist($notification);
        }

        // Sauvegarder les notifications
        $entityManager->flush();

        // Retourner une réponse JSON
        return new JsonResponse(['message' => 'Mission et notifications créées avec succès !'], 200);
        */

        // Rediriger vers la liste des offres après la création
        return $this->redirectToRoute('app_offrefrelencer_index');
    }

    // Rendre le template avec le formulaire et l'entité Offre
    return $this->render('offrefrelencer/new.html.twig', [
        'offre' => $offre,
        'form' => $form->createView(),
    ]);
}

    #[Route('/{id}', name: 'app_offrefrelencer_show', methods: ['GET'])]
    public function show(Missionfreelencer $offre): Response
    {
        return $this->render('offrefrelencer/show.html.twig', [
            'offre' => $offre,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_offrefrelencer_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Missionfreelencer $offre, EntityManagerInterface $entityManager): Response
    {
        // Créer le formulaire
        $form = $this->createForm(MissionfreelencerType::class, $offre);
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
        $imageFile = $form->get('image')->getData();
if ($imageFile) {
    $newFilename = uniqid().'.'.$imageFile->guessExtension();
    $imageFile->move($this->getParameter('uploads_directory'), $newFilename);
    $offre->setImage($newFilename);
}
$entityManager->flush();

    }
    
    #[Route('/{id}', name: 'app_offrefrelencer_delete', methods: ['POST'])]
    public function delete(Request $request, Missionfreelencer $offre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offre->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($offre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_offrefrelencer_index', [], Response::HTTP_SEE_OTHER);
    }
    // Ton contrôleur
public function searchByCategory(Request $request, OffreMissionRepository $offreMissionRepository): Response
{
    $category = $request->query->get('specialite'); // Récupérer la catégorie depuis l'URL ou un formulaire
    $offreMissions = $offreMissionRepository->findByCategory($specialite);

    return $this->render('offre_mission/search_results.html.twig', [
        'offreMissions' => $offreMissions,
    ]);
}

#[Route('/recherche_offre', name: 'app_recherche_offre')]
public function recherche(Request $request): Response
{
    // Crée une instance du formulaire
    $form = $this->createForm(SearchOffreMissionType::class);

    // Traite la requête pour le formulaire
    $form->handleRequest($request);

    // Si le formulaire est soumis et valide, effectue la recherche
    if ($form->isSubmitted() && $form->isValid()) {
        // Logique pour effectuer la recherche (par exemple, filtrer les résultats)
        $data = $form->getData();  // Récupérer les données du formulaire (comme la catégorie)

        // Requête de recherche à adapter à ton besoin
        $offres = $this->getDoctrine()
            ->getRepository(OffreMission::class)
            ->findByCategory($data['category']); // Exemple de recherche

        return $this->render('offre_mission/resultats.html.twig', [
            'offres' => $offres,
        ]);
    }

    return $this->render('offre_mission/recherche.html.twig', [
        'form' => $form->createView(),
    ]);
}
// Dans votre contrôleur, récupérez la candidature de l'utilisateur connecté (Freelancer)
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
// Dans le contrôleur
#[Route('/candidature/{id}', name: 'app_consulter_candidature', methods: ['GET'])]
public function consulterCandidature(int $id, EntityManagerInterface $entityManager): Response
{
    $candidature = $entityManager->getRepository(Candidaturemission::class)->find($id);

    if (!$candidature) {
        $this->addFlash('error', 'Candidature non trouvée.');
        return $this->redirectToRoute('app_lister_toutes_candidatures');
    }

    return $this->render('candidature/voir_candidatures.html.twig', [
        'candidature' => $candidature,
    ]);
}
#[Route('/offre/publier/{id}', name: 'app_offre_publier')]
public function publierOffre(Missionfreelencer $offre, EntityManagerInterface $entityManager): Response
{
    $offre-> setDate(new \dateTimeImmutable()); // Définir la date actuelle
    $entityManager->persist($offre);
    $entityManager->flush();

    $this->addFlash('success', 'L\'offre a été publiée avec succès.');

    return $this->redirectToRoute('app_offre_list'); // Rediriger vers la liste des offres
}


}
