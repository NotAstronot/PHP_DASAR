<?php

function sayHello(?string $name)
{
    if ($name == null) {
        throw new Exception("tidak Boleh null");
    }

    echo "Hello $name " . PHP_EOL;
}

function sayHelloExpression(?string $name)
{
    $result = $name != null ? "Hello $name" : throw new Exception("tidak Boleh null");
    echo $result . PHP_EOL;
}

sayHelloExpression("Astronot");
sayHelloExpression("Boys");
