<?php 

// Perulangan tanpa henti 
/*for ( ; ; ) {
    echo "Jika seperti ini tidak akan berhenti" . PHP_EOL;
}; */



// Perulangan Foor Loop (Variable di tengah )
$counter = 3;

for ( ; $counter <= 10; ) {
    echo "Ini adalah Foor Loop ke-$counter" . PHP_EOL;
    $counter++;
};


// Perulangan dengan init Statement (Variable di pinggir kiri/ urutan pertama )

for ( $counter = 1 ; $counter <= 10; ) {
    echo "Ini adalah Foor Loop ke-$counter" . PHP_EOL;
    $counter++;
};


// Perulangan dengan Post Statement (Variable di pinggir kanan/ urutan terakhir )
for ( $counter = 1 ; $counter <= 10; $counter++ ) {
    echo "Ini adalah Foor Loop ke-$counter" . PHP_EOL;
};



/*Sintak Perulangan For

for(init statement; kondisi; post statement){   // block perulangan }
Init statement akan dieksekusi hanya sekali di awal sebelum perulangan
Kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan, jika false perulangan akan berhenti
Post statement akan dieksekusi setiap kali diakhir perulangan
Init statement, Kondisi dan Post Statement tidak wajib diisi, jika Kondisi tidak diisi, berarti kondisi selalu bernilai true
*/



