<?php

class Example
{
    public string |int|bool|array $data;
}


$example = new Example();
$example->data = "Not";
$example->data = 100;
$example->data = true;
$example->data = [];

function sampleFunction(string |array $data): string |array
{
    if (is_array($data)) {
        return ["Array"];
    } else if (is_string($data)) {
        return "string";
    }
}

var_dump(sampleFunction("Not"));
var_dump(sampleFunction([]));
