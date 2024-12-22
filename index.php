<?php

require 'vendor/autoload.php';

use app\database\Connection;
use app\core\Router;
use app\core\App;

try {
    Connection::connect();
} catch (\PDOException $e) {
    die('Erro ao conectar no banco de dados: ' . $e->getMessage());
}

$routers = new Router();

$app = new App($routers);
$app->run();
