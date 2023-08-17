<?php


namespace Helper;

class MatHelper
{
    static public string $name = "MatHelper";

    // static  function
    static public function sum(int ...$number): int
    {
        $total = 0;
        foreach ($number as $number) {
            $total += $number;
        }

        return $total;
    }
}
