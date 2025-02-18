<?php

namespace App\Controller;

use App\Entity\Moderateur;
use App\Form\ModerateurType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

final class ModerateurController extends AbstractController
{
    #[Route('/moderateur/profile', name: 'app_moderateur_profile')]
    public function profile(ManagerRegistry $repo): Response
    {
        $profile = $repo->getRepository(Moderateur::class)->findAll();
        return $this->render('moderateur/profile.html.twig', [
            'tabprofile' => $profile,
        ]);
    }

    #[Route('/moderateur', name: 'app_moderateur')]
    public function index(ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger): Response
    {
        $em = $doctrine->getManager();
        $moderateur = new Moderateur();

        $form = $this->createForm(ModerateurType::class, $moderateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Traitement de la photo
            $imageFile = $form->get('photo')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                    $moderateur->setPhoto($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Impossible de télécharger l’image.');
                }
            } else {
                $moderateur->setPhoto('default.jpg'); // Définir une image par défaut
            }

            // Persister l'entité dans la base de données
            $em->persist($moderateur);
            $em->flush();

            // Rediriger vers la page de connexion
            return $this->redirectToRoute('app_login');
        }

        return $this->render('moderateur/index.html.twig', [
            'addform' => $form->createView(),
        ]);
    }
}
