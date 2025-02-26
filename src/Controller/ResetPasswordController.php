<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ResetPasswordRequestFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\ResetPassword\Controller\ResetPasswordControllerTrait;
use SymfonyCasts\Bundle\ResetPassword\Exception\ResetPasswordExceptionInterface;
use SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelperInterface;

#[Route('/reset-password')]
class ResetPasswordController extends AbstractController
{
    use ResetPasswordControllerTrait;

    private string $smtpUser = 'choubeniighoffrane@gmail.com';
    private string $smtpPass = 'uvcmevcuwmbvkzjq';

    public function __construct(
        private ResetPasswordHelperInterface $resetPasswordHelper,
        private EntityManagerInterface $entityManager
    ) {}

    #[Route('', name: 'app_forgot_password_request')]
    public function request(Request $request, MailerInterface $mailer, TranslatorInterface $translator): Response
    {
        $form = $this->createForm(ResetPasswordRequestFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = $form->get('email')->getData();
            return $this->processSendingPasswordResetEmail($email);
        }

        return $this->render('reset_password/request.html.twig', [
            'resetForm' => $form,
        ]);
    }

    #[Route('/check-email', name: 'app_check_email')]
    public function checkEmail(): Response
    {
        $resetToken = $this->getTokenObjectFromSession() ?? $this->resetPasswordHelper->generateFakeResetToken();

        return $this->render('reset_password/check_email.html.twig', [
            'resetToken' => $resetToken,
        ]);
    }

    #[Route('/reset/{token}', name: 'app_reset_password')]
    public function reset(Request $request, UserPasswordHasherInterface $passwordHasher, TranslatorInterface $translator, ?string $token = null): Response
    {
        if ($token) {
            $this->storeTokenInSession($token);
            return $this->redirectToRoute('app_reset_password');
        }

        $token = $this->getTokenFromSession();

        if (null === $token) {
            throw $this->createNotFoundException('Aucun jeton de réinitialisation trouvé.');
        }

        try {
            /** @var User $user */
            $user = $this->resetPasswordHelper->validateTokenAndFetchUser($token);
        } catch (ResetPasswordExceptionInterface $e) {
            $this->addFlash('danger', $translator->trans(
                ResetPasswordExceptionInterface::MESSAGE_PROBLEM_VALIDATE,
                [],
                'ResetPasswordBundle'
            ) . ' - ' . $translator->trans($e->getReason(), [], 'ResetPasswordBundle'));

            return $this->redirectToRoute('app_forgot_password_request');
        }

        $form = $this->createForm(ResetPasswordRequestFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->resetPasswordHelper->removeResetRequest($token);
            $user->setPassword($passwordHasher->hashPassword($user, $form->get('plainPassword')->getData()));
            $this->entityManager->flush();
            $this->cleanSessionAfterReset();
            $this->addFlash('success', 'Votre mot de passe a été réinitialisé avec succès.');

            return $this->redirectToRoute('app_login');
        }

        return $this->render('reset_password/reset.html.twig', [
            'resetForm' => $form,
        ]);
    }

    private function processSendingPasswordResetEmail(string $emailFormData): RedirectResponse
{
    // Récupération de l'utilisateur par email
    $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $emailFormData]);

    if (!$user) {
        // Générer un faux token pour éviter de révéler l'inexistence de l'utilisateur
        $resetToken = $this->resetPasswordHelper->generateFakeResetToken();
    } else {
        try {
            $resetToken = $this->resetPasswordHelper->generateResetToken($user);
        } catch (ResetPasswordExceptionInterface $e) {
            return $this->redirectToRoute('app_check_email');
        }
    }

    // Extraire la valeur du token AVANT de le stocker en session
    $tokenValue = $resetToken->getToken();

    // Stocker le token en session
    $this->setTokenObjectInSession($resetToken);

    // Passer la valeur du token à la méthode d'envoi d'email
    $this->sendResetEmail($emailFormData, $tokenValue);

    return $this->redirectToRoute('app_check_email');
}


private function sendResetEmail(string $userEmail, string $token): void
{
    $transport = new EsmtpTransport('smtp.gmail.com', 587, false);
    $transport->setUsername($this->smtpUser);
    $transport->setPassword($this->smtpPass);
    $mailer = new Mailer($transport);

    // Générer une URL absolue pour le lien de réinitialisation
    $resetUrl = $this->generateUrl(
        'app_reset_password',
        ['token' => $token],
        UrlGeneratorInterface::ABSOLUTE_URL
    );

    $email = (new TemplatedEmail())
        ->from(new Address($this->smtpUser, 'Confirmation'))
        ->to($userEmail)
        ->subject('Réinitialisation de votre mot de passe')
        ->text('Veuillez cliquer sur le lien ci-dessous pour réinitialiser votre mot de passe.')
        ->html('<p>Veuillez <a href="' . $resetUrl . '">cliquer ici</a> pour réinitialiser votre mot de passe.</p>');

    $mailer->send($email);
}

}
