<?php

function sayHello($name)
{
    echo "Helo $name" . PHP_EOL;
}

sayHello("Not");
sayHello("Astronot");
sayHello("Guys");


// jika ingin gunakan default Argument value 
function DefaultArgument($name = "Selamat Datang")
{
    echo "Helo $name" . PHP_EOL;
}

DefaultArgument("Not");
DefaultArgument("Astronot");
DefaultArgument("Guys");
DefaultArgument();

// jika ingin gunakan default Argument value lebih dari satu ditempatkan di belakang 
//contoh function sayHello($firstName, $lastName = "")



//Type Declaration//

// contoh type declaration integer//
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
// jika gunakan type data lain silakan masukan type data di function nya 
// function sum(int $first, int $last)


///jika gunakan  Variable-length Argument List
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(", ", $values) . " = $total" . PHP_EOL;
};

sumAll(10, 20, 30, 40);

//Jika gunakan Array
sumAll(...[10, 20, 30, 40]);
