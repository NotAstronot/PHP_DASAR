<?php 

// contoh jika gunakan IF statment
$nilai = "D";

if($nilai == "A"){
    echo "Anda lulus dengan sangat baik" . PHP_EOL;
}else if($nilai == "B" || $nilai == "C"){ 
    echo "Anda lulus " . PHP_EOL;
}else if($nilai == "D" || $nilai == "C"){ 
    echo "Anda tidak lulus" . PHP_EOL;
}else{
    echo "Anda salah jurusan" . PHP_EOL;
};

// lebih sederhana dengan switch 
switch ($nilai) {
    case "A":
        echo "Anda lulus dengan baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin Anda salah jurusan" . PHP_EOL;
    };


// syntax Alternatif menggunakan titik dua (:) dan diakhiri endif
$point = "B";
switch ($point) :
    case "A":
        echo "Anda lulus dengan baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin Anda salah jurusan" . PHP_EOL;
endswitch;
