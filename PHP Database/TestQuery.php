<?php

require_once __DIR__ . '/Getconnection.php';

$connection = getConnection();

$sql = "SELECT id, name, email FROM customers";
$statment = $connection->query($sql);

foreach ($statment as $row) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];

    echo "Id : $id" . PHP_EOL;
    echo "Name : $name" . PHP_EOL;
    echo "Email : $email" . PHP_EOL;
}
$connection = null;
