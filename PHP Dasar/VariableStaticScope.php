<?php
function increment()
{
    static $counter = 1; //static counter
    echo "Counter = $counter" . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();
