<?php


$value = "E";
$result = "";

$result = match ($value) {
    "A", "B", "C", => "Selamat Anda Lulus",
    "D" => "Anda Tidak Lulus",
    "E" => "Mohon Maaf anda tidak Lulus",
    default => "Nilai Apa itu?"
};

echo $result . PHP_EOL;
$value = 65;

$result = match (true) {
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E",
};

echo $result . PHP_EOL;

$name = "Mrs. Perempuan";

$result = match (true) {
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs.") => "Hello Mama",
    default => "Hello"
};

echo $result . PHP_EOL;
