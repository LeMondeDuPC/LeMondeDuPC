<?php

namespace App\Repository;

use App\Entity\Posts;
use App\Entity\Users;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use \PDO;

/**
 * @method Posts|null find($id, $lockMode = null, $lockVersion = null)
 * @method Posts|null findOneBy(array $criteria, array $orderBy = null)
 * @method Posts[]    findAll()
 * @method Posts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Posts::class);
    }

     /*$sql = '
            SELECT p.id, p.title, p.description, p.content, p.created_at, p.author_id, u.username, p.updated_at, GROUP_CONCAT(t.name) AS tags_name FROM posts AS p LEFT JOIN tags AS t ON t.post_id = p.id LEFT JOIN users as u ON p.author_id = u.id WHERE p.id = ? AND p.validation = ? GROUP BY p.id
        ';
     */
}
