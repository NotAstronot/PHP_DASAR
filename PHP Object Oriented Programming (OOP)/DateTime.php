<?php


$dateTime = new DateTime();
$dateTime->setDate(1994, 10, 29);
$dateTime->setTime(10, 10, 29, 0);


$dateTime->add(new DateInterval("P1Y"));

// Jika ingin mundur (minus) silakan gunakan DateInterval
$minusOneMonth = new DateInterval("P1M");

$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);


var_dump($dateTime);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("America/New_York"));
var_dump($now);


// cara Format waktu yang di inginkan 
$string = $now->format("Y-m-d H:i:s");
echo "Waktu saat ini : $string" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2023-08-23 13:10:10", new DateTimeZone("Asia/Jakarta"));
var_dump($date);
