<?php

interface HelloWorld
{
    function sayHello(): void;
}



$helloWorld = new class implements HelloWorld
{

    // anonymous constructor class
    public string $name;

    public function __construct(string $name)

    {
        $this->name = $name;
    }


    public function sayHello(): void
    {
        echo "Hello World" . PHP_EOL;
    }
};

$helloWorld->sayHello();
