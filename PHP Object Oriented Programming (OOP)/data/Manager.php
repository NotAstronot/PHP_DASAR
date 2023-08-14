<?php

class Manager
{
    var string $name;

    function sayHello(string $name): void
    {
        echo "Hello $name, may name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    function sayHello(string $name): void
    {
        echo "Hello $name, may name is VP $this->name" . PHP_EOL;
    }
}
