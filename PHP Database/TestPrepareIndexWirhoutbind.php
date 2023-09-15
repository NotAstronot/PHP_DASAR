<?php

require_once __DIR__ . '/Getconnection.php';

$connection = getConnection();

$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$statment = $connection->prepare($sql);
$statment->execute([$username, $password]);

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
