<?php

namespace Data;

interface HasBrand
{
    function getBrand(): string;
}

interface Ismaintainance
{
    function getIsmaintainance(): bool;
}

interface Car
{
    function drive(): void;

    function getTire(): int;
}

class Avanza implements Car, Ismaintainance
{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "BMW";
    }

    public function getIsmaintainance(): bool
    {
        return false;
    }
}
