<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\DiscussionType;
use App\Form\ReplyType;
use Symfony\Component\HttpFoundation\Request;

final class ForumDetailsController extends AbstractController
{
    #[Route('/forum/details', name: 'app_forum_details')]
    public function index(Request $request): Response
    {
        $NewReply = $this->createForm(ReplyType::class);

        $NewReply->handleRequest($request);

        if ($NewReply->isSubmitted() && $NewReply->isValid()) {
            $this->addFlash('success', 'Discussion created successfully!');
            return $this->redirectToRoute('app_forum');
        }

        return $this->render('forum_details/index.html.twig', [
            'controller_name' => 'ForumDetailsController',
            'NewReply' => $NewReply->createView(),
        ]);
    }
}
