<?php 

// Jika gunakan if Else 
$gender = "WANITA";
$hi = null;

if($gender == "PRIA") {
    $hi = "Hi bro";
}else{
    $hi = "Hi Nona";
};

echo $hi . PHP_EOL;


// Jika gunakan Ternary Operator lebih singkat 

$gender = "PRIA";
$hi = $gender == "PRIA" ? "Hi bro" : "Hi Nona";

echo $hi . PHP_EOL;












