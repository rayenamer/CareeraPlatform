<?php

namespace App\Repository;

use App\Entity\Offre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Offre>
 */
class OffreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Offre::class);
    }

    public function findByNomPoste(string $nomposte): ?Offre
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.nomposte = :nomposte')
            ->setParameter('nomposte', $nomposte)
            ->getQuery()
            ->getOneOrNullResult();
    }
    public function findBySearchQuery(string $searchQuery)
    {
        $qb = $this->createQueryBuilder('o')
            ->where('o.nomposte LIKE :search OR o.entreprise LIKE :search OR o.localisation LIKE :search')
            ->setParameter('search', '%' . $searchQuery . '%')
            ->getQuery();

        return $qb->getResult();
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
}
