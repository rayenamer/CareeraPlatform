<?php

namespace App\Controller;

use App\Repository\MissionfreelencerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class CherchermissionController extends AbstractController
{
    #[Route('/recherche-offre-mission', name: 'app_recherche_offre_mission')]
    public function recherche(Request $request, MissionfreelencerRepository $offreRepository): Response
    {
        // Récupérer la valeur du champ "query" envoyé via GET
        $query = $request->query->get('query');

        $offres = [];

        // Si une recherche est effectuée
        if ($query) {
            $offres = $offreRepository->findByFilters(['recherche' => $query]);

            if (empty($offres)) {
                $this->addFlash('warning', 'Aucune offre trouvée pour les critères de recherche spécifiés.');
            }
        }

        return $this->render('offrefrelencer/index.html.twig', [
            'offres' => $offres,
        ]);
    }
}
