<?php

namespace App\Repository;

use App\Entity\DemandeMission;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DemandeMission>
 */
class DemandeMissionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DemandeMission::class);
    }

//    /**
//     * @return DemandeMission[] Returns an array of DemandeMission objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DemandeMission
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
// src/Repository/DemandeMissionRepository.php
public function findAllSortedByOffreTitre()
{
    return $this->createQueryBuilder('d')
        ->innerJoin('d.Offremission', 'o') // Joindre l'entité Offre
        ->orderBy('o.titre', 'ASC') // Trier par le champ titre de l'entité Offre
        ->getQuery()
        ->getResult();
}


}
