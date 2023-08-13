<?php


define("APPLICATION", "BELAJAR PHP OOP");
const APP_VERSION = " 1.0.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

// contoh const di dalam class

class Person
{
    const AUTHOR = "Not Astronot";
}

echo Person::AUTHOR;


function info()
{
    echo "Author : " . self::AUTHOR . PHP_EOL;
}


/*
self Keyword
Jika di dalam class (misal di function) kita ingin mengakses constant, kita perlu mengakses menggunakan NamaClass::NAMA_CONSTANT
Namun jika di dalam class yang sama, kita bisa menggunakan kata kunci self untuk mempermudah

*/