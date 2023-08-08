<?php


for ($counter = 1; $counter <= 100; $counter++) {
    if ($counter % 2 == 0) {
        continue;
    }
    echo "Counter : $counter" . PHP_EOL;
};



/* Break & Continue
Pada switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan case dalam switch
Sama dengan pada perulangan, break juga digunakan untuk menghentikan seluruh perulangan.
Namun berbeda dengan continue, continue digunakan untuk menghentikan perulangan saat ini, lalu melanjutkan ke perulangan selanjutnya
*/