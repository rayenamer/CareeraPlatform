<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Message;
use App\Repository\MessageRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Form\MessageType;
use Doctrine\Persistence\ManagerRegistry;
final class MessageController extends AbstractController
{

#[Route('/messages/{messager1Id}/{messager2Id}', name: 'get_conversation', methods: ['GET'])]
public function getConversation(string $messager1Id, string $messager2Id, MessageRepository $messageRepository): Response
{
    $messages = $messageRepository->createQueryBuilder('m')
        ->where('(m.messager1 = :messager1Id AND m.messager2 = :messager2Id)')
        ->orWhere('(m.messager2 = :messager2Id AND m.messager1 = :messager1Id)')
        ->setParameter('messager1Id', $messager1Id)
        ->setParameter('messager2Id', $messager2Id)
        ->orderBy('m.createdAt', 'ASC')
        ->getQuery()
        ->getResult();

    $NewMessage = $this->createForm(MessageType::class);

    return $this->render('message/index.html.twig', [
        'messager1Id' => $messager1Id,
        'messager2Id' => $messager2Id,
        'messages' => $messages,
        'controller_name' => 'MessageController',
        'NewMessage'=> $NewMessage->createView(),
    ]);
}
#[Route('/send/{messager1Id}/{messager2Id}', name: 'send_message', methods: ['POST'])]
    public function sendMessage(
        string $messager1Id,
        string $messager2Id,
        Request $request,
        ManagerRegistry $m
    ): Response {
        $manager = $m->getManager();
        $message = new Message();
        $message->setMessager1($messager1Id); // Set sender

        // Create the form
        $form = $this->createForm(MessageType::class, $message);

        // Handle the form submission
        $form->handleRequest($request);

        // If the form is submitted and valid
        if ($form->isSubmitted() && $form->isValid()) {
            $message->setMessager2($messager2Id); // Set receiver
            $message->setCreatedAt(new \DateTimeImmutable()); // Set timestamp

           
            $manager->persist($message);
            $manager->flush();

            // Redirect back to the conversation page
            return $this->redirectToRoute('get_conversation', [
                'messager1Id' => $messager1Id,
                'messager2Id' => $messager2Id,
            ]);
        }

        // Redirect to the conversation page if form submission failed
        return $this->redirectToRoute('get_conversation', [
            'messager1Id' => $messager1Id,
            'messager2Id' => $messager2Id,
        ]);
    }

}
