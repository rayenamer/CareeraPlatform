<?php

namespace App\Controller;

use App\Entity\Freelancer;
use App\Form\FreelancerType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

final class FreelancerController extends AbstractController
{
    #[Route('/freelancer', name: 'app_freelancer')]
    public function index(ManagerRegistry $m, Request $req, SluggerInterface $slugger): Response
    {
        $em = $m->getManager();
        $freelancer = new Freelancer();
        $freelancer->setReview("0");
        $form = $this->createForm(FreelancerType::class, $freelancer);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            if (null === $freelancer->getDatedenais()) {
                $freelancer->setDatedenais(new \DateTimeImmutable());
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
                    $freelancer->setPhoto($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Impossible de télécharger l’image.');
                }
            } else {
                // Définir une image par défaut si aucune image n'est fournie
                $freelancer->setPhoto('default.jpg');
            }
            $cvFile = $form->get('cv')->getData();
            if ($cvFile) {
                $newFilename = uniqid().'.'.$cvFile->guessExtension();
                $cvFile->move($this->getParameter('images_directory'), $newFilename);
                $freelancer->setCv($newFilename);
            } else {
                $freelancer->setCv('default.pdf'); // Évite l'erreur
            }

            $em->persist($freelancer);
            $em->flush();
            
            return $this->redirectToRoute('app_login');
        }

        return $this->render('freelancer/index.html.twig', [
            'addform' => $form->createView(),
        ]);
    }
}
