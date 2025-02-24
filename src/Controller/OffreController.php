<?php

namespace App\Controller;

use App\Entity\Candidature;
use App\Entity\Offre;
use App\Form\OffreType;
use App\Repository\CandidatureRepository;
use App\Repository\OffreRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



final class OffreController extends AbstractController
{
    
    #[Route('/offre', name: 'app_offre')]
    public function index(OffreRepository $rep): Response
    {
        $offres = $rep->findAll();
        return $this->render('offre/index.html.twig', [
            'taboffre' => $offres,
        ]);
    }


    #[Route('/postuler/{id}', name: 'app_postuler')]
    public function postuler(int $id, OffreRepository $offreRepository): Response
    {
        $offre = $offreRepository->find($id);
        if (!$offre) {
            throw $this->createNotFoundException('Offre introuvable');
        }

        return $this->render('offre/postuler.html.twig', [
            'offre' => $offre,
        ]);
    }
    

    #[Route('/recherche', name: 'app_recherche')]
    public function recherche(Request $request, OffreRepository $offreRepository): Response
    {
        $searchQuery = $request->query->get('search');
        if ($searchQuery) {
            $offres = $offreRepository->findBySearchQuery($searchQuery);
        } else {
            
            $offres = $offreRepository->findAll();
        }

        return $this->render('offre/index.html.twig', [
            'taboffre' => $offres,
        ]);
    }
   
}
