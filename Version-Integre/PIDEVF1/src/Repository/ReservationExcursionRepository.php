<?php

namespace App\Repository;

use App\Entity\ReservationExcursion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReservationExcursion|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationExcursion|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationExcursion[]    findAll()
 * @method ReservationExcursion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationExcursionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationExcursion::class);
    }

    // /**
    //  * @return ReservationExcursion[] Returns an array of ReservationExcursion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ReservationExcursion
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
