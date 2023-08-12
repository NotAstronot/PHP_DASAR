<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Not", "strtoupper");
sayHello("Astronot", "strtolower");
sayHello("Astronot", function (string $name): string {
    return strtoupper($name);
});
sayHello("Astronot", fn ($name) => strtolower($name));
