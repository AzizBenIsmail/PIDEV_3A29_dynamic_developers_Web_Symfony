<?php

namespace App\Repository;

use App\Entity\ReservationRestaurant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReservationRestaurant|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationRestaurant|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationRestaurant[]    findAll()
 * @method ReservationRestaurant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationRestaurantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationRestaurant::class);
    }

    // /**
    //  * @return ReservationRestaurant[] Returns an array of ReservationRestaurant objects
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
    public function findOneBySomeField($value): ?ReservationRestaurant
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function orderByDest1()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.Destination', 'ASC')
            ->getQuery()->getResult();
    }
    public function orderByDest2()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.Destination', 'ASC')
            ->getQuery()->getResult();
    }
    public function orderByDest3()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.Destination', 'ASC')
            ->getQuery()->getResult();
    }
}
