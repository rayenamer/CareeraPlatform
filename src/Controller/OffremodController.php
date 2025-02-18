<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Entity\TypeContrat;
use App\Form\OffreType;
use App\Repository\OffreRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;

final class OffremodController extends AbstractController
{
    #[Route('/offremod', name: 'app_offremod')]
    public function index(OffreRepository $offreRepository): Response
    {
        $offres = $offreRepository->findAll();

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
        // Vérifier si le type de contrat existe
        $typeContrat = $doctrine->getRepository(TypeContrat::class)->findOneBy(['nom' => 'Stage']);
        if (!$typeContrat) {
            $this->addFlash('error', "Le TypeContrat 'Stage' est introuvable.");
            return $this->redirectToRoute('app_ajoutoffre');
        }
        $offre->setTypecontrat($typeContrat);
        $offre->setDisponibilite(true); 
        // Gestion de l'image
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

        // Enregistrement de l'offre en base de données
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
    public function modifoffre(ManagerRegistry $doctrine, Request $req, SluggerInterface $slugger, OffreRepository $rep, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $offre = $rep->find($id);

        if (!$offre) {
            $this->addFlash('error', "Offre introuvable.");
            return $this->redirectToRoute('app_offremod');
        }

        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion de l'image si une nouvelle est téléchargée
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

            $entityManager->flush();
            $this->addFlash('success', "Offre modifiée avec succès !");
            return $this->redirectToRoute('app_offremod');
        }

        return $this->render('offre/modifoffre.html.twig', [
            'addform' => $form->createView(),
        ]);
    }

    #[Route('/supprimeroffre/{id}', name: 'app_supprimeroffre')]
    public function supprimeroffre(ManagerRegistry $doctrine, OffreRepository $rep, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $offre = $rep->find($id);

        if (!$offre) {
            $this->addFlash('error', "Offre introuvable.");
        } else {
            $entityManager->remove($offre);
            $entityManager->flush();
            $this->addFlash('success', "Offre supprimée avec succès !");
        }

        return $this->redirectToRoute('app_offremod');
    }
}
