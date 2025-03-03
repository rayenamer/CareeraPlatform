<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Notification;
use App\Repository\NotificationRepository;

use Symfony\Bundle\SecurityBundle\Security;
use App\Entity\User;

final class NotificationController extends AbstractController
{
    private $managerRegistry;
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


    // Constructor that injects the ManagerRegistry
    public function __construct(ManagerRegistry $managerRegistry)
    {
        $this->managerRegistry = $managerRegistry;
    }
    #[Route('/notification', name: 'app_notification')]
    public function index(NotificationRepository $notificationRepository,Security $security): Response
    {
        $userId = $this->getAuthUser($security)->getId();

        $notifications = $notificationRepository->findBy(['userId' => $userId]);
        return $this->render('notification/index.html.twig', [
            'controller_name' => 'NotificationController',
            'notifications' => $notifications
        ]);
    }

    public function createNotification(ManagerRegistry $em,string $message,string $userId)
    {
        $manager = $em->getManager();
        $notification = new Notification($message,$userId);
        $manager->persist($notification);
        $manager->flush();
    }
    #[Route('/setNotificationTrue/{id}', name: 'app_setNotificationTrue')]
    public function markAsRead(NotificationRepository $notificationRepository, ManagerRegistry $doctrine, $id)
    {
        $manager = $doctrine->getManager();

        $notification = $notificationRepository->find($id);

        if ($notification) {
            // Mark the notification as read
            $notification->setIsRead(true);
            $manager->flush();
        }

        // Redirect to the notifications route for the user
        return $this->redirectToRoute('app_notification', ['userId' => $notification->getUserId()]);
    }



}
