<?php

namespace Data;

interface Car
{
    function drive(): void;

    function getTire(): int;
}

class Avanza implements Car
{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }
}
