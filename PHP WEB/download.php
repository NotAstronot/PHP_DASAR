<?php


if (isset($_GET['key']) && $_GET['key'] == 'rahasia') {
    header('Content-Disposition: attachment; filename="ray-export.png"');
    header('Content-Type: image/png');
    readfile(__DIR__ . '/file/ray-so-export.png');
    exit();
} else {
    echo "Invalid Key";
}
