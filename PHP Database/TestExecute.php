<?php

require_once __DIR__ . '/Getconnection.php';

$connection = getConnection();

$sql = <<<SQL
        INSERT INTO customers(id, name, email)
        VALUES ('not', 'astronot', 'Boys');
SQL;

$connection->exec($sql);

$connection = null;
