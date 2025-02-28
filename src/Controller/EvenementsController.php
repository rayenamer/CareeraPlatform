<?php

namespace App\Controller;

use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Security;

use App\Entity\Evenement;
use App\Form\OffreType;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;


final class EvenementsController extends AbstractController
{
   
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    #[Route('/event', name: 'app_event')]
    public function index(EvenementRepository $rep): Response
    {
        // Récupérer l'utilisateur connecté
        $user = $this->security->getUser();

        //if (!$user) {
            // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
            //return $this->redirectToRoute('app_login');
        //}

        // Récupérer les événements créés par l'utilisateur connecté
        $events = $rep->findByUserId(3);

        return $this->render('evenements/eventmod.html.twig', [
            'tabevent' => $events,
        ]);
    }

    #[Route('/event/{id}', name: 'app_event_show')]
    public function show(EvenementRepository $rep, int $id): Response
    {
        $event = $rep->find($id);

        if (!$event) {
            throw $this->createNotFoundException('Événement non trouvé.');
        }

        return $this->render('evenements/event_detail.html.twig', [
            'event' => $event,
        ]);
    }

}

