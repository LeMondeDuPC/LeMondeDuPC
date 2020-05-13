<?php

namespace App\Repository;

use App\Entity\Locations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
use Doctrine\DBAL\FetchMode;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Locations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Locations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Locations[]    findAll()
 * @method Locations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LocationsRepository extends ServiceEntityRepository
{
    /**
     * @var Connection
     */
    private $_conn;

    /**
     * LocationsRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Locations::class);
        $this->_conn = $this->getEntityManager()->getConnection();
    }

    /**
     * @param null $validated
     * @return mixed[]
     * @throws DBALException
     */
    public function findLocations($validated = null)
    {
        $sql = 'SELECT l.id AS location_id, l.name AS location_name, COUNT(p.id) AS posts_number
FROM locations l LEFT JOIN posts p ON p.id_location = l.id GROUP BY l.id, l.name';
        if ($validated !== null) {
            $sql .= ' AND p.validated = ?';
            $stmt = $this->_conn->prepare($sql);
            $stmt->execute([$validated]);
        } else {
            $stmt = $this->_conn->prepare($sql);
            $stmt->execute();
        }
        return $stmt->fetchAll(FetchMode::STANDARD_OBJECT);
    }
}
