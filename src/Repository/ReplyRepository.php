<?php

namespace App\Repository;

use App\Entity\Reply;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

use Doctrine\ORM\EntityManagerInterface;

/**
 * @extends ServiceEntityRepository<Reply>
 */
class ReplyRepository extends ServiceEntityRepository
{
    private EntityManagerInterface $entityManager; 
    public function __construct(ManagerRegistry $registry,EntityManagerInterface $entityManager)
    {
        parent::__construct($registry, Reply::class);
        $this->entityManager = $entityManager;
    }

    public function addLike(Reply $relply): void
    {
        $relply->setLikes($relply->getLikes() + 1);
        $this->entityManager->persist($relply);
        $this->entityManager->flush();
    }

    public function removeLike(Reply $relply): void
    {
        $relply->setLikes(max(0, $relply->getLikes() - 1));
        $this->entityManager->persist($relply);
        $this->entityManager->flush();
    }

    public function addDislike(Reply $relply): void
    {
        $relply->setDislikes($relply->getDislikes() + 1);
        $this->entityManager->persist($relply);
        $this->entityManager->flush();
    }

    public function removeDislike(Reply $relply): void
    {
        $relply->setDislikes(max(0, $relply->getDislikes() - 1));
        $this->entityManager->persist($relply);
        $this->entityManager->flush();
    }
}
