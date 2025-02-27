<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\SecurityBundle\Security;
use App\Entity\User;
use App\Repository\UserRepository;

final class UserDataController extends AbstractController
{
    #[Route('/user/data', name: 'user_data', methods: ['GET'])]
    public function getUserData(Security $security): Response
    {
        $user = $security->getUser();

        if (!$user) {
            return new Response('User not authenticated', 401);
        }

        if (!$user instanceof User) {
            return new Response('Invalid user object', 500);
        }

        return new Response(
            sprintf("User ID: %d, prenom: %s,nom: %s, email: %s, doamine: %s, sexe: %s, tél: %d, Roles: %s", 
                $user->getId(), 
                $user->getPrenom(), // getUsername() for older Symfony versions
                $user->getNom(),
                $user->getEmail(),
                $user->getDomaine(),
                $user->getSexe(),
                $user->getTel(),
                implode(', ', $user->getRoles())
            )
        );
    }

}
