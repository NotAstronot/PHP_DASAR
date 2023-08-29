<?php


function sayHello(string $first, string $middle = "", string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

sayHello("Not", "Astronot", "Boy");

//sayHello("Not", "Astronot");

sayHello(last: "Boy", first: "Not", middle: "Astronot");
sayHello(first: "Not", last: "Boy");
