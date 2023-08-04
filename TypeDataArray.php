<?php 

$Values = array(12, 34, 34, 12, 3.5);
var_dump($Values);

$names = ["Feri", "Riski", "Muh", "29",];
var_dump($names);

//mengakses data di Array///
var_dump($names[2]);

// Mengaubah data di Array///
$names[1] = "Muh";
var_dump($names);

$Values[2] = "Feri";
var_dump($Values);

// mengahapus data di Array///
unset($Values[0]);
var_dump($Values);

//Menambah data di Array///
$names[] = "Yesica";
var_dump($names);

//Menghitung data di Array///
var_dump(count($Values));
var_dump(count($names));

//Key dan Value di Array//
$Feri = array(
    "id" => "Riski",
    "nama" => "Muh",
    "age" => 25,

);

// atau bisa juga seperti ini tidak usah pakai kata kunci Array//
$Feri = [
    "id" => "Riski",
    "nama" => "Muh",
    "age" => 25,
    // Array dalam Array //
    "addres" =>[
            "city" => "Pemalang",
            "Gender" => "Laki-laki",
        ]
    ];
var_dump($Feri);
var_dump($Feri["addres"]["Gender"]);

//Mengambil data di Array//
var_dump($Feri["nama"]);