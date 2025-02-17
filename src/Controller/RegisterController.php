<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class RegisterController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(): Response
    {
        return $this->render('register/index.html.twig');
    }

    #[Route('/freelancer', name: 'register_freelancer')]
    public function registerFreelancer(): Response
    {
        return $this->render('freelancer/index.html.twig');
    }

    #[Route('/chercheur', name: 'register_chercheur')]
    public function registerchercheur(): Response
    {
        return $this->render('chercheur/index.html.twig');
    }

    #[Route('/moderateur', name: 'register_moderateur')]
    public function registermoderateur(): Response
    {
        return $this->render('moderateur/index.html.twig');
    }
}
