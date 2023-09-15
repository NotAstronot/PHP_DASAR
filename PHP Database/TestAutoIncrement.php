<?php

require_once __DIR__ . '/Getconnection.php';

$connection = getConnection();
$connection->exec("INSERT INTO comments (email, comment) VALUES ('not@gamil.com', 'Hi')");
$id = $connection->lastInsertId();

echo $id . PHP_EOL;

$connection = null;
