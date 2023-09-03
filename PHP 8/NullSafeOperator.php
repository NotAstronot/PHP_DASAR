<?php

class Addess
{
    public ?string $country;
}

class User
{
    public ?Addess $addres;
}

function getCountry(?User $user): ?string
{
    return $user?->addres?->country;
}

echo getCountry(null) . PHP_EOL;
