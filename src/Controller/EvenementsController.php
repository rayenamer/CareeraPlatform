<?php

namespace App\Controller;

use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Entity\Evenement;
use App\Form\OffreType;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;


final class EvenementsController extends AbstractController
{
   
    #[Route('/event', name: 'app_event')]
    public function index(EvenementRepository $rep): Response
    {
        $event = $rep->findAll();
        return $this->render('evenements/index.html.twig', [
            'tabevent' => $event,
        ]);
    }



}

