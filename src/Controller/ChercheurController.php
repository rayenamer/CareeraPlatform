<?php

namespace App\Controller;

use App\Entity\Chercheur;
use App\Form\ChercheurType;
use App\Repository\ChercheurRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

final class ChercheurController extends AbstractController{

    #[Route('/profile', name: 'app_profile')]
    public function profile(ChercheurRepository $req): Response
    {
        $profile=$req->findAll();
        return $this->render('chercheur/profile.html.twig', [
            'tabprofile' => $profile ,
        ]);
    }

    #[Route('/chercheur', name: 'app_chercheur')]
    public function index(ManagerRegistry $m, Request $req, SluggerInterface $slugger ): Response
    {
        $em = $m->getManager();
        $chercheur = new Chercheur();
    
        $form = $this->createForm(ChercheurType::class, $chercheur);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            if (null === $chercheur->getDatedenaiss()) {
                $chercheur->setDatedenaiss(new \DateTimeImmutable());
            }

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
                    $chercheur->setPhoto($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Impossible de télécharger l’image.');
                }
            } else {
                // Définir une image par défaut si aucune image n'est fournie
                $chercheur->setPhoto('default.jpg');
            }
            $cvFile = $form->get('cv')->getData();
            if ($cvFile) {
                $newFilename = uniqid().'.'.$cvFile->guessExtension();
                $cvFile->move($this->getParameter('images_directory'), $newFilename);
                $chercheur->setCv($newFilename);
            } else {
                $chercheur->setCv('default.pdf'); // Évite l'erreur
            }

            $em->persist($chercheur);
            $em->flush();
            
            return $this->redirectToRoute('app_login');
        }

        return $this->render('chercheur/index.html.twig', [
            'addform' => $form->createView(),
        ]);
    }
}
