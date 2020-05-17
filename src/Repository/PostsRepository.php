<?php

namespace App\Repository;

use App\Entity\Posts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Posts|null find($id, $lockMode = null, $lockVersion = null)
 * @method Posts|null findOneBy(array $criteria, array $orderBy = null)
 * @method Posts[]    findAll()
 * @method Posts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostsRepository extends ServiceEntityRepository
{

    /**
     * PostsRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Posts::class);
    }

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
