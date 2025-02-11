<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\DiscussionType;

final class ForumController extends AbstractController
{
    #[Route('/forum', name: 'app_forum')]
    public function index(Request $request): Response
    {

        $NewDiscussion = $this->createForm(DiscussionType::class);

        $NewDiscussion->handleRequest($request);

        if ($NewDiscussion->isSubmitted() && $NewDiscussion->isValid()) {
            $this->addFlash('success', 'Discussion created successfully!');
            return $this->redirectToRoute('app_forum');
        }

        // Ensure that the form variable is passed correctly to the template
        return $this->render('forum/index.html.twig', [
            'controller_name' => 'ForumController',
            'NewDiscussion' => $NewDiscussion->createView(),
        ]);
    }

    


}
