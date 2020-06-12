<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
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
     * @param string $search
     * @param null $validated
     * @return int|mixed|string
     */
    public function findByWord(string $search, $validated = null)
    {
        $query = $this->createQueryBuilder('p')
            ->where('p.title LIKE :key')
            ->orWhere('p.description LIKE :key')
            ->orWhere('p.content LIKE :key')
            ->setParameter('key', '%' . $search . '%');
        if ($validated !== null) {
            $query->andWhere('p.validated = :validated')
                ->setParameter('validated', $validated);
        }

        return $query->getQuery()->getResult();
    }
}
