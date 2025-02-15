<?php

namespace App\Controller;

use App\Entity\Candidature;
use App\Entity\Offre;
use App\Form\CandidatureaddType;
use App\Form\CandidatureType;
use App\Repository\CandidatureRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CandidatureController extends AbstractController
{
    #[Route('/candidature', name: 'app_candidature')]
    public function index(CandidatureRepository $rep): Response
    {
        $candidature= $rep->findAll();
        return $this->render('candidature/index.html.twig', [
            'tabcandidature' => $candidature,
        ]);
    }

    #[Route('/showcandidature', name: 'app_showcandidature')]
    public function showcandidature(CandidatureRepository $rep): Response
    {
        //$user = $security->getUser();

        //if (!$user) {
          //  throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à vos offres.');
        //}
        //$candidature = $candidatureRepository->findBy(['user' => $user]);
        $candidature= $rep->findAll();
        return $this->render('candidature/showcandidature.html.twig', [
            'tabcandidature' => $candidature,
        ]);
    }
    #[Route('/addcandidature/{id}', name: 'app_addcandidature')]

    public function addcandidature(ManagerRegistry $m, Request $req ,int $id): Response
    {
        $em = $m->getManager();
        $offre = $em->getRepository(Offre::class)->find($id);
        if (!$offre) {
        throw $this->createNotFoundException('Offre not found');
        }
        $candidature = new Candidature();
        $candidature->setStatut('en attente'); 
        $form = $this->createForm(CandidatureaddType::class, $candidature);
        $form->handleRequest($req);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($candidature);
            $em->flush();
            return $this->redirectToRoute('app_showcandidature');
        }

        return $this->render('candidature/addcandidature.html.twig', [
            'addform' => $form,
        ]);
    }


    #[Route('/updatecandidature/{id}', name: 'app_updatecandidature')]
    public function updatecandidature(ManagerRegistry $m, Request $req, $id, CandidatureRepository $rep): Response
    {
        $em = $m->getManager();
        $candidature = $rep->find($id);
        $form = $this->createForm(CandidatureType::class, $candidature);
        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($candidature);
            $em->flush();
            return $this->redirectToRoute('app_showcandidature');
        }
        return $this->render('candidature/updatecandidature.html.twig', [
            'addform' => $form,]);
        }   


    #[Route('/deletecandidature/{id}', name: 'app_deletecandidature')]
    public function deletecandidature(ManagerRegistry $m, $id, CandidatureRepository $rep): Response
    {
        $em = $m->getManager();
        $b = $rep->find($id);
        $em->remove($b);
        $em->flush();
        return $this->redirectToRoute('app_showcandidature');
    }
}
