<?php

// Jika gunakan ANONYMOUS FUNCTION
$firstName = "Not";
$lastName = "Astronot";

$anonymousFunction = function () use ($firstName, $lastName): string {
    return "Hello  $firstName $lastName" . PHP_EOL;
};


// Jika gunakan Arrow Function
$arrowFunction = fn () => "Hello $firstName $lastName" . PHP_EOL;

echo $anonymousFunction();
echo $arrowFunction();
