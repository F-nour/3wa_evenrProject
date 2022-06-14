<?php

namespace Model\Manager;

class CategoryManager extends \Library\Core\AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $result = $this->db->getResults('SELECT * FROM' . SELF::CATEGORIES);
        return $result;
    }
}
