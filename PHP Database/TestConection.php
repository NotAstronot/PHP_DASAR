<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);

    echo "Sukses terkoneksi ke database mySQL" . PHP_EOL;

    // Menutup Koneksi
    $connection = null;

    // untuk mengetest terkoneksi atau tidak ke database gunakan exception 
} catch (PDOException $exception) {
    echo "Gagal Terkoneksi ke database mySQL : " . $exception->getMessage() . PHP_EOL;
}
