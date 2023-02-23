<?php
// Buat variabel nama depan dan nama belakang
$namaDepan = "Revalian";
$namaBelakang = "Ananda";

// Loop untuk menampilkan deretan angka dari 1 sampai 100
for ($a = 1; $a <= 100; $a++) {
    // Jika angka habis dibagi 3 dan 5, ganti angka dengan nama lengkap
    if ($a % 3 == 0 && $a % 5 == 0) {
        echo $namaDepan . " " . $namaBelakang . "<br>";
    }
    // Jika angka habis dibagi 3, ganti angka dengan nama depan
    elseif ($a % 3 == 0) {
        echo $namaDepan . "<br>";
    }
    // Jika angka habis dibagi 5, ganti angka dengan nama belakang
    elseif ($a % 5 == 0) {
        echo $namaBelakang . "<br>";
    }
    // Jika tidak, tampilkan angka biasa
    else {
        echo $a . "<br>";
    }
}
