<?php

namespace App\Repository;

use App\Entity\Excursion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Data\SearchData;
use Knp\Component\Pager\PaginationInterface;

/**
 * @method Excursion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Excursion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Excursion[]    findAll()
 * @method Excursion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExcursionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Excursion::class);
    }

    // /**
    //  * @return Excursion[] Returns an array of Excursion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Excursion
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function findExcursionByLieu($Lieu)
    {
        return $this->createQueryBuilder('e')
            ->where('e.Lieu LIKE :Lieu')
            ->setParameter('Lieu', '%' . $Lieu . '%')
            ->getQuery()
            ->getResult();
    }

    public function orderByDate()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.Date', 'DESC')
            ->getQuery()->getResult();
    }

    public function orderByPrix()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.prix', 'ASC')
            ->getQuery()->getResult();
    }

    public function searchType($Type_Excursion){
        return $this->createQueryBuilder('e')
            ->where('e.Type_Excursion LIKE :Type_Excursion')
            ->setParameter('Type_Excursion', '%' . $Type_Excursion . '%')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return Excursion[]
     */
    public function findPlanBySujet($sujet){
        return $this->createQueryBuilder('ex')
            ->andWhere('ex.Lieu LIKE :sujet ')
            ->setParameter('sujet', '%'.$sujet.'%')
            ->getQuery()
            ->getResult();
    }
}
