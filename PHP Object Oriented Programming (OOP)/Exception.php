<?php

require_once "exception/ValidationException.php";
require_once "helper/Validation.php";
require_once "data/LoginRequest.php";


$loginRequest = new LoginRequest();
$loginRequest->username = "     ";
$loginRequest->password = "     ";

try {
    validationLoginRequest($loginRequest);
    echo "VALID" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;


    var_dump($exception->getTrace());

    echo $exception->getTraceAsString();
} finally {
    echo "ERROR ATAU TIDAK, AKAN DIEKSEKUSI" . PHP_EOL;
}
