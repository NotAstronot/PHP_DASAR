<?php 

$nilai = 20;
$absen = 90;

if ($nilai >= 75 && $absen >= 85) {
    echo "Selamat Anda Lulus" . PHP_EOL;
} else {
    echo "Maaf Anda Tidak Lulus" . PHP_EOL;
}

// Else If Statment 
if ($nilai >= 80 && $absen >= 88) {
    echo "Nilai Anda A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70){
    echo "Nilai Anda B" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60){
    echo "Nilai Anda C" . PHP_EOL;
} else if ($nilai >= 50 && $absen >= 50){
    echo "Nilai Anda D" . PHP_EOL;
} else {
    echo "Nilai Anda E" . PHP_EOL;
};

// syntax Alternatif menggunakan titik dua (:) dan diakhiri endif
if ($nilai >= 80 && $absen >= 88) :
    echo "Nilai Anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70) :
    echo "Nilai Anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60) :
    echo "Nilai Anda C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50) :
    echo "Nilai Anda D" . PHP_EOL;
else :
    echo "Nilai Anda E" . PHP_EOL;

endif;
