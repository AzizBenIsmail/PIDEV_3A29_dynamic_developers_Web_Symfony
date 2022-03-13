<?php

namespace App\Repository;

use App\Entity\ReservationVoyage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReservationVoyage|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationVoyage|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationVoyage[]    findAll()
 * @method ReservationVoyage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationVoyageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationVoyage::class);
    }

    // /**
    //  * @return ReservationVoyage[] Returns an array of ReservationVoyage objects
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
    public function findOneBySomeField($value): ?ReservationVoyage
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function Economy()
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.Travel_Class = :val')
            ->setParameter('val','Economy class')
            ->getQuery()->getResult();
    }

    public function Business()
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.Travel_Class = :val')
            ->setParameter('val','Business class')
            ->getQuery()->getResult();
    }

    public function First()
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.Travel_Class = :val')
            ->setParameter('val','First class')
            ->getQuery()->getResult();
    }

    public function order_By_Date_ASC()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.Date_Reservation', 'ASC')
            ->getQuery()->getResult();
    }

    public function order_By_Date_desc()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.Date_Reservation', 'DESC')
            ->getQuery()->getResult();
    }

    public function Enfants()
    {
        $EM=$this->getEntityManager();
        $query = $EM->createQuery('select s from App\Entity\ReservationVoyage s  WHERE s.Age  BETWEEN :a AND :b ')
            ->setParameter('a', 0)
            ->setParameter('b',14);
        return $query->getResult();
    }

    public function Adolescents()
    {
        $EM=$this->getEntityManager();
        $query = $EM->createQuery('select s from App\Entity\ReservationVoyage s  WHERE s.Age  BETWEEN :a AND :b ')
            ->setParameter('a', 14)
            ->setParameter('b',24);
        return $query->getResult();
    }

    public function Adultes()
    {
        $EM=$this->getEntityManager();
        $query = $EM->createQuery('select s from App\Entity\ReservationVoyage s  WHERE s.Age  BETWEEN :a AND :b ')
            ->setParameter('a', 25)
            ->setParameter('b', 64);
        return $query->getResult();
    }

    public function Aines()
    {
        $EM=$this->getEntityManager();
        $query = $EM->createQuery('select s from App\Entity\ReservationVoyage s  WHERE s.Age  BETWEEN :a AND :b ')
            ->setParameter('a', 65)
            ->setParameter('b', 100);
        return $query->getResult();
    }

}
