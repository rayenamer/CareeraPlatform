<?php

namespace App\Repository;

use App\Entity\Missionfreelencer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Offre>
 */
class MissionfreelencerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Missionfreelencer::class);
    }

    //    /**
    //     * @return Offre[] Returns an array of Offre objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('o')
    //            ->andWhere('o.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('o.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Offre
    //    {
    //        return $this->createQueryBuilder('o')
    //            ->andWhere('o.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
   

    // src/Repository/OffreRepository.php

 // src/Repository/OffreRepository.php
 public function findByFilters(array $filters)
 {
     $qb = $this->createQueryBuilder('o');
 
     if (!empty($filters['recherche'])) {
         $qb->andWhere('o.titre LIKE :recherche OR o.specialite LIKE :recherche')
            ->setParameter('recherche', '%' . $filters['recherche'] . '%');
     }
 
     return $qb->getQuery()->getResult();
 }

    

}
