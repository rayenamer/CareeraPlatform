<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ChatbotController extends AbstractController
{
    #[Route("/chatbot", name: "chatbot", methods: ["GET", "POST"])]
    public function chatbot(Request $request)
    {
        // If it's a POST request (for chat interaction)
        if ($request->isMethod('POST')) {
            // Get the user question from the POST request data (JSON body)
            $data = json_decode($request->getContent(), true);  // Decode JSON payload
            $question = $data['question'] ?? '';  // Safely access the 'question' key

            // Call the Python script to get the response
            $output = $this->getChatbotResponse($question);

            // Return the chatbot's response as a JSON response
            return new JsonResponse(['answer' => $output]);
        }

        // If it's a GET request, render the chatbot page
        return $this->render('chatbot/index.html.twig');
    }

    private function getChatbotResponse($question)
    {
        // Define the Python script path and the command to execute
        $pythonScript = '/python/chatbot.py';  // Make sure the path is correct
        $command = escapeshellcmd("python3 $pythonScript \"$question\"");
        
        // Execute the command and get the result
        $output = shell_exec($command);
        
        return $output;
    }
}
