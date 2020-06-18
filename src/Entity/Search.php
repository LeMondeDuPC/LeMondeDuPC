<?php


namespace App\Entity;


class Search
{

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