<?php

$matches = [];
$result = preg_match_all("/Boy|Astro|Not/i", "Not Astronot Boy", $matches);


var_dump($result);
var_dump($matches);


// untuk me sensor kata 
$result = preg_replace("/anjing| bangsat/i", "***", "dasar lu anjing bangsat");
var_dump($result);

$split = preg_split("/[\s,-]/", "Astronot not boy, planet, mars");

var_dump($split);
