<?php

/*require "Lib/MyFunction.php";

echo sayHello("Not", "Astronot");
*/

include "Lib/MyFunction.php";

echo sayHello("Not", "Astronot");


/* require_once dan include_once
Function require dan include akan selalu mengambil file yang kita inginkan
Jika kita beberapa kali menggunakan require dan include file yang sama, maka file tersebut akan berkali-kali pula kita ambil
Hal ini akan menjadi masalah jika misal dalam file yang kita ambil terdapat definisi function , sehingga jika diambil berkali-kali akan menyebabkan error redeclare function
Untungnya di PHP terdapat function require_once dan include_once, function ini bisa mendeteksi jika kita sebelumnya pernah mengambil file yang sama, maka tidak akan diambil lagi

*/