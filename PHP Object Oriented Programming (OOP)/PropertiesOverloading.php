<?php

class Zero
{
    private array $properties = [];

    public function __get($name)
    {
        echo "Accessing property $name" . PHP_EOL;
        return "Contoh";
    }

    public function __set($name, $value)
    {
        echo "Set proprty $name with value $value" . PHP_EOL;
    }

    public function __isset($name): bool
    {
        echo "Isset $name" . PHP_EOL;
        return false;
    }

    public function __unset($name)
    {
        echo "Set proprty $name with value $value" . PHP_EOL;
    }
}

$zero = new Zero();
echo $zero->firstName . PHP_EOL;
echo $zero->middleName . PHP_EOL;
