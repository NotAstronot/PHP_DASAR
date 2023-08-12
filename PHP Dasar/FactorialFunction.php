<?php
// Factorial function 
function FactorialLoop(int $value): int
{
    $total = 1;

    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }

    return $total;
};

var_dump(FactorialLoop(5));
var_dump(1 * 2 * 3 * 4 * 5);


// Recursive function
function factorialRecursive(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
};

var_dump(factorialRecursive(5));

function loop(int $value)
{
    if ($value == 0) {
        echo "End loop" . PHP_EOL;
    } else {
        echo "Loop-$value" . PHP_EOL;
        loop($value - 1);
    }
};

loop(3000000);
