<?php 

// jika menggunakan  dengan if else 

$data = [
    "action" => "Push"
];

if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "Nothing";
}

echo $action .  PHP_EOL;

// jika menggunakan dengan Ternary Operator lebih singkat
$data = [];
$action = $data["action"] ?? "Nothing";
    echo $action;



















?>