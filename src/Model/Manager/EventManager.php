<?php

namespace Model\Manager;

class EventManager extends \Library\Core\AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $result = $this->db->getResults('SELECT * FROM' . SELF::EVENT . ' ORDER BY date DESC');
        return $result;
    }

    public function getByCategory(string $category)
    {
        $result = $this->db->getResults('SELECT * FROM ' . SELF::EVENT . ' WHERE id_categorie = ' . $category . ' ORDER BY date DESC');
        return $result;
    }
}
