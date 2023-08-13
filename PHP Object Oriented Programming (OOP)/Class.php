<?php

class Person
{
    const AUTHOR = "Ini adalah contoh";


    var string $name;

    /*Nullable Properties
    Di PHP 7.4 dikenalkan nullable type, jadi kita bisa mengirim data null ke properties atau function arguments
    Caranya sebelum type declaration nya, kita bisa tambahkan tanda ?
    */
    var ?string $address = null;

    /*Default Properties Value 
    Sama seperti variable, di properties juga kita bisa langsung mengisi value nya
    Ini mirip seperti default value, jadi jika tidak diubah di object, maka properties akan memiliki value tersebut
    */
    var string $country = "Indonesia";


    /* Function
    Selain menambahkan properties, kita juga bisa menambahkan function di object
    Sama seperti function biasanya, kita juga bisa menambahkan return value dan parameter
    Untuk mengakses function tersebut, kita bisa menggunakan tanda -> dan diikuti dengan nama method nya. Sama seperti mengakses properties
    */

    // Contoh cunstructor
    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name)
    {
        echo "Hello $name" . PHP_EOL;

        if (is_null($name)) {
            echo "Hi, My Name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, My Name is $this->name" . PHP_EOL;
        }
    }
}




/*
Properties Type Declaration 
Jika kita mencoba mengubah properties dengan type yang berbeda, maka otomatis akan error
Ingat, bahwa PHP memiliki fitur type juggling, yang secara otomatis bisa mengkonversi ke tipe data lain
Untuk menambahkan type declaration, kita bisa tambahkan setelah kata kunci var di properties
{
    var string $name;
    var  string $address;
    var  string $country;
}
*/