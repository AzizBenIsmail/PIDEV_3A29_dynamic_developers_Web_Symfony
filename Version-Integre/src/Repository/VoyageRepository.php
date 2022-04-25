<?php

namespace App\Repository;

use App\Entity\Voyage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Voyage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Voyage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Voyage[]    findAll()
 * @method Voyage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VoyageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Voyage::class);
    }

    // /**
    //  * @return Voyage[] Returns an array of Voyage objects
    //  */

    public function findPlanBySujet($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.Destination LIKE :sujet or v.Nom_Voyage LIKE :sujet  or v.Duree_Voyage Like :sujet  or v.valabilite LIKE :sujet or v.Prix Like :sujet ')
            ->setParameter('sujet', '%'.$value.'%')
            ->getQuery()
            ->getResult();
        ;
    }


    /*
    public function findOneBySomeField($value): ?Voyage
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function orderByDest()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.Destination', 'ASC')
            ->getQuery()->getResult();
    }
        public function order_By_Nom()
        {
            return $this->createQueryBuilder('s')
                ->orderBy('s.Nom_Voyage', 'ASC')
                ->getQuery()->getResult();
        }
    public function order_By_Date()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.date', 'ASC')
            ->getQuery()->getResult();
    }
    public function order_By_Prix()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.Prix', 'ASC')
            ->getQuery()->getResult();
    }

    public function searchContinent_Afrique()
    {
        $EM=$this->getEntityManager();
        $query = $EM->createQuery('select v from App\Entity\Voyage v  WHERE v.Destination IN (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,:l,:m,:n,:A,:B,:C,:D,:E,:F,:G,:H,:I,:J,:K,:L,:M,:N,:X,:Y,:Z,:x,:y,:z,:W,:w,:aa,:bb,:cc,:CC)')
            ->setParameter('a', 'DZ')
            ->setParameter('b', 'AO')
            ->setParameter('c', 'NG')
            ->setParameter('d', 'ET')
            ->setParameter('e', 'TZ')
            ->setParameter('f', 'ZA')
            ->setParameter('g', 'KE')
            ->setParameter('h', 'UG')
            ->setParameter('i', 'SS')
            ->setParameter('j', 'SD')
            ->setParameter('k', 'MA')
            ->setParameter('l', 'AO')
            ->setParameter('m', 'MZ')
            ->setParameter('n', 'GH')
            ->setParameter('A', 'MG')
            ->setParameter('B', 'CM')
            ->setParameter('C', 'CI')
            ->setParameter('D', 'NE')
            ->setParameter('E', 'BF')
            ->setParameter('F', 'ML')
            ->setParameter('G', 'MW')
            ->setParameter('H', 'ZM')
            ->setParameter('I', 'SN')
            ->setParameter('J', 'TD')
            ->setParameter('K', 'SO')
            ->setParameter('L', 'ZW')
            ->setParameter('M', 'GQ')
            ->setParameter('N', 'RW')
            ->setParameter('x', 'BJ')
            ->setParameter('y', 'BI')
            ->setParameter('z', 'TN')
            ->setParameter('X', 'TG')
            ->setParameter('Y', 'SL')
            ->setParameter('Z', 'LY')
            ->setParameter('W', 'CG')
            ->setParameter('w', 'LR')
            ->setParameter('aa', 'CF')
            ->setParameter('bb', 'MR')
            ->setParameter('cc', 'GA')
            ->setParameter('CC', 'KM');
        return $query->getResult();
    }

    public function searchContinent_Europe()
    {
        $EM=$this->getEntityManager();
        $query = $EM->createQuery('select v from App\Entity\Voyage v  WHERE v.Destination IN (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,:l,:m,:n,:A,:B,:C,:D,:E,:F,:G,:H,:I,:J,:K,:L,:M,:N,:X,:Y,:Z,:x,:y,:z,:W,:w,:aa,:bb,:cc,:CC)')
            ->setParameter('a', 'RU')
            ->setParameter('b', 'DE')
            ->setParameter('c', 'GB')
            ->setParameter('d', 'FR')
            ->setParameter('e', 'IT')
            ->setParameter('f', 'UA')
            ->setParameter('g', 'ES')
            ->setParameter('h', 'PL')
            ->setParameter('i', 'RO')
            ->setParameter('j', 'NL')
            ->setParameter('k', 'BE')
            ->setParameter('l', 'CZ')
            ->setParameter('m', 'GR')
            ->setParameter('n', 'PT')
            ->setParameter('A', 'SE')
            ->setParameter('B', 'HU')
            ->setParameter('C', 'BY')
            ->setParameter('D', 'AT')
            ->setParameter('E', 'RS')
            ->setParameter('F', 'CH')
            ->setParameter('G', 'BG')
            ->setParameter('H', 'DK')
            ->setParameter('I', 'FI')
            ->setParameter('J', 'SK')
            ->setParameter('K', 'NO')
            ->setParameter('L', 'GB')
            ->setParameter('M', 'HR')
            ->setParameter('N', 'MD')
            ->setParameter('x', 'BA')
            ->setParameter('y', 'AL')
            ->setParameter('z', 'LT')
            ->setParameter('X', 'IS')
            ->setParameter('Y', 'SI')
            ->setParameter('Z', 'LU')
            ->setParameter('W', 'MC')
            ->setParameter('w', 'AD')
            ->setParameter('aa', 'SM')
            ->setParameter('bb', 'MK')
            ->setParameter('cc', 'EE')
            ->setParameter('CC', 'LS');
        return $query->getResult();
    }

    public function searchContinent_Asie()
    {
        $EM=$this->getEntityManager();
        $query = $EM->createQuery('select v from App\Entity\Voyage v  WHERE v.Destination IN (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,:l,:m,:n,:A,:B,:C,:D,:E,:F,:G,:H,:I,:J,:K,:L,:M,:N,:X,:Y,:Z,:x,:y,:z,:W)')
            ->setParameter('a', 'CN')
            ->setParameter('b', 'IN')
            ->setParameter('c', 'ID')
            ->setParameter('d', 'PK')
            ->setParameter('e', 'BD')
            ->setParameter('f', 'JP')
            ->setParameter('g', 'PH')
            ->setParameter('h', 'VN')
            ->setParameter('i', 'TR')
            ->setParameter('j', 'IR')
            ->setParameter('k', 'TH')
            ->setParameter('l', 'MM')
            ->setParameter('m', 'IQ')
            ->setParameter('n', 'SA')
            ->setParameter('A', 'UZ')
            ->setParameter('B', 'MY')
            ->setParameter('C', 'KR')
            ->setParameter('D', 'KP')
            ->setParameter('E', 'YE')
            ->setParameter('F', 'LK')
            ->setParameter('G', 'SY')
            ->setParameter('H', 'KH')
            ->setParameter('I', 'KZ')
            ->setParameter('J', 'AE')
            ->setParameter('K', 'JO')
            ->setParameter('L', 'IL')
            ->setParameter('M', 'OM')
            ->setParameter('N', 'SG')
            ->setParameter('x', 'LB')
            ->setParameter('y', 'KW')
            ->setParameter('z', 'QA')
            ->setParameter('X', 'BH')
            ->setParameter('Y', 'MV')
            ->setParameter('Z', 'BN')
            ->setParameter('W', 'TM');
        return $query->getResult();
    }

    public function searchContinent_Amerique()
    {
        $EM=$this->getEntityManager();
        $query = $EM->createQuery('select v from App\Entity\Voyage v WHERE v.Destination IN (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,:l,:m,:n,:A,:B,:C,:D,:E,:F,:G,:H,:I,:J,:K,:L,:M,:N,:X,:Y,:Z,:x,:y,:z)')
            ->setParameter('a', 'BR')
            ->setParameter('b', 'MX')
            ->setParameter('c', 'CO')
            ->setParameter('d', 'AR')
            ->setParameter('e', 'PE')
            ->setParameter('f', 'VE')
            ->setParameter('g', 'CL')
            ->setParameter('h', 'GT')
            ->setParameter('i', 'EC')
            ->setParameter('j', 'BO')
            ->setParameter('k', 'HT')
            ->setParameter('l', 'CU')
            ->setParameter('m', 'DO')
            ->setParameter('n', 'HN')
            ->setParameter('A', 'PY')
            ->setParameter('B', 'NI')
            ->setParameter('C', 'SV')
            ->setParameter('D', 'CR')
            ->setParameter('E', 'PA')
            ->setParameter('F', 'UY')
            ->setParameter('G', 'JM')
            ->setParameter('H', 'DM')
            ->setParameter('I', 'BZ')
            ->setParameter('J', 'BS')
            ->setParameter('K', 'BB')
            ->setParameter('L', 'LC')
            ->setParameter('M', 'GD')
            ->setParameter('N', 'TT')
            ->setParameter('x', 'GY')
            ->setParameter('y', 'SR')
            ->setParameter('z', 'AG')
            ->setParameter('X', 'KN')
            ->setParameter('Y', 'US')
            ->setParameter('Z', 'CA');
        return $query->getResult();
    }

    public function Disponible()
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.valabilite = :val')
            ->setParameter('val','Oui')
            ->getQuery()->getResult();
    }

    public function Non_Disponible()
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.valabilite = :val')
            ->setParameter('val','Non' )
            ->getQuery()->getResult();
    }

    public function Bientot_Disponible()
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.valabilite = :val')
            ->setParameter('val','Bientot disponible' )
            ->getQuery()->getResult();
    }

    public function searchNom($Nom_Voyage)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.Nom_Voyage LIKE :ncl')
            ->setParameter('ncl', $Nom_Voyage.'%')
            ->getQuery()
            ->execute();
    }

    public function searchprix($Prix_Voyage)
    {
        $EM=$this->getEntityManager();
        $query = $EM->createQuery('select v from App\Entity\Voyage v  WHERE v.Prix  BETWEEN :a AND :b ')
            ->setParameter('a', 0)
            ->setParameter('b', $Prix_Voyage);
        return $query->getResult();


    }

    public function searchdatenow()
    {
        $EM=$this->getEntityManager();
        $query = $EM->createQuery('select v from App\Entity\Voyage v  WHERE v.date > CURRENT_DATE() ');
        //  ->setParameter('b', $date);
        return $query->getResult();
    }


    public function searchdate($date)
    {
        $EM=$this->getEntityManager();
        $query = $EM->createQuery('select v from App\Entity\Voyage v  WHERE v.date > :b ')
            ->setParameter('b', $date);
        return $query->getResult();
    }
}
