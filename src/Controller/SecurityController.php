<?php
namespace App\Controller;

use App\Entity\Chercheur;
use App\Entity\Freelancer;
use App\Entity\Moderateur;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class SecurityController extends AbstractController
{
    
#[Route('/login', name: 'app_login', methods: ['GET', 'POST'])]
public function login(AuthenticationUtils $authenticationUtils, Security $security): Response
{
    // Check for authentication errors
    $error = $authenticationUtils->getLastAuthenticationError();
    
    // Get the last entered username/email (it will be email now)
    $lastUsername = $authenticationUtils->getLastUsername();

    // Check if the user is authenticated
    $user = $security->getUser();
    
    // Redirect based on the user role
    
    if ($user instanceof Moderateur) {
        return $this->redirectToRoute('app_home');  // Redirect to 'app_home' if the user is a Moderateur
    } elseif ($user instanceof Chercheur || $user instanceof Freelancer) {
        return $this->redirectToRoute('app_indexhome');  // Redirect to 'app_index' if the user is a Chercheur
    }
    

    // Render the login form if not authenticated
    return $this->render('security/login.html.twig', [
        'last_username' => $lastUsername,  // This will now be the email
        'error' => $error,  // Authentication error message if any
    ]);
}
#[Route('/login/redirect', name: 'app_login_redirect')]
public function redirectAfterLogin(Security $security): Response
{
    // Check if the user is authenticated
    if ($security->isGranted('IS_AUTHENTICATED_FULLY')) {
        $user = $security->getUser();

        // Redirect based on the user's role
        if ($user instanceof Moderateur) {
            return $this->redirectToRoute('app_home');  // Redirect to 'app_home' if the user is a Moderateur
        } elseif ($user instanceof Chercheur || $user instanceof Freelancer) {
            return $this->redirectToRoute('app_indexhome');  // Redirect to 'app_indexhome' if the user is a Chercheur or Freelancer
        }
    }

    // Default redirect if no role matches
    return $this->redirectToRoute('app_index');
}
    #[Route('/profile', name: 'app_profile')]
public function profile(Security $security, UserRepository $userRepository): Response
{
    if ($security->isGranted('IS_AUTHENTICATED_FULLY')) {
        $user = $security->getUser();

        // Redirect based on the user's role
        if ($user instanceof Chercheur) {
            return $this->redirectToRoute('app_chercheurprofile');  // Redirect to 'app_home' if the user is a Moderateur
        } elseif ($user instanceof Freelancer) {
            return $this->redirectToRoute('app_profilefreelancer');  // Redirect to 'app_indexhome' if the user is a Chercheur or Freelancer
        }
    }
    return $this->redirectToRoute('app_login');
}

#[Route('/logout', name: 'app_logout')]
public function logout(): void
    {
        throw new \Exception('Logout is handled by Symfony.');
    }
}
