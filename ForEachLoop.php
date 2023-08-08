<?php

// jika tidak menggunakan For Each Loop
$names = ["Feri", "Riski", "Not"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i =  $names[$i]" . PHP_EOL;
};


// menggunakan For Each Loop lebih simple 
foreach ($names as $name) {
    echo "Data ke $name"  . PHP_EOL;
};


$person = [
    "first_name" => "Not",
    "middle_name" => "Astronot",
    "last_name" => "Fer"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
};
