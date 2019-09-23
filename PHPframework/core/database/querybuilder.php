<?php
namespace App\Core\Database;

use PDO;

class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    
    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':'.implode(', :', array_keys($parameters))
        );
        // implode(', ', array_keys($parameters)): array like ['a','b','c'] will become a, b, c
        // implode(', :', array_keys($parameters)): array like ['a','b','c'] will become a, :b, :c
        // ':'.implode(', :', array_keys($parameters)): array like ['a','b','c'] will become :a, :b, :c
        
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}