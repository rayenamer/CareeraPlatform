<?php

namespace App\Controller;

use App\Repository\NotificationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Utilisateur;

final class NotificationsController extends AbstractController
{
    #[Route('/notifications', name: 'app_notifications')]
    public function notifications(NotificationRepository $notificationRepository): Response
    {
        // Récupérer l'utilisateur connecté
        $user = $this->getUser(); // Correction de getUtilisateur() -> getUser()
        
        
        // Récupérer les notifications de l'utilisateur connecté
        $notifications = $notificationRepository->findBy(['utilisateur' => $user]);

        // Retourner les notifications à la vue
        return $this->render('notifications/index.html.twig', [
            'notifications' => $notifications,
        ]);
    }
}
