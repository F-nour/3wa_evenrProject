<?php

namespace Library\Core;

abstract class AbstractManager
{
    protected $db;
    protected $config = 'config/database_3wa.php';

    const CATEGORIES = 'categories';
    const EVENT = 'event';

    public function __construct()
    {
        $config = require $this->config;
        $this->db = new \Library\Database\Connexion($config);
        // $this->db = new Connection();
    }
}
