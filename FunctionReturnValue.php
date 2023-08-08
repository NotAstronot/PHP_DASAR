<?php
function sum(int $first, int $second)
{
    $total = $first + $second;
    return $total;
};

$result = sum(10, 10);
var_dump($result);


//function retunn Value lebih dari satu 
function getFinalValue(int $value)
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }

    echo "Ups" . PHP_EOL;
};

$score = getFinalValue(80);
var_dump($score);


// Retun type Declarations

function sum(int $first, int $second): int
{
    $total = $first + $second;
    return $total;
};

$result = sum(10, 10);
var_dump($result);

$result = sum(200, 3000);
var_dump($result);

//function retunn Value lebih dari satu 
function getFinalValue(int $value): string
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }

    echo "Ups" . PHP_EOL;
};

$score = getFinalValue(80);
var_dump($score);

$score = getFinalValue(25);
var_dump($score);
