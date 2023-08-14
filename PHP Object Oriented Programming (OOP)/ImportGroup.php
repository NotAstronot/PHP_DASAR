<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict as Conflict1, Dummy, Sample};
use function Helper\{helpMe};

helpMe();
$conflict = new Conflict1();
$dummy = new Dummy();
$sample = new Sample();
