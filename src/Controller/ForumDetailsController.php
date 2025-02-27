<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\DiscussionType;
use App\Form\ReplyType;
use App\Repository\DiscussionRepository;
use App\Repository\ReplyRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Reply;

final class ForumDetailsController extends AbstractController
{
    #[Route('/forum/details/{id}', name: 'app_forum_details')]
    public function index(
        Request $request, ReplyRepository $replyRepository, DiscussionRepository $discussionRepository, $id
    ): Response {
        $Discussion = $discussionRepository->find($id);

        if (!$Discussion) {
            throw $this->createNotFoundException('Discussion not found.');
        }

        $Replies = $Discussion->getReplies(); // Get replies associated with the discussion

        $NewReply = $this->createForm(ReplyType::class);
        $NewReply->handleRequest($request);

        return $this->render('forum_details/index.html.twig', [
            'controller_name' => 'ForumDetailsController',
            'Discussion' => $Discussion,
             'Replies' => $Replies,
             'NewReply' => $NewReply->createView(),
            ]);
    }


    #[Route('/addReply/{id}', name: 'app_addReply')]
public function AddReply(
    Request $request, 
    ReplyRepository $replyRepository, 
    DiscussionRepository $discussionRepository, 
    $id,
    ManagerRegistry $m
): Response {
    $manager = $m->getManager();
    $Reply = new Reply();

    // Simulate a user (replace with actual authentication later)
    $Reply->setUserId(1);

    // Set created timestamp
    $Reply->setCreatedAt(new \DateTimeImmutable('now', new \DateTimeZone('UTC')));

    // Fetch the discussion by ID
    $Discussion = $discussionRepository->find($id);
    if (!$Discussion) {
        throw $this->createNotFoundException('Discussion not found.');
    }


    // Create and handle form submission
    $NewReply = $this->createForm(ReplyType::class, $Reply);
    $NewReply->handleRequest($request);

    if ($NewReply->isSubmitted() && $NewReply->isValid()) {
        // Ensure the reply is linked to the discussion
        $Reply->setDiscussion($Discussion);
        
        // Add the reply to the discussion (if needed)
        $Discussion->addReply($Reply);
        
        // Persist and save changes
        $manager->persist($Reply);
        $manager->persist($Discussion); // Ensure the discussion update is tracked
        $manager->flush();
    
        return $this->redirectToRoute('app_forum_details', ['id' => $Discussion->getId()]);
    }
    

    return $this->render('forum_details/index.html.twig', [
        'controller_name' => 'ForumDetailsController',
        'NewReply' => $NewReply->createView(),
        'Replies' => $Discussion->getReplies(),
    ]);
}

    

   #[Route('/DeleteReply/{discussionId}/{replyId}', name: 'app_deleteReply')]
   public function deleteReply(
       ReplyRepository $replyRepository, 
       DiscussionRepository $discussionRepository, 
       $discussionId, 
       $replyId, 
       ManagerRegistry $m
   ): Response {
       $manager = $m->getManager();
       $Discussion = $discussionRepository->find($discussionId);
       $Reply = $replyRepository->find($replyId);
       
        if (!$Reply) {
            throw $this->createNotFoundException('Reply not found.');
        }

       $Discussion->removeReply($Reply);
       $manager->flush();
       return $this->redirectToRoute('app_forum_details', ['id' => $Discussion->getId()]);
   }

   #[Route('/UpdateReply/{discussionId}/{replyId}', name: 'app_UpdateReply')]

   public function UpdateReply(
    ReplyRepository $replyRepository, 
    DiscussionRepository $discussionRepository, 
    $discussionId, 
    $replyId, 
    Request $request, 
    ManagerRegistry $m
): Response {
    $manager = $m->getManager();

    // Fetch the discussion and the reply by their respective IDs
    $Discussion = $discussionRepository->find($discussionId);
    $Reply = $replyRepository->find($replyId);

    if (!$Discussion || !$Reply) {
        throw $this->createNotFoundException('Discussion or Reply not found.');
    }

    // Create and handle the form
    $UpdateReply = $this->createForm(ReplyType::class, $Reply);
    $UpdateReply->handleRequest($request);

    // Check if the form is submitted and valid
    if ($UpdateReply->isSubmitted() && $UpdateReply->isValid()) {
        $manager->persist($Reply);
        $manager->flush();

        return $this->redirectToRoute('app_forum_details', ['id' => $Discussion->getId()]);
    }

    return $this->render('forum_details/UpdateReply.html.twig', [
        'controller_name' => 'ForumDetailsController',
        'UpdateReply' => $UpdateReply->createView(),
        'Discussion' => $Discussion,
        'Reply' => $Reply,
    ]);
}
    #[Route('/AddLikeToReply/{id}', name: 'app_AddLikeToReply')]
    public function AddLike(ReplyRepository $replyRepository,$id): Response
    {
        $Reply = $replyRepository->find($id);
        
        $Discussion = $Reply->getDiscussion();

        $replyRepository->AddLike($Reply);

        return $this->redirectToRoute('app_forum_details', ['id' => $Discussion->getId()]);
  
    }
    #[Route('/UnAddDisLikeToReply/{id}', name: 'app_UnAddDisLikeToReply')]
    public function UnAddDisLike(ReplyRepository $replyRepository,$id): Response
    {
        $Reply = $replyRepository->find($id);
        
        $Discussion = $Reply->getDiscussion();

        $replyRepository->AddDisLike($Reply);

        return $this->redirectToRoute('app_forum_details', ['id' => $Discussion->getId()]);
        
    }

    #[Route('/AddDisLikeToReply/{id}', name: 'app_AdddisLikeToReply')]
    public function AddDisLike(ReplyRepository $replyRepository,$id): Response
    {
        $Reply = $replyRepository->find($id);
        
        $Discussion = $Reply->getDiscussion();

        $replyRepository->AddDisLike($Reply);

        return $this->redirectToRoute('app_forum_details', ['id' => $Discussion->getId()]);
  
    }


}






