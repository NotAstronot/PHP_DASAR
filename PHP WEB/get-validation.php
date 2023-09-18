<?php

if (!isset($_GET['name']) || $_GET['name'] ==  "") {
    http_response_code(400);
    echo "Name is required";
    exit();
}


$say = "Hello " . htmlspecialchars($_GET['name']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1><?= $say ?></h1>
</body>

</html>