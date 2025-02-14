<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Entity\TypeContrat;
use App\Form\OffreType;
use App\Repository\OffreRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OffremodController extends AbstractController
{

#[Route('/offremod', name: 'app_offremod')]
    public function index(OffreRepository $rep): Response
    {
        $offres = $rep->findAll();
        return $this->render('offre/offremod.html.twig', [
            'taboffre' => $offres,
        ]);
    }

        // #[Route('/offremod', name: 'app_offremod')]
    // public function index(OffreRepository $offreRepository, Security $security): Response
    // {
    //     // Récupérer l'utilisateur courant
    //     $user = $security->getUser();
    //
    //     // Vérifier si l'utilisateur est authentifié
    //     if (!$user) {
    //         throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à vos offres.');
    //     }
    //
    //     // Récupérer les offres de l'utilisateur courant
    //     $offres = $offreRepository->findBy(['user' => $user]);
    //
    //     // Passer les offres à la vue
    //     return $this->render('offre/offremod.html.twig', [
    //         'offres' => $offres,
    //     ]);
    // }
    #[Route('/ajoutoffre', name: 'app_ajoutoffre')]
    public function ajoutoffre(ManagerRegistry $doctrine, Request $req): Response
{
    $offre = new Offre();
    $form = $this->createForm(OffreType::class, $offre);
    $form->handleRequest($req);

    if ($form->isSubmitted() && $form->isValid()) {
        $typeContrat = $doctrine->getRepository(TypeContrat::class)->findOneBy(['nom' => 'Stage']);

        if (!$typeContrat) {
            $this->addFlash('error', "Le TypeContrat 'Stage' est introuvable.");
            return $this->redirectToRoute('offre_ajout'); // Redirige vers la même page ou une autre route
        }
        $offre->setTypecontrat($typeContrat);
        $image = $req->files->get('image');

        if ($image) {
            // Gérer le téléchargement de l'image
            $filename = uniqid() . '.' . $image->guessExtension();
            $image->move($this->getParameter('upload_directory'), $filename);
            $offre->setImage($filename);
        } else {
            // Définir une valeur par défaut
            $offre->setImage('default.png'); // Assurez-vous que cette image existe
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
    public function modifoffre(ManagerRegistry $m, Request $req, $id, OffreRepository $rep): Response
    {
        $em = $m->getManager();
        $offre = $rep->find($id);
        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($offre);
            $em->flush();
            return $this->redirectToRoute('app_offremod');
        }
        return $this->render('offre/modifoffre.html.twig', [
            'addform' => $form,]);
        }   
        
    #[Route('/supprimeroffre/{id}.html', name: 'app_supprimeroffre')]
    public function supprimeroffre(ManagerRegistry $m, Request $req, $id, OffreRepository $rep): Response
    {
        $em = $m->getManager();
        $offre = $rep->find($id);
        $em->remove($offre);
        $em->flush();
        return $this->redirectToRoute('app_offremod');
    }
}
