<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Entity\TypeContrat;
use App\Form\OffreType;
use App\Repository\CandidatureRepository;
use App\Repository\OffreRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;

final class OffremodController extends AbstractController
{
    private OffreRepository $offreRepository;

    public function __construct(OffreRepository $offreRepository)
    {
        $this->offreRepository = $offreRepository;
    }

    #[Route('/offremod', name: 'app_offremod')]
    public function index(): Response
    {
        $offres = $this->offreRepository->findAll();

        return $this->render('offre/offremod.html.twig', [
            'taboffre' => $offres,
        ]);
    }

    #[Route('/ajoutoffre', name: 'app_ajoutoffre')]
    public function ajoutoffre(ManagerRegistry $doctrine, Request $req, SluggerInterface $slugger): Response
    {
        $offre = new Offre();
        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            $typeContrat = $doctrine->getRepository(TypeContrat::class)->findOneBy(['nom' => 'Stage']);
            if (!$typeContrat) {
                $this->addFlash('error', "Le TypeContrat 'Stage' est introuvable.");
                return $this->redirectToRoute('app_ajoutoffre');
            }
            $offre->setTypecontrat($typeContrat);
            $offre->setDisponibilite(true);

            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                    $offre->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Impossible de télécharger l’image.');
                    return $this->redirectToRoute('app_ajoutoffre');
                }
            }

            $entityManager = $doctrine->getManager();
            $entityManager->persist($offre);
            $entityManager->flush();

            $this->addFlash('success', "Offre ajoutée avec succès !");
            return $this->redirectToRoute('app_offremod');
        }

        return $this->render('offre/ajoutoffre.html.twig', [
            'addform' => $form->createView(),
        ]);
    }

    #[Route('/modifoffre/{id}', name: 'app_modifoffre')]
    public function modifoffre(ManagerRegistry $doctrine, Request $req, SluggerInterface $slugger, int $id): Response
    {
        $offre = $this->offreRepository->find($id);
        if (!$offre) {
            $this->addFlash('error', "Offre introuvable.");
            return $this->redirectToRoute('app_offremod');
        }

        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                    $offre->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Impossible de télécharger l’image.');
                }
            }

            $doctrine->getManager()->flush();
            $this->addFlash('success', "Offre modifiée avec succès !");
            return $this->redirectToRoute('app_offremod');
        }

        return $this->render('offre/modifoffre.html.twig', [
            'addform' => $form->createView(),
        ]);
    }

    #[Route('/supprimeroffre/{id}', name: 'app_supprimeroffre')]
    public function supprimeroffre(ManagerRegistry $doctrine, int $id): Response
    {
        $offre = $this->offreRepository->find($id);
        if (!$offre) {
            $this->addFlash('error', "Offre introuvable.");
        } else {
            $doctrine->getManager()->remove($offre);
            $doctrine->getManager()->flush();
            $this->addFlash('success', "Offre supprimée avec succès !");
        }
        return $this->redirectToRoute('app_offremod');
    }

    #[Route('/statistiques', name: 'app_statistiques')]
    public function statistiques(OffreRepository $offreRepository): Response {
    
        // Récupération des statistiques
        $statsOffre = $offreRepository->countByOffreType();
        $statsLocalisation = $offreRepository->countByLocalisation();
        $statsSalaire = $offreRepository->countBySalaireRange();
    
        // Préparer les données pour Chart.js
        $labelsOffre = array_column($statsOffre, 'typeOffre'); // Extraction du nom
        $dataOffre = array_column($statsOffre, 'total');
    
        $labelsLocalisation = array_column($statsLocalisation, 'localisation');
        $dataLocalisation = array_column($statsLocalisation, 'total');
    
        $labelsSalaire = array_column($statsSalaire, 'range');
        $dataSalaire = array_column($statsSalaire, 'total');
    
        return $this->render('offre/statistiques.html.twig', [
            'labelsOffre' => json_encode($labelsOffre),
            'dataOffre' => json_encode($dataOffre),
            'labelsLocalisation' => json_encode($labelsLocalisation),
            'dataLocalisation' => json_encode($dataLocalisation),
            'labelsSalaire' => json_encode($labelsSalaire),
            'dataSalaire' => json_encode($dataSalaire),
        ]);
    }
    
}
