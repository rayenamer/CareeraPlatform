<?php

namespace App\Controller;

use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Entity\User;
use Symfony\Bundle\SecurityBundle\Security;

use App\Entity\Evenement;
use App\Form\OffreType;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;


final class EvenementsController extends AbstractController
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
   

    #[Route('/event', name: 'app_event')]
    public function index(EvenementRepository $rep, Security $security): Response
    { // Récupérer l'utilisateur connecté
        $user = $this->getAuthUser($security); 


        //if (!$user) {
            // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
            //return $this->redirectToRoute('app_login');
        //}


        // Récupérer les événements créés par l'utilisateur connecté
        $events = $rep->findByUserId($user->getId());

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

