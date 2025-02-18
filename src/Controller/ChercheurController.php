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
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

final class ChercheurController extends AbstractController
{
    #[Route('/chercheurprofile', name: 'app_chercheurprofile')]
    public function profile(ChercheurRepository $repo): Response
    {
        $profile = $repo->findAll();
        return $this->render('chercheur/profile.html.twig', [
            'tabprofile' => $profile,
        ]);
    }

    #[Route('/chercheur', name: 'app_chercheur')]
    public function index(ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger): Response
    {
        $em = $doctrine->getManager();
        $chercheur = new Chercheur();
        $form = $this->createForm(ChercheurType::class, $chercheur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $chercheur = $form->getData();
            $chercheur->setMotdepasse($chercheur->getMotdepasse() ?? '');
            $chercheur->setConfirmpassse($chercheur->getConfirmpassse() ?? '');

            $this->handleFileUploads($form, $chercheur, $slugger);

            $em->persist($chercheur);
            $em->flush();

            return $this->redirectToRoute('app_login');
        }

        return $this->render('chercheur/index.html.twig', [
            'addform' => $form->createView(),
        ]);
    }

    #[Route('/updatechercheur/{id}', name: 'app_updatechercheur')]
    public function updatechercheur($id, ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger): Response
    {
        $em = $doctrine->getManager();
        $chercheur = $em->getRepository(Chercheur::class)->find($id);

        if (!$chercheur) {
            throw $this->createNotFoundException('Le chercheur n\'existe pas.');
        }

        $form = $this->createForm(ChercheurType::class, $chercheur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->handleFileUploads($form, $chercheur, $slugger);
            $em->persist($chercheur);
            $em->flush();

            return $this->redirectToRoute('app_chercheur');
        }

        return $this->render('chercheur/updatechercheur.html.twig', [
            'addform' => $form->createView(),
        ]);
    }

    #[Route('/deletechercheur/{id}', name: 'app_deletechercheur')]
    public function deletechercheur($id, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $chercheur = $em->getRepository(Chercheur::class)->find($id);

        if (!$chercheur) {
            throw $this->createNotFoundException('Le chercheur n\'existe pas.');
        }

        $em->remove($chercheur);
        $em->flush();
        $this->addFlash('success', 'Chercheur supprimé avec succès.');

        return $this->redirectToRoute('app_chercheur');
    }

    private function handleFileUploads($form, Chercheur $chercheur, SluggerInterface $slugger): void
    {
        // Traitement de la photo
        $imageFile = $form->get('photo')->getData();
        if ($imageFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

            try {
                $imageFile->move($this->getParameter('images_directory'), $newFilename);
                $chercheur->setPhoto($newFilename);
            } catch (FileException $e) {
                $this->addFlash('error', 'Impossible de télécharger l’image.');
            }
        } else {
            $chercheur->setPhoto('default.jpg');
        }

        // Traitement du CV
        $cvFile = $form->get('cv')->getData();
        if ($cvFile) {
            $newFilename = uniqid() . '.' . $cvFile->guessExtension();
            try {
                $cvFile->move($this->getParameter('images_directory'), $newFilename);
                $chercheur->setCv($newFilename);
            } catch (FileException $e) {
                $this->addFlash('error', 'Impossible de télécharger le CV.');
            }
        } else {
            $chercheur->setCv('default.pdf');
        }
    }
    
}
