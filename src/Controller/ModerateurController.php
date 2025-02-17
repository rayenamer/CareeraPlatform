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
    #[Route('/moderateur', name: 'app_moderateur')]
    public function index(ManagerRegistry $m, Request $req, SluggerInterface $slugger): Response
    {
        $em = $m->getManager();
        $moderateur = new Moderateur();
        $form = $this->createForm(ModerateurType::class, $moderateur);
        $form->handleRequest($req);

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
                // Définir une image par défaut si aucune image n'est fournie
                $moderateur->setPhoto('default.jpg');
            }
        if ($form->isSubmitted() && $form->isValid()) {
            
            $em->persist($moderateur);
            $em->flush();
            return $this->redirectToRoute('app_login');
        }

      
        return $this->render('moderateur/index.html.twig', [
            'addform' => $form->createView(),
        ]);
    }
}
