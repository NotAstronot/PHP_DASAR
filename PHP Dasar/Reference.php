<?php

//Reference terhdap Variable 
$name = "Astronot";

$otherName = &$name;

$otherName = "Boy";

echo $name . PHP_EOL;

// Reference di Parameter
function increment(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;


//Returning References
function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;
