<?php

require_once __DIR__ . '/Getconnection.php';

$connection = getConnection();

$username = $connection->quote("admin");
$password = $connection->quote("salah gak peduli");
$sql = "SELECT * FROM admin WHERE username = $username AND password = $password;";

//echo $sql . PHP_EOL;

$statment = $connection->query($sql);

$success = false;
$find_user = null;
foreach ($statment as $row) {
    //sukses
    $sukses = true;
    $find_user = $row["username"];
}

if ($success) {
    echo "sukses login : " . $find_user . PHP_EOL;
} else {
    echo "gagal login" . PHP_EOL;
}

$connection = null;
