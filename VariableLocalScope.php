<?php
function creatName()
{
    $name = "Not"; //local scope
}

creatName();
echo $name . PHP_EOL;
