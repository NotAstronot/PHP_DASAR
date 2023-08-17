<?php

require_once "helper/MatHelper.php";

use Helper\MatHelper;

echo MatHelper::$name . PHP_EOL;

MatHelper::$name = "Not Astronot";
echo MatHelper::$name . PHP_EOL;


$result = MatHelper::sum(10, 10, 10, 10, 10);
echo "Result $result" . PHP_EOL;
