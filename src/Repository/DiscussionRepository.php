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

    // ✅ Get total number of discussions created
    public function getTotalDiscussions(): int
    {
        return (int) $this->createQueryBuilder('d')
            ->select('COUNT(d.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    // ✅ Get top N most liked discussions
    public function getTopLikedDiscussions(int $limit = 5): array
    {
        return $this->createQueryBuilder('d')
            ->orderBy('d.likes', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function getTopRepliedDiscussions(int $limit): array
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.replies', 'r')
            ->groupBy('d.id')
            ->orderBy('COUNT(r.id)', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
