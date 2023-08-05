<?php 

//Union//
$first = [
    "first_name" => "Feri"
];

$last = [
    "first_name" => "Riski",
    "last_name" => "Muh"
];
$full = $first + $last;
var_dump($full);

// 
$a = [
    "first_name" => "Riski",
    "last_name" => "Muh"
];

$b = [
    "first_name" => "Riski",
    "last_name" => "Muh"
];
var_dump($a == $b);


/*
$a + $b (Union) ==> Menggabungkan array $a dan $b
$a == $b (Equality) ==> true jika $a dan $b memiliki key-value sama
$a === $b (Identity) ==> true jika $a dan $b memiliki key-value sama dan posisi sama
$a != $b (Inequality) ==> true jika $a dan $b tidak sama
$a <> $b (Inequality) ==> true jika $a dan $b tidak sama
$a !== $b (Nonidentity) ==> true jika $a dan $b tidak identik
*/