<?php

namespace App\Repository;

use App\Entity\Roduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Roduct|null find($id, $lockMode = null, $lockVersion = null)
 * @method Roduct|null findOneBy(array $criteria, array $orderBy = null)
 * @method Roduct[]    findAll()
 * @method Roduct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Roduct::class);
    }

    // /**
    //  * @return Roduct[] Returns an array of Roduct objects
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
    public function findOneBySomeField($value): ?Roduct
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
