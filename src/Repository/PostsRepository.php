<?php

namespace App\Repository;

use App\Entity\Posts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\FetchMode;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Posts|null find($id, $lockMode = null, $lockVersion = null)
 * @method Posts|null findOneBy(array $criteria, array $orderBy = null)
 * @method Posts[]    findAll()
 * @method Posts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Posts::class);
    }

    public function findPosts($validated = null)
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT p.id AS post_id, p.title AS post_title, p.description AS post_description, p.time_publication AS post_time_publication, 
u.id AS user_id, u.username AS user_name, 
l.id AS location_id, l.name AS location_name 
FROM posts p INNER JOIN users u ON p.id_user = u.id LEFT JOIN locations l ON p.id_location = l.id';
        if ($validated !== null) {
            $sql .= ' WHERE p.validated = ?';
        }
        $stmt = $conn->prepare($sql);
        $stmt->execute([$validated]);
        return $stmt->fetchAll(FetchMode::STANDARD_OBJECT);
    }

    public function findPost($id, $validated = null)
    {
    }

    /*
    public function findOneBySomeField($value): ?Posts
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
