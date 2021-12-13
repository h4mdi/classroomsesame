<?php

namespace App\Repository;

use App\Entity\Nom1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Nom1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nom1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nom1[]    findAll()
 * @method Nom1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Nom1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nom1::class);
    }

    // /**
    //  * @return Nom1[] Returns an array of Nom1 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Nom1
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
