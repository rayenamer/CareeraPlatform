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
    /**
 * @Route("/login", name="app_login")
 */
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

    #[Route('/profile', name: 'app_profile')]
public function profile(Security $security, UserRepository $userRepository): Response
{
    // Récupère l'utilisateur connecté
    $user = $security->getUser();

    // Vérifie si un utilisateur est connecté
    //if (!$user instanceof User) {
    //    return $this->redirectToRoute('app_login');  // Redirect to login if the user is not authenticated
    //}

    // Vérifie le type d'utilisateur et redirige vers la bonne page de profil
   //if ($user instanceof Chercheur) {
   //    return $this->redirectToRoute('app_chercheurprofile');  // Redirect to chercheur profile
   //} elseif ($user instanceof Freelancer) {
   //    return $this->redirectToRoute('app_profilefreelancer');  // Redirect to freelancer profile
   //} elseif ($user instanceof Moderateur) {
   //    return $this->redirectToRoute('app_profilemoderateur');  // Redirect to moderateur profile
   //}

    // If no match, redirect to login (or handle accordingly)
    return $this->redirectToRoute('app_login');
}

#[Route('/logout', name: 'app_logout')]
public function logout(): void
    {
        throw new \Exception('Logout is handled by Symfony.');
    }
}
