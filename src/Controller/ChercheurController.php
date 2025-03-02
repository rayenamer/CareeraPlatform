<?php

namespace App\Controller;

use App\Entity\Chercheur;
use App\Entity\JeuneSeniorDiplome;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\ManagerRegistry as DoctrineManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class ChercheurController extends AbstractController
{ 
    #[Route('/profilechercheur', name: 'app_chercheurprofile')]
public function profile(ManagerRegistry $doctrine, Security $security): Response
{
    // Récupère l'utilisateur connecté
    $user = $security->getUser();

    // Vérifie si un utilisateur est connecté et s'il est un Chercheur
    if (!$user instanceof Chercheur) {
        return $this->redirectToRoute('app_login');  // Redirige vers la page de login si l'utilisateur n'est pas un Chercheur
    }

    // Récupère le profil du Chercheur depuis la base de données
    $profile = $doctrine->getRepository(Chercheur::class)->find($user->getId());

    // Vérifie si le profil existe
    if (!$profile) {
        throw $this->createNotFoundException('Profil de Chercheur non trouvé');
    }

    // Rendu du profil de l'utilisateur Chercheur
    return $this->render('security/profilechercheur.html.twig', [
        'tabprofile' => $profile,
    ]);
}

    #[Route('/chercheur', name: 'app_chercheur')]
    public function index(ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger): Response
    {
        // Créer une instance de JeuneSeniorDiplome
        $jeuneSenior = new Chercheur();
      

        // Gérer la soumission du formulaire
        if ($request->isMethod('POST')) {
            // Récupérer les données depuis la requête
            $jeuneSenior->setNom($request->request->get('nom'));
            $jeuneSenior->setPrenom($request->request->get('prenom'));
            $jeuneSenior->setTel($request->request->get('tel'));
            $jeuneSenior->setEmail($request->request->get('email'));
            $jeuneSenior->setDomaine($request->request->get('domaine'));
            $jeuneSenior->setSexe($request->request->get('sexe'));

            // Gestion du mot de passe
            $password = $request->request->get('password');
            if ($password) {
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
                $jeuneSenior->setPassword($hashedPassword);
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
                    $jeuneSenior->setPhoto($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Impossible de télécharger l’image.');
                }
            }

            // Gérer l'upload du CV
            $cvFile = $request->files->get('cv');
            if ($cvFile) {
                $newFilename = uniqid().'.'.$cvFile->guessExtension();
                $cvFile->move($this->getParameter('images_directory'), $newFilename);
                $jeuneSenior->setCv($newFilename);
            }

            // Sauvegarder les données dans la base
            $entityManager = $doctrine->getManager();
            $entityManager->persist($jeuneSenior);
            $entityManager->flush();

            // Rediriger après l'enregistrement
            return $this->redirectToRoute('app_login');
        }

        return $this->render('security/chercheur.html.twig');
    }  

   
    #[Route('/updatechercheur/{id}', name: 'app_updatechercheur')]
    public function updatechercheur($id, ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger): Response
    {
        $em = $doctrine->getManager();
        $chercheur = $em->getRepository(Chercheur::class)->find($id);

        if (!$chercheur) {
            throw $this->createNotFoundException('Le chercheur n\'existe pas.');
        }

        if ($request->isMethod('POST')) {
            // Récupération manuelle des données du formulaire
            $chercheur->setNom($request->request->get('nom'));
            $chercheur->setPrenom($request->request->get('prenom'));
            $chercheur->setEmail($request->request->get('email'));
            $chercheur->setTel($request->request->get('tel'));
           
            $chercheur->setDomaine($request->request->get('domaine'));
            $chercheur->setSexe($request->request->get('sexe'));

            // Gestion du fichier photo
            $imageFile = $request->files->get('photo');
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
            }

            // Gestion du fichier CV
            $cvFile = $request->files->get('cv');
            if ($cvFile) {
                $newFilename = uniqid() . '.' . $cvFile->guessExtension();
                try {
                    $cvFile->move($this->getParameter('images_directory'), $newFilename);
                    $chercheur->setCv($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Impossible de télécharger le CV.');
                }
            }

            $em->persist($chercheur);
            $em->flush();

            return $this->redirectToRoute('app_chercheurprofile');
        }

        // Affichage du formulaire manuel
        return $this->render('security/updatechercheur.html.twig', [
            'chercheur' => $chercheur,
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

        return $this->redirectToRoute('app_chercheurprofile');
    }
    
}
