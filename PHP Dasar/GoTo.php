<?php

goto a;
b:
echo "Hello Guys" . PHP_EOL;

a:
echo "Hello bro" . PHP_EOL;


$counter = 1;
while (true) {
    echo "Ini adalah for While ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter >= 10) {
        goto end;
    }
};

end:
echo "End Loop";
