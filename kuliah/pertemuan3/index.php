<?php

// Pengulangan while
// 1. Inisialisasi / Nilai awal
// 2. Kondisi terminasi / kapan pengulangannya
// 3. Increment / decrement

$nilaiAwal = 1; //inisialisasi
while ($nilaiAwal <= 10) {
    echo "Hello world $nilaiAwal x<br>";
    $nilaiAwal = $nilaiAwal + 2; //tulis $nilaiAwal++; biar lebih simple dan hemat      yh btul
}

echo "<hr>";

//for
for ($nilaiAwal = 1; $nilaiAwal <= 10; $nilaiAwal++) {
    echo "Hello world $nilaiAwal x<br>";
}
