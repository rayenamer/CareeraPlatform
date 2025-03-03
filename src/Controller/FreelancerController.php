<?php

namespace App\Controller;

use App\Entity\Freelancer;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\DependencyInjection\SecurityExtension;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class FreelancerController extends AbstractController
{ 
    #[Route('/profilefreelancer', name: 'app_profilefreelancer')]
    public function profile(ManagerRegistry $doctrine, Security $security,UserRepository $userRepository): Response
    {
        $user = $security->getUser();
        if (!$user instanceof freelancer) {
            return $this->redirectToRoute('app_login');  // Redirect to login if the user is not authenticated
        }
        $profile = $doctrine->getRepository(Freelancer::class)->find($user->getId());
        return $this->render('security/profilefreelancer.html.twig', [
            'tabprofile' => $profile,
        ]);
    }
    #[Route('/freelancer', name: 'app_freelancer')]
    public function index(ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger): Response
    {
        // Créer une instance de Freelancer
        $freelancer = new Freelancer(); 

        // Gérer la soumission du formulaire
        if ($request->isMethod('POST')) {
            // Récupérer les données depuis la requête
            $freelancer->setNom($request->request->get('nom'));
            $freelancer->setPrenom($request->request->get('prenom'));
            $freelancer->setEmail($request->request->get('email'));
            $freelancer->setTel($request->request->get('tel'));
            $freelancer->setAdresse($request->request->get('adresse'));
            $freelancer->setDomaine($request->request->get('domaine'));
            $freelancer->setSexe($request->request->get('sexe'));

        
           // Récupérer et hacher le mot de passe
$password = $request->request->get('password');
if ($password) {
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $freelancer->setPassword($hashedPassword);
}
            // Gérer l'upload de l'image
            $imageFile = $request->files->get('photo');
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
            }
 
            // Gérer l'upload du CV
            $cvFile = $request->files->get('cv');
            if ($cvFile) {
                $newFilename = uniqid().'.'.$cvFile->guessExtension();
                $cvFile->move($this->getParameter('images_directory'), $newFilename);
                $freelancer->setCv($newFilename);
            }

            // Sauvegarder les données dans la base
            $entityManager = $doctrine->getManager();
            $entityManager->persist($freelancer);
            $entityManager->flush();

            // Rediriger après l'enregistrement
            return $this->redirectToRoute('app_login');
        }

        return $this->render('security/freelancer.html.twig');
    } 
    #[Route('/updatefreelancer/{id}', name: 'app_updatefreelancer')]
    public function updatefreelancer($id, ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger): Response
    {
        $em = $doctrine->getManager();
        $freelancer = $em->getRepository(Freelancer::class)->find($id);

        if (!$freelancer) {
            throw $this->createNotFoundException('Le freelancer n\'existe pas.');
        }

        if ($request->isMethod('POST')) {
            // Récupération manuelle des données du formulaire
            $freelancer->setNom($request->request->get('nom'));
            $freelancer->setPrenom($request->request->get('prenom'));
            $freelancer->setEmail($request->request->get('email'));
            $freelancer->setTel($request->request->get('tel'));
            $freelancer->setAdresse($request->request->get('adresse'));
            $freelancer->setDomaine($request->request->get('domaine'));
            $freelancer->setSexe($request->request->get('sexe'));

            // Gestion du fichier photo
            $imageFile = $request->files->get('photo');
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move($this->getParameter('images_directory'), $newFilename);
                    $freelancer->setPhoto($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Impossible de télécharger l’image.');
                }
            }

            // Gestion du fichier CV
            $cvFile = $request->files->get('cv');
            if ($cvFile) {
                $newFilename = uniqid() . '.' . $cvFile->guessExtension();
                try {
                    $cvFile->move($this->getParameter('images_directory'), $newFilename);
                    $freelancer->setCv($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Impossible de télécharger le CV.');
                }
            }

            $em->persist($freelancer);
            $em->flush();

            return $this->redirectToRoute('app_profilefreelancer');
        }

        // Affichage du formulaire manuel
        return $this->render('security/updatefreelancer.html.twig', [
            'freelancer' => $freelancer,
        ]);
    }

    #[Route('/deletefreelancer/{id}', name: 'app_deletefreelancer')]
    public function deletefreelancer($id, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $freelancer = $em->getRepository(Freelancer::class)->find($id);

        if (!$freelancer) {
            throw $this->createNotFoundException('Le freelancer n\'existe pas.');
        }

        $em->remove($freelancer);
        $em->flush();
        $this->addFlash('success', 'Freelancer supprimé avec succès.');

        return $this->redirectToRoute('app_profilefreelancer');
    }

}
