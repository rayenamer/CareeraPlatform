<?php

namespace App\Repository;

use App\Entity\Discussion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Discussion>
 */
class DiscussionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Discussion::class);
    }

    public function AddLike()
    {
        $this->setLikes($this->getLikes()+1);
    }
    public function UnaddLike()
    {
        $this->setLikes($this->getLikes()-1);
    }

    public function AddDisLike()
    {
        $this->setDislikes($this->getDislikes()+1);
    }
    public function UnDisLike()
    {
        $this->setDislikes($this->getDislikes()-1);
    }
    
}
