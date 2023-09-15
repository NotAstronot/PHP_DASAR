<?php
require_once __DIR__ . '/Getconnection.php';

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('Astronot@test.com', 'Hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('Astronot@test.com', 'Hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('Astronot@test.com', 'Hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('Astronot@test.com', 'Hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('Astronot@test.com', 'Hi')");

$connection->rollBack();

$connection = null;
