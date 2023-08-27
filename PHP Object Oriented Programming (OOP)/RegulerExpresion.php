<?php

$matches = [];
$result = preg_match_all("/Boy|Astro|Not/i", "Not Astronot Boy", $matches);


var_dump($result);
var_dump($matches);
