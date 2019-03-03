<?php

namespace App\Repository;

use App\Entity\Interactions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Interactions|null find($id, $lockMode = null, $lockVersion = null)
 * @method Interactions|null findOneBy(array $criteria, array $orderBy = null)
 * @method Interactions[]    findAll()
 * @method Interactions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InteractionsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Interactions::class);
    }


    public function getInteractions($postId)
    {
        return $this->createQueryBuilder('i')
            ->where('i.postId = ?1')
            ->andWhere('i.type = ?2')
            ->setParameter(1, $postId)
            ->setParameter(2, Interactions::TYPES['like'])
            ->getQuery()
            ->getScalarResult();
    }

    // /**
    //  * @return Interactions[] Returns an array of Interactions objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Interactions
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
