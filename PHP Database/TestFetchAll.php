<?php

require_once __DIR__ . '/Getconnection.php';

$connection = getConnection();

$sql = "SELECT * FROM customers";
$statment = $connection->query($sql);

$customers = $statment->fetchAll();

var_dump($customers);

$connection = null;
