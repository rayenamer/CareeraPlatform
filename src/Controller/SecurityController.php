<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    #[Route('/login', name: 'app_login', methods: ['GET', 'POST'])]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Check for authentication errors
        $error = $authenticationUtils->getLastAuthenticationError();
        
        // Get the last entered username/email (it will be email now)
        $lastUsername = $authenticationUtils->getLastUsername();
    
        // Render the login form with email as the last entered username
        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,  // This will now be the email
            'error' => $error,  // Authentication error message if any
        ]); 
        
    }


    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {
        throw new \Exception('Logout is handled by Symfony.');
    }
}
