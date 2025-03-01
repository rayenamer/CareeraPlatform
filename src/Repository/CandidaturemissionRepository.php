<?php

namespace App\Repository;

use App\Entity\Candidaturemission;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Candidaturemission>
 */
class CandidaturemissionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Candidaturemission::class);
    }

    //    /**
    //     * @return Candidaturemission[] Returns an array of Candidaturemission objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Candidaturemission
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    public function findByUtilisateur(Utilisateur $utilisateur): array
{
    return $this->createQueryBuilder('c')
        ->andWhere('c.utilisateur = :utilisateur')
        ->setParameter('utilisateur', $utilisateur)
        ->getQuery()
        ->getResult();
}


// Méthode pour récupérer les candidatures d'un utilisateur par son ID
public function findByUserId(int $userid)
{
    return $this->findBy(['userid' => $userid]);
}

}
