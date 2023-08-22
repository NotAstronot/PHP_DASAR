<?php

$array = [
    "firstName" => "John",
    "middleName" => "Not",
    "lastName" => "Astronot",
];

$object = (object)$array;
var_dump($object);

echo "First Name $object->firstName" . PHP_EOL;
echo "Middle Name $object->middleName" . PHP_EOL;
echo "Last Name $object->lastName" . PHP_EOL;


$arrayLagi = (array)$object;
var_dump($array);


require_once "data/Class.php";

$person = new Person("John", "Astront");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);

/*
stdClass
stdClass adalah class kosong bawaan dari PHP
stdClass biasanya digunakan ketika kita melakukan konversi dari tipe lain menjadi tipe object
stdClass sangat berguna ketika misal kita ingin melakukan konversi dari tipe data array ke object secara otomatis

*/