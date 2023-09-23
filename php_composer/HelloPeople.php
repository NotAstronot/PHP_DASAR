<?php

require_once __DIR__ . '/vendor/autoload.php';

use LearningPhpComposer\Data\People;

$people = new People("Astronot ");

echo $people->sayHello("Boys") . PHP_EOL;
