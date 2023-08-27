<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";


$request = new LoginRequest();
$request->username = "Astronot";
$request->password = "Rahasia";

ValidationUtil::validateReflection($request);

class RegisterUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "Not";
$register->address = "Astronot";
$register->email = "feririski409@gmail.com";

ValidationUtil::validateReflection($register);
