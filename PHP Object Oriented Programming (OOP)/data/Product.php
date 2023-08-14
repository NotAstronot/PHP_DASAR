<?php
class Product
{   // jika public maka bisa diakses semua 
    // jika private maka tidak bisa diakses keluar file 
    // jika protected maka bisa diakses keluar (hanya class dan subclas)
    private string $name;
    private int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}
