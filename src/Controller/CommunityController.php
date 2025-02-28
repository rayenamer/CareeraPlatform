<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\SecurityBundle\Security;
use App\Entity\User;
use App\Repository\UserRepository;

final class CommunityController extends AbstractController
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

    #[Route('/community', name: 'app_community')]
    public function index(UserRepository $userRepository,Security $security): Response
    {
        $user = $this->getAuthUser($security);

        $users = $userRepository->findAll();
        
        $filteredUsers = array_filter($users, function ($u) use ($user) {
            return $u !== $user; 
        });
        
        $filteredUsers = array_values($filteredUsers);

        $users = $filteredUsers;
        return $this->render('community/index.html.twig', [
            'controller_name' => 'CommunityController',
            'users' => $users,
        ]);
    }
}
