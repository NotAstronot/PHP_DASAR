<?php 

$name = "Muh Feri riski";

echo "Name: " . $name .PHP_EOL;
echo "Value: " . 100 .PHP_EOL;

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

// cara gunakan string untuk megakses karakter//
$name = "Feri";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;

// Variabel Parsing//
echo "Hello $name, Selamat Belajar PHP" . PHP_EOL;

// Manipulasi Curly Brace//
echo "Hello ${name}R, Selamat Belajar PHP" . PHP_EOL;





