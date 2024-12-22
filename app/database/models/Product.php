<?php

namespace app\database\models;
use app\database\Connection;

class Product 
{
    public function simpleQuery(string $sql)
    {
        try {
            $connection = Connection::connect();

            $stmt = $connection->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        } catch (\PDOException $err) {
            echo 'Ocorreu algum erro: ' . $err->getMessage();
        }
    }

    public function findById(string $sql, array $params = [])
    {
        try {
            $connection = Connection::connect();

            $stmt = $connection->prepare($sql);
            $stmt->execute($params);

            return $stmt->fetch(\PDO::FETCH_OBJ);
        } catch (\PDOException $err) {
            echo 'Ocorreu algum erro: ' . $err->getMessage();
        }
    }

    public function deleteQuery(string $sql, array $params = [])
    {
        try {
            $connection = Connection::connect();

            $stmt = $connection->prepare($sql);
            $stmt->execute($params);

            $stmt ? header('location: http://localhost/web/product') : 'erro';
        } catch (\PDOException $err) {
            echo 'Ocorreu algum erro: ' . $err->getMessage();
        }
    }

    public function updateQuery(string $sql, array $params = [])
    {
        try {
            $connection = Connection::connect();

            $stmt = $connection->prepare($sql);
            $stmt->execute($params);

            $stmt ? header('location: http://localhost/web/product') : 'erro';
        } catch (\PDOException $err) {
            echo 'Ocorreu algum erro: ' . $err->getMessage();
        }
    }
}