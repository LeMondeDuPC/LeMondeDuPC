<?php

namespace App\Repository;

use App\Entity\Posts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
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
    /**
     * @var Connection
     */
    private $_conn;

    /**
     * PostsRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Posts::class);
        $this->_conn = $this->getEntityManager()->getConnection();
    }

    /**
     * @param null $validated
     * @return mixed[]
     * @throws DBALException
     */
    public function findPosts($validated = null)
    {
        $sql = $this->_query();
        if ($validated !== null) {
            $sql .= ' AND p.validated = ? ORDER BY p.time_publication DESC';
            $stmt = $this->_conn->prepare($sql);
            $stmt->execute([$validated]);
        } else {
            $stmt = $this->_conn->prepare($sql);
            $stmt->execute();
        }
        return $stmt->fetchAll(FetchMode::STANDARD_OBJECT);
    }

    /**
     * @param $locationName
     * @param null $validated
     * @return mixed[]
     * @throws DBALException
     */
    public function findPostsByLocationName($locationName, $validated = null)
    {

        $sql = $this->_query();
        $sql .= ' WHERE l.name = ?';
        if ($validated !== null) {
            $sql .= ' AND p.validated = ? ORDER BY p.time_publication DESC';
            $stmt = $this->_conn->prepare($sql);
            $stmt->execute([$locationName, $validated]);
        } else {
            $stmt = $this->_conn->prepare($sql);
            $stmt->execute([$locationName]);
        }
        return $stmt->fetchAll(FetchMode::STANDARD_OBJECT);
    }

    /**
     * @param $idAuthor
     * @param null $validated
     * @return mixed[]
     * @throws DBALException
     */
    public function findPostsByAuthor($idAuthor, $validated = null)
    {
        $sql = $this->_query();
        $sql .= ' WHERE p.id_user = ?';
        if ($validated !== null) {
            $sql .= ' AND p.validated = ? ORDER BY p.time_publication DESC';
            $stmt = $this->_conn->prepare($sql);
            $stmt->execute([$idAuthor, $validated]);
        } else {
            $stmt = $this->_conn->prepare($sql);
            $stmt->execute([$idAuthor]);
        }
        return $stmt->fetchAll(FetchMode::STANDARD_OBJECT);
    }

    /**
     * @param $id
     * @param null $validated
     * @return mixed
     * @throws DBALException
     */
    public function findPost($id, $validated = null)
    {
        $sql = $this->_query();
        $sql .= ' WHERE p.id = ?';
        if ($validated !== null) {
            $sql .= ' AND p.validated = ? ORDER BY p.time_publication DESC';
            $stmt = $this->_conn->prepare($sql);
            $stmt->execute([$id, $validated]);
        } else {
            $stmt = $this->_conn->prepare($sql);
            $stmt->execute([$id]);
        }
        return $stmt->fetch(FetchMode::STANDARD_OBJECT);
    }

    /**
     * @return string
     */
    private function _query()
    {
        return '
            SELECT 
            p.id AS post_id, p.title AS post_title, p.description AS post_description, p.time_publication AS post_time_publication, 
            p.validated AS post_validated, p.content AS post_content,
            u.id AS user_id, u.username AS user_name, 
            l.id AS location_id, l.name AS location_name 
            FROM posts p 
            LEFT JOIN users u ON p.id_user = u.id 
            LEFT JOIN locations l ON p.id_location = l.id
        ';
    }
}
