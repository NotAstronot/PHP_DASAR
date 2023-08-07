<?php 

$nilai = 74;
$absen = 90;

if ($nilai >= 75 && $absen >= 85) {
    echo "Selamat Anda Lulus" . PHP_EOL;
} else {
    echo "Maaf Anda Tidak Lulus" . PHP_EOL;
}

// Else If Statment 
if ($nilai >= 80 && $absen >= 88) {
    echo "Selamat Anda Lulus" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70){
    echo "Selamat Tidak Lulus" . PHP_EOL;

};

