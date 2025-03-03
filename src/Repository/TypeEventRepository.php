<?php

namespace App\Repository;

use App\Entity\TypeEvent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TypeEvent>
 */
class TypeEventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeEvent::class);
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
            ->where('o.nomposte LIKE :search OR o.entreprise LIKE :search OR o.localisation LIKE :search  OR o.salaire LIKE :search')
            ->setParameter('search', '%' . $searchQuery . '%')
            ->getQuery();

        return $qb->getResult();
    }
    public function countByOffreType(): array
{
    return $this->createQueryBuilder('o')
        ->select('t.nom AS typeOffre, COUNT(o.id) AS total')
        ->innerJoin('o.typeoffre', 't')
        ->groupBy('t.nom')
        ->getQuery()
        ->getResult();
}

public function countByLocalisation(): array
{
    return $this->createQueryBuilder('o')
        ->select('o.localisation, COUNT(o.id) AS total')
        ->where('o.localisation IS NOT NULL') // S'assure d'éviter les valeurs NULL
        ->groupBy('o.localisation')
        ->getQuery()
        ->getResult();
}

public function countBySalaireRange(): array
{
    return $this->getEntityManager()->createQuery("
        SELECT 
            CASE 
                WHEN o.salaire < 800 THEN 'Moins de 800 DT'
                WHEN o.salaire BETWEEN 800 AND 1200 THEN '800 DT - 1200 DT'
                ELSE 'Plus de 1200 DT'
            END AS range, 
            COUNT(o.id) AS total
        FROM App\Entity\Offre o
        GROUP BY range
    ")->getResult();
}




    //    /**
    //     * @return TypeEvent[] Returns an array of TypeEvent objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('t.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?TypeEvent
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
