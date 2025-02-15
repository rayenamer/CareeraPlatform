<?php

namespace App\Repository;

use App\Entity\Discussion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @extends ServiceEntityRepository<Discussion>
 */
class DiscussionRepository extends ServiceEntityRepository
{
    private EntityManagerInterface $entityManager; 
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $entityManager)
    {
        parent::__construct($registry, Discussion::class);
        $this->entityManager = $entityManager;
    }

    public function addLike(Discussion $discussion): void
    {
        $discussion->setLikes($discussion->getLikes() + 1);
        $this->entityManager->persist($discussion);
        $this->entityManager->flush();
    }

    public function removeLike(Discussion $discussion): void
    {
        $discussion->setLikes(max(0, $discussion->getLikes() - 1));
        $this->entityManager->persist($discussion);
        $this->entityManager->flush();
    }

    public function addDislike(Discussion $discussion): void
    {
        $discussion->setDislikes($discussion->getDislikes() + 1);
        $this->entityManager->persist($discussion);
        $this->entityManager->flush();
    }

    public function removeDislike(Discussion $discussion): void
    {
        $discussion->setDislikes(max(0, $discussion->getDislikes() - 1));
        $this->entityManager->persist($discussion);
        $this->entityManager->flush();
    }
}
