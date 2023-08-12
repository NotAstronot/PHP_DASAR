<?php

$name = "Not"; //global scope

function sayHello()
{
    global $name; // ini adalah global keyword
    echo $name . PHP_EOL;
}

sayHello();
