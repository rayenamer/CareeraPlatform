<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\DiscussionType;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Discussion;
use App\Repository\DiscussionRepository;
use App\Repository\ReplyRepository;

class ForumController extends AbstractController
{
    #[Route('/forum', name: 'app_forum')]
    public function index(Request $request, DiscussionRepository $repDiscussion): Response
    {
    $Discussion = new Discussion(); // Ensure form is bound to an entity
    $NewDiscussion = $this->createForm(DiscussionType::class, $Discussion);

    $Discussions = $repDiscussion->findAll();

    return $this->render('forum/index.html.twig', [
        'controller_name' => 'ForumController',
        'NewDiscussion' => $NewDiscussion->createView(),
        'Discussions' => $Discussions
    ]);
    }

    #[Route('/addDiscussion', name: 'app_addDiscussion')]
    public function addDiscussion(ManagerRegistry $m, Request $request,DiscussionRepository $repDiscussion): Response
    {
        $manager = $m->getManager();
        $Discussion = new Discussion();
        $Discussions = $repDiscussion->findAll();

        //$user = $this->getUser();
        //if ($user) {
        //    $Discussion->setUserId($user->getId());
        //} else {
        //     throw $this->createAccessDeniedException('You must be logged in to create a discussion.');
        //}

    
        $Discussion->setUserId(1);  // Set user ID, adjust accordingly
        $Discussion->setCreatedAt(new \DateTimeImmutable('now', new \DateTimeZone('UTC')));
    
        // Create the form
        $NewDiscussion = $this->createForm(DiscussionType::class, $Discussion);
        $NewDiscussion->handleRequest($request);
        dump($Discussion);
    
        // Check if form is submitted and valid
        if ($NewDiscussion->isSubmitted() && $NewDiscussion->isValid()) {
            $manager->persist($Discussion);
            $manager->flush();  // Persist to DB
    
            // Redirect after successful submission
            return $this->redirectToRoute('app_forum');
        }
        else {
            dump($NewDiscussion->getErrors(true, false));  
        }
    
        // Render form view if not submitted or invalid
        return $this->render('forum/index.html.twig', [
            'controller_name' => 'ForumController',
            'NewDiscussion' => $NewDiscussion->createView(),
            'Discussions' => $Discussions,
        ]);
    }

    #[Route('/DeleteDiscussion/{id}', name: 'app_deleteDiscussion')]
    public function deleteDiscussion(ManagerRegistry $m, Request $request,DiscussionRepository $discussionRepository,ReplyRepository $replyRepository,$id): Response
    {
        $manager=$m->getManager();
    
        $discussion = $discussionRepository->find($id);


        if (!$discussion) {
            throw $this->createNotFoundException('Discussion not found');
        }

        $replies = $replyRepository->findBy(['Discussion' => $discussion]);

        foreach ($replies as $reply){
            $manager->remove($reply);
        }

        $manager->remove($discussion);
        $manager->flush();
        return $this->redirectToRoute('app_forum');
    }
    
    #[Route('/UpdateDiscussion/{id}', name: 'app_updateDiscussion')]
    public function updateformauthors(ManagerRegistry $m, Request $request,DiscussionRepository $discussionRepository,$id): Response
    {
        $manager=$m->getManager();
    
        $discussion = $discussionRepository->find($id);
        $Discussions = $discussionRepository->findAll();

        if (!$discussion) {
            throw $this->createNotFoundException('Discussion not found');
        }

        
        $UpdateDiscussion = $this->createForm(DiscussionType::class, $discussion);

        
        $UpdateDiscussion->handleRequest($request);

        if ($UpdateDiscussion->isSubmitted() && $UpdateDiscussion->isValid()) {
            $manager->persist($discussion);

            $manager->flush();  

            return $this->redirectToRoute('app_forum');
        }
        return $this->render('forum/UpdateDiscussion.html.twig', [
            'controller_name' => 'ForumController',
            'UpdateDiscussion' => $UpdateDiscussion->createView(),
            'discussion' => $discussion,
        ]);
    }
}
