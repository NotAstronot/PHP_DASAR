<?php
function sayHello()
{
    echo "Hello Function" . PHP_EOL;
    echo "Test function " . PHP_EOL;
}

sayHello();


// Jika gunakan Function dalam IF
$contoh = true;

if ($contoh) {
    function sayTest()
    {
        echo "Function Jika ada IF" . PHP_EOL;
    }
};

sayTest();
