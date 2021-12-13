<?php

namespace App\Repository;

use App\Entity\Sesame;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Sesame|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sesame|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sesame[]    findAll()
 * @method Sesame[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SesameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sesame::class);
    }

    // /**
    //  * @return Sesame[] Returns an array of Sesame objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Sesame
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
