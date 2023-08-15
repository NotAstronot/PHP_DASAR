<?php


require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Budi");
var_dump($company);

$company->programmer = new BackendProgrammer("Budi");
var_dump($company);

$company->programmer = new FrontendProgrammer("Budi");
var_dump($company);


sayHelloProgrammer(new Programmer("Budi"));
sayHelloProgrammer(new BackendProgrammer("Budi"));
sayHelloProgrammer(new FrontendProgrammer("Budi"));
