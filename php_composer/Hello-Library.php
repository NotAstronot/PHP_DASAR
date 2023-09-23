<?php

require_once __DIR__ . '/vendor/autoload.php';

$customer = new \Learningphpcomposer\Learning\Customer("Astronot");
echo $customer->sayHello() . PHP_EOL;
echo $customer->sayHello("Boys") . PHP_EOL;
