<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Repository\BlockedUserRepository;
final class BlockedUsersController extends AbstractController
{
    #[Route('/admin/blocked-users', name: 'admin_blocked_users')]
    public function blockedUsers(BlockedUserRepository $blockedUserRepo)
    {
        $blockedUsers = $blockedUserRepo->findAll();
        return $this->render('blocked_users/index.html.twig', [
            'blockedUsers' => $blockedUsers,
        ]);
    }
    

}
