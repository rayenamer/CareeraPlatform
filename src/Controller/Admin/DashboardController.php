<?php

namespace App\Controller\Admin;

use App\Entity\Discussion;
use App\Entity\Evenement;
use App\Entity\Offre;
use Doctrine\Persistence\ManagerRegistry;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route("/admin", name: "admin_dashboard")]
    public function admin(ManagerRegistry $doctrine): Response
    {
        // Fetch the Entity Manager
        $em = $doctrine->getManager();

        // Retrieve the data from the database
        $evenements = $em->getRepository(Evenement::class)->findAll();
        $offres = $em->getRepository(Offre::class)->findAll();
        $discussions = $em->getRepository(Discussion::class)->findAll();

        // Prepare the data (for example, counts by some criteria)
        $evenementCount = count($evenements);
        $offreCount = count($offres);
        $discussionCount = count($discussions);

        // Pass the data to the view
        return $this->render('admin/index.html.twig', [
            'evenement_count' => $evenementCount,
            'offre_count' => $offreCount,
            'discussion_count' => $discussionCount,
        ]);
    }
}
