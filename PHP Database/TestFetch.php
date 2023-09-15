<?php

require_once __DIR__ . '/Getconnection.php';

$connection = getConnection();

$username = "Joko";
$password = "Rahasia";

$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$statment = $connection->prepare($sql);
$statment->bindParam("username", $username);
$statment->bindParam("password", $password);
$statment->execute();


if ($row = $statment->fetch()) {
    echo "sukses login : " . $row["username"] . PHP_EOL;
} else {
    echo "gagal login" . PHP_EOL;
}
var_dump($statment->fetch());


$connection = null;
