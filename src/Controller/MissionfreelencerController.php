<?php



namespace App\Controller;

use App\Entity\Missionfreelencer;
use App\Entity\Candidaturemission;
use App\Form\MissionfreelencerType;
use App\Repository\MissionfreelencerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\SecurityBundle\Security;

#[Route('/offrefrelencer')]
final class MissionfreelencerController extends AbstractController
{
    #[Route(name: 'app_offrefrelencer_index', methods: ['GET'])]
    public function index(MissionfreelencerRepository $MissionfreelencerRepository, Security $security): Response
    {
        $user = $security->getUser();
        $isModerateur = $user && in_array('ROLE_MODERATEUR', $user->getRoles());

        return $this->render('offrefrelencer/index.html.twig', [
            'offres' => $MissionfreelencerRepository->findAll(),
            'isModerateur' => $isModerateur,
        ]);
    }

    #[Route('/new', name: 'app_offrefrelencer_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, Security $security): Response
    {
        $user = $security->getUser();
        $isModerateur = $user && in_array('ROLE_MODERATEUR', $user->getRoles());

        $offre = new Missionfreelencer();
        $offre->setUserId($user->getUserIdentifier());

        $form = $this->createForm(MissionfreelencerType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($offre);
            $entityManager->flush();

            return $this->redirectToRoute('app_offrefrelencer_index');
        }

        return $this->render('offrefrelencer/new.html.twig', [
            'form' => $form->createView(),
            'isModerateur' => $isModerateur,
        ]);
    }

    #[Route('/{id}', name: 'app_offrefrelencer_show', methods: ['GET'])]
    public function show(Missionfreelencer $offre): Response
    {
        return $this->render('offrefrelencer/show.html.twig', [
            'offre' => $offre,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_offrefrelencer_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Missionfreelencer $offre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MissionfreelencerType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_offrefrelencer_index');
        }

        return $this->render('offrefrelencer/edit.html.twig', [
            'offre' => $offre,
            'form' => $form->createView(),
            'button_label' => 'Update',
        ]);
    }

    #[Route('/{id}', name: 'app_offrefrelencer_delete', methods: ['POST'])]
    public function delete(Request $request, Missionfreelencer $offre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offre->getId(), $request->get('_token'))) {
            $entityManager->remove($offre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_offrefrelencer_index');
    }

    #[Route('/offre/{id}', name: 'app_offre_details')]
    public function showOfferDetails(int $id, EntityManagerInterface $entityManager): Response
    {
        $utilisateur = $this->getUser();
        $candidature = $entityManager->getRepository(Candidaturemission::class)
            ->findOneBy(['utilisateur' => $utilisateur, 'mission' => $id]);

        $offreMission = $entityManager->getRepository(Missionfreelencer::class)->find($id);

        return $this->render('offrefrelencer/index.html.twig', [
            'offre' => $offreMission,
            'candidature' => $candidature,
        ]);
    }

    #[Route('/candidature/{id}', name: 'app_consulter_candidature', methods: ['GET'])]
    public function consulterCandidature(int $id, EntityManagerInterface $entityManager): Response
    {
        $candidature = $entityManager->getRepository(Candidaturemission::class)->find($id);

        if (!$candidature) {
            $this->addFlash('error', 'Candidature non trouvée.');
            return $this->redirectToRoute('app_lister_toutes_candidatures');
        }

        return $this->render('candidature/voir_candidatures.html.twig', [
            'candidature' => $candidature,
        ]);
    }

    #[Route('/offre/publier/{id}', name: 'app_offre_publier')]
    public function publierOffre(Missionfreelencer $offre, EntityManagerInterface $entityManager): Response
    {
        $offre->setDate(new \DateTimeImmutable());
        $entityManager->persist($offre);
        $entityManager->flush();

        $this->addFlash('success', 'L\'offre a été publiée avec succès.');

        return $this->redirectToRoute('app_offrefrelencer_index');
    }
}
