<?php

namespace Library\Database;

class Connexion
{
    protected \PDO $pdo;

    public function __construct(array $config)
    {
        $config = require '../config/database.php';
        $this->pdo = new \PDO(
            "mysql:host={$config['host']};dbname={$config['name']};charset=UTF8",
            $config['user'],
            $config['password'],
            [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]
        );
    }

    /**
     * Renvoie un tableau de résultats d'une requête SQL (SELECT)
     *
     */
    public function getResults(
        string $sql,
        ?array $parameters = null
    ): array {
        $query = $this->pdo->prepare($sql);
        $query->execute($parameters);

        return $query->fetchAll();
    }

    /**
     * Exécute une requête SQL (INSERT, UPDATE, DELETE)
     *
     */
    public function execute(string $sql, ?array $parameters = null): string|false
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($parameters);

        return $this->pdo->lastInsertId();
    }

    public function getPdo(): PDO
    {
        return $this->pdo;
    }

    public function setPdo(PDO $pdo): void
    {
        $this->pdo = $pdo;
    }
}
