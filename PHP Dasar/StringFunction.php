<?php

/*Contoh String Function 
lebih lengkap di        https://www.php.net/manual/en/ref.strings.php 
join() / implode()      Menggabungkan array menjadi string
explode()               Memecah string menjadi array
strtolower()            Mengubah string menjadi lowercase
strtoupper()            Mengubah string menjadi uppercase
substr()                Mengambil sebagian string
trim()                  Menghapus whitespace di depan dan belakang string
*/


// join() / implode()   Menggabungkan array menjadi string
var_dump(join(",", [10, 11, 12, 13, 14, 15]));


//explode() Memecah string menjadi array
var_dump(explode(",", "Not Astronot"));


// strtolower()            Mengubah string menjadi lowercase
var_dump(strtolower("NOT ASTRONOT"));


//strtoupper()            Mengubah string menjadi uppercase
var_dump(strtoupper("not astronot"));


//trim()                  Menghapus whitespace di depan dan belakang string
var_dump(trim("         Not             "));

//substr()                Mengambil sebagian string
var_dump(substr("Not Astronot", 0, 3));
