<?php

require_once  "Class.php";


$Not = new Person("Not", "Astronot");
$Not->name =  "Not Astronot";
$Not->sayHello("Boy");


$Boy = new Person("Not", "Astronot");
$Boy->name =  "Boy";
$Boy->sayHello("null");
