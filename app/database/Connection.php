<?php

namespace app\database;

use PDO;
use PDOException;

class Connection
{
    private static $connection = null;

    public static function connect()
    {
        if (!self::$connection) {
            try {
                self::$connection = new PDO(
                    "mysql:host=localhost;dbname=webPhp", 
                    "root", 
                    "kaua123", 
                    [
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
                    ]
                );
            } catch (PDOException $e) {
                die("Erro na conexão com o banco de dados: " . $e->getMessage());
            }
        }

        return self::$connection;
    }
}
