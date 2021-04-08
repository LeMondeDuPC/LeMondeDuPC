<?php

namespace App\Repository;

use App\Entity\Product;
use App\Entity\Search;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{

    /**
     * ProductRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    /**
     * @param Search $search
     * @return Query
     */
    public function findByWordQuery(Search $search): Query
    {
        $query = $this->findValidatedQuery();
        if ($search->getQuery()) {
            $query
                ->andWhere('p.title LIKE :key')
                ->orWhere('p.description LIKE :key')
                ->orWhere('p.content LIKE :key')
                ->setParameter('key', '%' . $search->getQuery() . '%');
        }
        return $query->getQuery();
    }

    /**
     * @return QueryBuilder
     */
    private function findValidatedQuery(): QueryBuilder
    {
        return $this->createQueryBuilder('p')
            ->where('p.validated = :validated')
            ->setParameter('validated', Product::VALIDATED);
    }
}
