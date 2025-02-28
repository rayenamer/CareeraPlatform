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
use Symfony\Bundle\SecurityBundle\Security;
use App\Entity\User;
use App\Entity\Chercheur;
use App\Entity\Freelancer;
use App\Repository\UserRepository;
final class MessageController extends AbstractController
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

    #[Route('/messages/{messager2Id}', name: 'get_conversation', methods: ['GET'])]
public function getConversation(
    Security $security, 
    string $messager2Id, 
    MessageRepository $messageRepository,
    UserRepository $userrep
): Response {
    $user = $this->getAuthUser($security);

    // Vérification que l'utilisateur est bien connecté
    if (!$user) {
        return $this->redirectToRoute('app_login'); 
    }

    $messager1Id = $user->getId();

    // Vérification que le destinataire existe
    $UserReceiver = $userrep->find($messager2Id);
    if (!$UserReceiver) {
        $this->addFlash('error', 'Le destinataire n\'existe pas.');
        return $this->redirectToRoute('app_login'); // Rediriger vers une page d'accueil ou une liste d'utilisateurs
    }

    // Récupération des messages entre les deux utilisateurs
    $messages = $messageRepository->createQueryBuilder('m')
    ->where('(m.messager1 = :messager1 AND m.messager2 = :messager2) OR (m.messager2 = :messager1 AND m.messager1 = :messager2)')
    ->setParameter('messager1', $messager1Id)
    ->setParameter('messager2', $messager2Id)
    ->orderBy('m.createdAt', 'ASC')
    ->getQuery()
    ->getResult();

    dump($messages);


    // Création du formulaire pour envoyer un message
    $NewMessage = $this->createForm(MessageType::class, new Message());

    return $this->render('message/index.html.twig', [
        'messager1Id' => $messager1Id,
        'messager2Id' => $messager2Id,
        'messages' => $messages,
        'NewMessage' => $NewMessage->createView(),
    ]);
}

#[Route('/send/{messager2Id}', name: 'send_message', methods: ['POST'])]
    public function sendMessage(
        string $messager2Id,
        Request $request,
        ManagerRegistry $m,
        Security $security,
        UserRepository $userrep,
    ): Response {
        $user = $this->getAuthUser($security);
        $messager1Id = $user->getId();
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }


        $messager1Id = $user->getId();

        
        if ($user->getId() == $messager2Id) {
            $this->addFlash('error', 'Vous ne pouvez pas vous envoyer un message à vous-même.');
            return $this->redirectToRoute('get_conversation', ['messager2Id' => $messager2Id]);
        }
        $UserReceiver = $userrep->find($messager2Id);

       
        $UserPicReceiver = ($UserReceiver instanceof Chercheur || $UserReceiver instanceof Freelancer) ? $UserReceiver->getPhoto() : 'img/default-avatar.jpg';

        // Récupération des informations de l'utilisateur connecté
        $UserNameSender = $user->getPrenom();
        $UserPicSender = ($user instanceof Chercheur || $user instanceof Freelancer) ? $user->getPhoto() : 'img/default-avatar.jpg';

        // Création du message
        $manager = $m->getManager();
        $message = new Message();
        $message->setMessager1( $messager1Id); 
        $message->setMessager2( $messager2Id); 
        $message->setCreatedAt(new \DateTimeImmutable());
        $message->setUserNameSender($UserNameSender);
        $message->setUserPhotoSender($UserPicSender); 

        // Création et gestion du formulaire
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $manager->persist($message);
                $manager->flush();
                $this->addFlash('success', 'Message envoyé avec succès.');
            } catch (\Exception $e) {
                dump($e->getMessage());
                $this->addFlash('error', 'Une erreur est survenue lors de l\'envoi du message.');
            }

            return $this->redirectToRoute('get_conversation', ['messager2Id' => $messager2Id]);
        }
    


        $this->addFlash('error', 'Erreur lors de l\'envoi du message.');
        return $this->redirectToRoute('get_conversation', ['messager2Id' => $messager2Id]);
    }






}
