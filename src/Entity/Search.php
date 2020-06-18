<?php


namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;


/**
 * Class Search
 * @package App\Entity
 */
class Search
{

    /**
     * @Assert\NotBlank
     * @Assert\Type("string")
     * @Assert\Length(min="1", max="150")
     */
    private $query;

    /**
     * @return mixed
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param mixed $query
     * @return Search
     */
    public function setQuery(string $query)
    {
        $this->query = $query;
        return $this;
    }

}