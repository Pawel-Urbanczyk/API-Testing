<?php

namespace App\Repository;

use App\Entity\Tasik;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Tasik|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tasik|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tasik[]    findAll()
 * @method Tasik[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TasikRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Tasik::class);
    }

    // /**
    //  * @return Tasik[] Returns an array of Tasik objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tasik
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
