<?php

namespace App\Controller;

use App\Entity\Evenement; 
use App\Entity\User; 


use Doctrine\Persistence\ManagerRegistry;

use App\Form\EventaddType; 
use Symfony\Bundle\SecurityBundle\Security;

use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; 

use Symfony\Component\HttpClient\HttpClient;



use Symfony\Component\HttpFoundation\JsonResponse;




final class EventModController extends AbstractController
{
   
    public function getAuthUser(Security $security): ?User
    {
        $user = $security->getUser();
    
        if (!$user) {
            return null; 
        }
    
        if (!$user instanceof User) {
            return null; 
        }
    
        return $user;
    }




    #[Route('/events', name: 'app_events')]
    public function index(EvenementRepository $rep,Security $security): Response
    {
        $user = $this->getAuthUser($security); 
        $userId = $user->getId();
        // Récupérer tous les événements
        $events = $rep->findAll();
    
        // Tableau pour stocker les données météo
        $weatherData = [];
    
        // Récupérer les données météo pour chaque événement
        foreach ($events as $event) {
            $weatherData[$event->getId()] = $this->getWeatherData($event->getLieu(), $event->getDate());
        }
    
        // Passer les données au template
        return $this->render('evenements/index.html.twig', [
            'userId' => $userId,
            'tabevent' => $events,
            'weatherData' => $weatherData, // Passer les données météo au template
        ]);
    }

    
      





    #[Route('/new', name: 'evenement_new')]
public function new(Request $request, EntityManagerInterface $entityManager, Security $security): Response
{
    $evenement = new Evenement();
    
    // Récupérer l'utilisateur connecté
        $user = $this->getAuthUser($security); 
    
    // Si un utilisateur est connecté, assigner son ID à l'événement
    if ($user) {
        $evenement->setUserId($user->getId());
    }

    $form = $this->createForm(EventaddType::class, $evenement);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($evenement);
        $entityManager->flush();

        return $this->redirectToRoute('app_event');
    }

    return $this->render('evenements/ajoutevent.html.twig', [
        'evenement' => $evenement,
        'addform' => $form->createView(),
    ]);
}

    

    #[Route('/edit/{id}', name: 'evenement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EventaddType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_event');
        }

        return $this->render('evenements/editEvent.html.twig', [
            'evenement' => $evenement,
            'addform' => $form->createView(),
        ]);
    }

    #[Route('/delEvent/{id}', name: 'event_del')]
    public function supprimeroffre(ManagerRegistry $m, Request $req, $id, EvenementRepository $rep): Response
    {
        $em = $m->getManager();
        $offre = $rep->find($id);
        $em->remove($offre);
        $em->flush();
        return $this->redirectToRoute('app_events');
    }



    #[Route('/api/evenements/recherche', name: 'api_evenements_recherche', methods: ['GET'])]
    public function recherche(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        // Récupérer le terme de recherche depuis la requête
        $searchTerm = $request->query->get('search', '');

        // Effectuer la recherche dans la base de données
        $evenements = $entityManager->getRepository(Evenement::class)
        ->createQueryBuilder('e')
        ->leftJoin('e.TypeEvent', 't') // Jointure avec l'entité TypeEvent
        ->where('e.description LIKE :searchTerm')
        ->orWhere('e.lieu LIKE :searchTerm')
        ->orWhere('t.nom LIKE :searchTerm') // Filtrer par le nom du TypeEvent
        ->setParameter('searchTerm', '%' . $searchTerm . '%')
        ->getQuery()
        ->getResult();

        // Formater les résultats pour la réponse JSON
        $results = [];
        foreach ($evenements as $evenement) {
            $results[] = [
                'id' => $evenement->getId(),
                'description' => $evenement->getDescription(),
                'date' => $evenement->getDate()->format('Y-m-d H:i'),
                'lieu' => $evenement->getLieu(),
                'type' => $evenement->getTypeEvent()->getNom(),
                'disponibilite' => $evenement->isDisponibilite() ? 'Disponible' : 'Non disponible',
            ];
        }

        // Retourner les résultats au format JSON
        return new JsonResponse($results);
    }

    private function getWeatherIcon(int $weathercode): string
    {
        // Tableau de correspondance des codes météo aux icônes
        $weatherIcons = [
            0 => '☀️',  // Ciel dégagé
            1 => '🌤️',  // Principalement dégagé
            2 => '⛅',  // Partiellement nuageux
            3 => '☁️',  // Couvert
            45 => '🌫️', // Brouillard
            48 => '🌫️', // Brouillard givrant
            51 => '🌧️', // Bruine légère
            53 => '🌧️', // Bruine modérée
            55 => '🌧️', // Bruine dense
            56 => '🌧️❄️', // Bruine verglaçante légère
            57 => '🌧️❄️', // Bruine verglaçante dense
            61 => '🌧️', // Pluie légère
            63 => '🌧️', // Pluie modérée
            65 => '🌧️', // Pluie forte
            66 => '🌧️❄️', // Pluie verglaçante légère
            67 => '🌧️❄️', // Pluie verglaçante forte
            71 => '❄️',  // Neige légère
            73 => '❄️',  // Neige modérée
            75 => '❄️',  // Neige forte
            77 => '🌨️',  // Grains de neige
            80 => '🌧️',  // Averses de pluie légères
            81 => '🌧️',  // Averses de pluie modérées
            82 => '🌧️',  // Averses de pluie violentes
            85 => '🌨️',  // Averses de neige légères
            86 => '🌨️',  // Averses de neige fortes
            95 => '⛈️',  // Orage modéré ou fort
            96 => '⛈️🌨️', // Orage avec grêle légère
            99 => '⛈️🌨️', // Orage avec grêle forte
        ];
    
        return $weatherIcons[$weathercode] ?? '❓'; // Icône par défaut si le code est inconnu
    }



    private function getWeatherData(string $city, \DateTimeInterface $date): ?array
    {
        $client = HttpClient::create();
    
        // Obtenir les coordonnées de la ville
        $coordinates = $this->getCoordinates($city);
        if (!$coordinates) {
            return null;
        }
    
        // Convertir la date en format YYYY-MM-DD
        $formattedDate = $date->format('Y-m-d');
    
        try {
            // Appeler l'API Open-Meteo pour les prévisions
            $response = $client->request('GET', 'https://api.open-meteo.com/v1/forecast', [
                'query' => [
                    'latitude' => $coordinates['latitude'],
                    'longitude' => $coordinates['longitude'],
                    'daily' => 'temperature_2m_max,temperature_2m_min,weathercode', // Ajouter weathercode
                    'timezone' => 'auto',
                    'start_date' => $formattedDate,
                    'end_date' => $formattedDate,
                ],
            ]);
    
            // Vérifier si la réponse est réussie
            if ($response->getStatusCode() === 200) {
                $data = $response->toArray();
    
                // Extraire les données pour la date exacte
                if (isset($data['daily'])) {
                    $index = array_search($formattedDate, $data['daily']['time']);
                    if ($index !== false) {
                        return [
                            'temperature_max' => $data['daily']['temperature_2m_max'][$index] ?? null,
                            'temperature_min' => $data['daily']['temperature_2m_min'][$index] ?? null,
                            'weathercode' => $data['daily']['weathercode'][$index] ?? null, // Code météo
                            'icon' => $this->getWeatherIcon($data['daily']['weathercode'][$index]), // Icône météo
                        ];
                    }
                }
            }
        } catch (\Exception $e) {
            // Gérer les erreurs (par exemple, loguer l'erreur)
            error_log('Erreur lors de la récupération des données météo : ' . $e->getMessage());
        }
    
        return null;
    }


