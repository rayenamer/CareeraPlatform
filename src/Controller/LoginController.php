<?php


namespace App\Controller;
use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

final class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(): Response
    {
        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }


    #[Route('/addlogin', name: 'app_login')]
    public function login(Request $request, EntityManagerInterface $entityManager): Response 
    {
        $email = trim($request->request->get('email'));
        $motdepasse = trim($request->request->get('motdepasse'));
    
        dump("Input email:", $email);
        dump("Input password:", $motdepasse);
    
        $utilisateur = $entityManager->getRepository(Utilisateur::class)->findOneBy(['email' => $email]);
    
        if (!$utilisateur) {
            dump("No user found with this email.");
            $this->addFlash('error', 'Email ou mot de passe incorrect.');
            return $this->render('login/index.html.twig');
        }
    
        dump("Stored password in DB:", $utilisateur->getMotdepasse());
    
        if ($utilisateur->getMotdepasse() !== $motdepasse) {
            dump("Password mismatch!");
            $this->addFlash('error', 'Email ou mot de passe incorrect.');
            return $this->render('login/index.html.twig');
        }
    
        dump("Login successful");
        return $this->redirectToRoute('app_index');
    }
    





    //#[Route('/addlogin', name: 'app_addlogin')]
    //public function login(Request $request, UtilisateurRepository $rep, UserPasswordHasherInterface $passwordHasher): Response
    //{
    //    $email = $request->request->get('email');
    //    $motdepasse = $request->request->get('motdepasse');
    //
    //    // Utilisation de la méthode connectermail pour récupérer l'utilisateur par son email
    //    $user = $rep->connectermail($email);
    //
    //    if ($user && $passwordHasher->isPasswordValid($user, $motdepasse)) {
    //        // Si l'utilisateur existe et le mot de passe est correct
    //        return $this->redirectToRoute('app_index');  // Redirection vers la page index
    //    }
    //    
    //    else {
    //        // Si l'utilisateur n'existe pas ou mot de passe incorrect, afficher un message d'erreur
    //        $this->addFlash('error', 'Email ou mot de passe incorrect.');
    //        return $this->render('login/index.html.twig');
    //    }
    //}
    

    //#[Route('/forgot-password', name: 'forgot_password')]
    //public function forgotPassword(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, UrlGeneratorInterface $urlGenerator): Response
    //{
    //    if ($request->isMethod('POST')) {
    //        $email = $request->request->get('email');
    //        $user = $entityManager->getRepository(Utilisateur::class)->findOneBy(['email' => $email]);
//
    //        if ($user) {
    //            // Générer un token unique
    //            $token = bin2hex(random_bytes(32));
    //            $user->setResetToken($token);
    //            $entityManager->flush();
//
    //            // Générer le lien de réinitialisation
    //            $resetUrl = $urlGenerator->generate('reset_password', ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);
//
    //            // Envoyer l'email
    //            $emailMessage = (new Email())
    //                ->from('no-reply@tonsite.com')
    //                ->to($user->getEmail())
    //                ->subject('Réinitialisation de votre mot de passe')
    //                ->html("<p>Bonjour,</p><p>Cliquez sur le lien ci-dessous pour réinitialiser votre mot de passe :</p><p><a href='$resetUrl'>$resetUrl</a></p>");
//
    //            $mailer->send($emailMessage);
//
    //            $this->addFlash('success', 'Un email de réinitialisation a été envoyé.');
    //            return $this->redirectToRoute('app_login');
    //        }
//
    //        $this->addFlash('danger', 'Aucun compte associé à cet email.');
    //    }
//
    //    return $this->render('login/reset-password.html.twig');
    //}
//
    //#[Route('/reset-password/{token}', name: 'reset_password')]
    //public function resetPassword(Request $request, string $token, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    //{
    //    $user = $entityManager->getRepository(Utilisateur::class)->findOneBy(['resetToken' => $token]);
//
    //    if (!$user) {
    //        $this->addFlash('danger', 'Lien invalide ou expiré.');
    //        return $this->redirectToRoute('forgot_password');
    //    }
//
    //    if ($request->isMethod('POST')) {
    //        $newPassword = $request->request->get('password');
    //        $hashedPassword = $passwordHasher->hashPassword($user, $newPassword);
    //        $user->setPassword($hashedPassword);
    //        $user->setResetToken(null);
    //        $entityManager->flush();
//
    //        $this->addFlash('success', 'Votre mot de passe a été réinitialisé avec succès.');
    //        return $this->redirectToRoute('app_login');
    //    }
//
    //    return $this->render('login/reset_password.html.twig', ['token' => $token]);
    //}

}
