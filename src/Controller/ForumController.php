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
use Symfony\Component\VarDumper\VarDumper;
use Symfony\Bundle\SecurityBundle\Security;
use App\Entity\User;
use App\Entity\Chercheur;
use App\Entity\Freelancer;

class ForumController extends AbstractController
{
    public function getAuthUser(Security $security): ?User
    {
        $user = $security->getUser();
    
        if (!$user) {
            return null; 
        }
    
        if (!$user instanceof User) {
            return null; 
        }
    
        return $user;
    }
    
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
    public function addDiscussion(ManagerRegistry $m, Request $request,DiscussionRepository $repDiscussion,Security $security): Response
    {
        $user = $this->getAuthUser($security); 

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
        $Discussion->setUserId($user->getId());  // Set user ID, adjust accordingly
        $Discussion->setCreatedAt(new \DateTimeImmutable('now', new \DateTimeZone('UTC')));
        $Discussion->setUserName($user->getPrenom());

        if ($user instanceof Chercheur || $user instanceof Freelancer) {
            $Discussion->setUserPhoto($user->getPhoto());
        } 
        
        
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
    public function deleteDiscussion(
        Security $security,
        ManagerRegistry $m,
        Request $request,
        DiscussionRepository $discussionRepository,
        ReplyRepository $replyRepository,
        $id
    ): Response {
        // Get the authenticated user
        $user = $this->getAuthUser($security);

        // Get the manager to handle the database operations
        $manager = $m->getManager();

        // Find the discussion by ID
        $discussion = $discussionRepository->find($id);

        // Check if the discussion exists
        if (!$discussion) {
            throw $this->createNotFoundException('Discussion not found');
        }

        // Check if the authenticated user is the owner of the discussion
        if ($discussion->getUserId() !== $user->getId()) {
            // User is not the owner, return a response or redirect
            return $this->redirectToRoute('app_forum')->setStatusCode(403);
        }

        // Find all replies related to this discussion
        $replies = $replyRepository->findBy(['Discussion' => $discussion]);

        // Remove the replies
        foreach ($replies as $reply) {
            $manager->remove($reply);
        }

        // Remove the discussion
        $manager->remove($discussion);
        $manager->flush();

        // Redirect to the forum after successful deletion
        return $this->redirectToRoute('app_forum');
    }


    #[Route('/UpdateDiscussion/{id}', name: 'app_updateDiscussion')]
    public function updateDiscussion(
        Security $security,
        ManagerRegistry $m,
        Request $request,
        DiscussionRepository $discussionRepository,
        $id
    ): Response {
        // Get the authenticated user
        $user = $this->getAuthUser($security);
    
        // Get the manager to handle the database operations
        $manager = $m->getManager();
    
        // Find the discussion by ID
        $discussion = $discussionRepository->find($id);
    
        // Check if the discussion exists
        if (!$discussion) {
            throw $this->createNotFoundException('Discussion not found');
        }
    
        // Check if the authenticated user is the owner of the discussion
        if ($discussion->getUserId() !== $user->getId()) {
            // User is not the owner, return a response or redirect
            return $this->redirectToRoute('app_forum')->setStatusCode(403);
        }
    
        // Create the form to update the discussion
        $updateDiscussion = $this->createForm(DiscussionType::class, $discussion);
    
        // Handle the form submission
        $updateDiscussion->handleRequest($request);
    
        // Check if the form was submitted and is valid
        if ($updateDiscussion->isSubmitted() && $updateDiscussion->isValid()) {
            // Persist and flush the updated discussion
            $manager->persist($discussion);
            $manager->flush();
        
            // Redirect to the forum after the update
            return $this->redirectToRoute('app_forum');
        }
    
        // Render the form to update the discussion
        return $this->render('forum/UpdateDiscussion.html.twig', [
            'controller_name' => 'ForumController',
            'UpdateDiscussion' => $updateDiscussion->createView(),
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
