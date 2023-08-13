<?php

require_once  "data/Class.php";

$person = new Person("Not", "Astronot");
$person->name = "Not";
$person->address = null;
$person->country = "Planet";

var_dump($person);

echo "name : $person->name" . PHP_EOL;
echo "address : $person->address" . PHP_EOL;
echo "country : $person->country" . PHP_EOL;
