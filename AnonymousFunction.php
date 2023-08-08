<?php
$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Not");
$sayHello("Astronot");


function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Not", function (string $name): string {
    return strtoupper($name);
});


// mengakses Variable diluar Clousure

$firstName = "Not";
$lastName = "Astronot";

$sayHelloFer = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloFer();
