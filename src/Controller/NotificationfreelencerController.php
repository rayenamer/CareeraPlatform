<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class NotificationfreelencerController extends AbstractController
{
    #[Route('/notificationfreelencer', name: 'app_notificationfreelencer')]
    public function index(): Response
    {
        return $this->render('notificationfreelencer/index.html.twig', [
            'controller_name' => 'NotificationfreelencerController',
        ]);
    }
}
