<?php

require_once __DIR__ . '/Getconnection.php';

$connection = getConnection();

$username = "Not";
$password = "Astronot";

$sql = "INSERT INTO admin(username, password) VALUES (:username, :password)";
$statment = $connection->prepare($sql);
$statment->bindParam("username", $username);
$statment->bindParam("password", $password);
$statment->execute();


$connection = null;
