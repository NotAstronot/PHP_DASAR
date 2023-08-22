<?php


require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "John";
$student1->value = "100";
$student1->setSample("XXXXX");


$string = (string) $student1;
echo $string . PHP_EOL;

// atau bisa seperti ini 
echo $student1 . PHP_EOL;
