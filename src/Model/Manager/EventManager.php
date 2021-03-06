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

    public function addEvent(string $title, string $image_path, string $description, string $date, string $id_categorie)
    {
        $result = $this->db->execute('INSERT INTO ' . SELF::EVENT . ' (title, description, date, id_categorie) VALUES (?, ?, ?, ?, ?)', [$title, $image_path, $description, $date, $id_categorie]);
        return $result;
    }

    public function getLastsEvents()
    {
        $result = $this->db->getResults(
            'SELECT title, content, image_path, date, categories.name FROM ' . SELF::EVENT .
                ' INNER JOIN ' . SELF::CATEGORIES . ' ON ' . SELF::EVENT . '.id_categorie = ' . SELF::CATEGORIES . '.id
            ORDER BY date DESC LIMIT 3'
        );
        return $result;
    }
}
