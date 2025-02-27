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
use phpDocumentor\Reflection\Types\Void_;
use App\Entity\BlockedUser;

class ForumController extends AbstractController
{
    //$user = $this->getUser();
    //if ($user) {
    //           $id=$user->getId();
    //           $pic=$user->getPic();
    //           } else {
    //            throw $this->createAccessDeniedException('You must be logged in to create a discussion.');
    //}
    
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

        #if ($blockedUserRepo->findOneBy(['userId' => $userId])) {
        #    return $this->json(['error' => 'You are blocked from posting discussions.'], 403);
        #}
        //BLOCKED USERS
        $badWords = ['badword1', 'badword2', 'badword3'];
        $content = $request->request->get('content');
        foreach ($badWords as $badWord) {
            if (stripos($content, $badWord) !== false) {
                // Block the user
                $blockedUser = new BlockedUser();
                $blockedUser->setUserId(1);
                $manager->persist($blockedUser);
                $manager->flush();

                return $this->json(['error' => 'You used inappropriate language and have been blocked.'], 403);
            }
        }
        //BLOCKED USERS 

        
    
        // $Discussion->setUserId($id);
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
    public function updateDiscussion(ManagerRegistry $m, Request $request,DiscussionRepository $discussionRepository,$id): Response
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
    #[Route('/AddLike/{id}', name: 'app_AddLike')]
    public function AddLike(DiscussionRepository $discussionRepository,$id): Response
    {
        $discussion = $discussionRepository->find($id);

        $discussionRepository->AddLike($discussion);

        return $this->redirectToRoute('app_forum');
    }

    #[Route('/UnAddLike/{id}', name: 'app_UnAddLike')]
    public function UnAddLike(DiscussionRepository $discussionRepository,$id): Response
    {
        $discussion = $discussionRepository->find($id);

        $discussionRepository->removeLike($discussion);

        return $this->redirectToRoute('app_forum');
    }


    #[Route('/AddDisLike/{id}', name: 'app_AddDisLike')]
    public function AddDisLike(DiscussionRepository $discussionRepository,$id): Response
    {
        $discussion = $discussionRepository->find($id);

        $discussionRepository->addDislike($discussion);

        return $this->redirectToRoute('app_forum');
    }
    #[Route('/UnAddDisLike/{id}', name: 'app_UnAddDisLike')]
    public function UnAddDisLike(DiscussionRepository $discussionRepository,$id): Response
    {
        $discussion = $discussionRepository->find($id);

        $discussionRepository->removeDislike($discussion);

        return $this->redirectToRoute('app_forum');
    }

    #[Route('/discussion/stats', name: 'discussion_stats', methods: ['GET'])]
    public function discussionStats(DiscussionRepository $discussionRepository): Response
    {
        $totalDiscussions = $discussionRepository->getTotalDiscussions();
        $topLikedDiscussions =$discussionRepository->getTopLikedDiscussions(5);
        $topRepliedDiscussions =$discussionRepository->getTopRepliedDiscussions(5);

        return $this->render('forum/stats.html.twig', [
            'totalDiscussions' => $totalDiscussions,
            'topLikedDiscussions' => $topLikedDiscussions,
            'topRepliedDiscussions' => $topRepliedDiscussions
        ]);
    }
}
