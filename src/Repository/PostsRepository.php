<?php

namespace App\Repository;

use App\Entity\Posts;
use App\Entity\Users;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

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

    public function findValidatedPosts($filter = null)
    {
        $query = $this->createQueryBuilder('p');
        $query->innerJoin(Users::class, 'u', 'WITH', 'p.authorId = u.id')
            ->addSelect('u')
            ->where('p.validation = :postValidation')
            ->setParameter('postValidation', Posts::CONSTANTS['validated']);
        if ($filter !== null) {
            //code
        }
        return $query->getQuery()->getScalarResult();
    }

    public function findValidatedPost($id)
    {
        $query = $this->createQueryBuilder('p');
        $query->innerJoin(Users::class, 'u', 'WITH', 'p.authorId = u.id')
            ->addSelect('u')
            ->where('p.validation = :postValidation')
            ->andWhere('p.id = :postId')
            ->setParameter('postValidation', Posts::CONSTANTS['validated'])
            ->setParameter('postId', $id)
            ->groupBy('p.id');
        return $query->getQuery()->getScalarResult();
    }

//SELECT posts.title, interactions.type, COUNT(interactions.type) FROM posts INNER JOIN interactions ON (posts.id = interactions.post_id)
//GROUP BY interactions.type;

//SELECT
//posts.id,
//posts.title,
//posts.description,
//posts.content,
//posts.created_at,
//GROUP_CONCAT(tags.name) AS tags,
//users.username
//FROM posts
//INNER JOIN tags ON FIND_IN_SET(tags.id, posts.tags_id) != 0
//INNER JOIN users ON posts.author_id = users.id
//WHERE posts.validation = 1
//GROUP BY posts.title ORDER BY posts.id;
}
