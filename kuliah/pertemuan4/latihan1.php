<?php
$angka = 10;

// memeriksa apakah $angka itu bilangan ganjil
// ganjil tu bilangan dibagi 2, nyisa 1
function menentukanGanjilGenap($angka, $nama = "admin")
{

    if ($angka % 2 == 1) {
        return "$angka adalah angka ganjil";
    } else {
        return "$angka bilangan genap";
    }
}

echo menentukanGanjilGenap(10); //argument
echo "<br>";
echo menentukanGanjilGenap(5);
echo "<br>";
echo menentukanGanjilGenap(21);
echo "<br>";
echo menentukanGanjilGenap(12);