private function getCoordinates(string $city): ?array
{
    $client = HttpClient::create();

    try {
        // Appeler l'API Nominatim pour le géocodage
        $response = $client->request('GET', 'https://nominatim.openstreetmap.org/search', [
            'query' => [
                'q' => $city,
                'format' => 'json',
                'limit' => 1,
            ],
        ]);

        // Vérifier si la réponse est réussie
        if ($response->getStatusCode() === 200) {
            $data = $response->toArray();

            // Vérifier si des résultats ont été trouvés
            if (count($data) > 0) {
                return [
                    'latitude' => (float) $data[0]['lat'],
                    'longitude' => (float) $data[0]['lon'],
                ];
            }
        }
    } catch (\Exception $e) {
        // Gérer les erreurs (par exemple, loguer l'erreur)
        error_log('Erreur lors de la récupération des coordonnées : ' . $e->getMessage());
    }

    return null;
}


#[Route('/participer/{id}', name: 'evenement_participer', methods: ['POST'])]
public function participer(Evenement $event, EntityManagerInterface $em, Security $security): Response
{
    $user = $this->getAuthUser($security);

    $event->addParticipantId($user->getId());
    $em->persist($event);
    $em->flush();

    $this->addFlash('success', 'Vous participez maintenant à cet événement !');

    return $this->redirectToRoute('app_events', [
        'id' => $event->getId(),
        'userId' => $user->getId(), // On passe l'ID de l'utilisateur à la vue
    ]);
}

#[Route('/annuler/{id}', name: 'evenement_annuler', methods: ['POST'])]
public function annuler(Evenement $event, EntityManagerInterface $em, Security $security): Response
{
    $user = $this->getAuthUser($security);

    $event->removeParticipantId($user->getId());
    $em->persist($event);
    $em->flush();

    $this->addFlash('success', 'Vous ne participez plus à cet événement.');

    return $this->redirectToRoute('app_events', [
        'id' => $event->getId(),
        'userId' => $user->getId(), // On passe l'ID de l'utilisateur à la vue
    ]);
}










}







    

