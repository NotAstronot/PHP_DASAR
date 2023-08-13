<?php

namespace {

    require_once "data/Conflict.php";
    require_once "data/Helper.php";

    $conflict = new \Data\One\Conflict();
    $conflict = new \Data\Two\Conflict();


    echo Helper\APPLICATION . PHP_EOL;

    Helper\helpMe();
}
