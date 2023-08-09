<?php

/*Contoh Array Function
lebih lengkap di    https://www.php.net/manual/en/ref.array.php 
array_keys()        Mengambil semua keys milik array
array_values()      Mengambil semua values milik array
array_map()         Mengubah semua data array dengan callback
sort()              Mengurutkan array
rsort()             Mengurutkan array terbalik
shuffle()           Mengubah posisi data di array secara random
*/


//array_map()         Mengubah semua data array dengan callback
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$mapFunction = fn (int $value) => $value * 10;
$dataResult = array_map($mapFunction, $data);
var_dump($dataResult);

//rsort()             Mengurutkan array terbalik
rsort($data);
var_dump($data);

//array_keys()        Mengambil semua keys milik array
var_dump(array_keys($data));

//array_values()      Mengambil semua values milik array
var_dump(array_values($data));
