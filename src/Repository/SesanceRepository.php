<?php

namespace App\Repository;

use App\Entity\Sesance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Sesance|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sesance|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sesance[]    findAll()
 * @method Sesance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SesanceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sesance::class);
    }

    // /**
    //  * @return Sesance[] Returns an array of Sesance objects
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
    public function findOneBySomeField($value): ?Sesance
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
