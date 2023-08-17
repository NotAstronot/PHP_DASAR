<?php

require_once "data/SayGoodbay.php";

use Data\Traits\{Person, SayHello, SayGoodbay};

$person = new Person();
$person->hello("Joko");
$person->sayGoodbay("Budi");

$person->name = "John";
var_dump($person);

$person->run();
