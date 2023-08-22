<?php

class Data implements IteratorAggregate
{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $forth = "Forth";

    /*   public function getIterator()

    {
        $array = [
            "first" => "$this->first",
            "second" => "$this->second",
            "third" => "$this->third",
            "forth" => "$this->forth",
        ];

        return new ArrayIterator($array);
    }
*/

    /*
Sebelumnya kita tahu bahwa untuk membuat object yang bisa di iterasi, kita menggunakan Iterator
Namun pembuatan Iterator secara manual sangatlah ribet
Untungnya di PHP, terdapat fitur generator, yang bisa kita gunakan untuk membuat Iterator secara otomatis hanya dengan menggunakan kata kunci yield

*/
    public function getIterator()
    {
        yield "first" => "$this->first";
        yield "second" => "$this->second";
        yield "third" => "$this->third";
        yield "forth" => "$this->forth";
    }
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}
