<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Psr\Log\LoggerInterface;

class ChatbotController extends AbstractController
{
    #[Route('/chatbot', name: 'chatbot_page', methods: ['GET'])]
    public function chatbotPage(): Response
    {
        return $this->render('chatbot/index.html.twig');
    }

    #[Route('/chatbot/api', name: 'chatbot_api', methods: ['POST'])]
    public function api(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $userInput = $data['question'] ?? '';

        // Process the input to generate the response
        $response = $this->chatbotResponse($userInput);

        return new JsonResponse(['answer' => $response]);
    }

    private function chatbotResponse(string $userInput): string
    {
        $userInput = strtolower($userInput); // Convert input to lowercase for case-insensitive comparison

        if (strpos($userInput, 'hi') !== false) {
            return 'Hello, how can I help you?';
        } elseif (strpos($userInput, 'i want u to help me') !== false) {
            return 'Just give me your question.';
        } else {
            return 'Sorry, I didn\'t understand that. Can you ask something else?';
        }
    }
}