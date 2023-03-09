<?php

// ARRAY
// Membuat array
$hari = array('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu');
$bulan = ['januari', 'februari', 'maret', 'april', 'mei'];
$myArray = ['Lian', 18, false];
$binatang = ['🐈', '🐇', '🐒', '🐨', '🐄'];

// Mencetak array
echo $hari[1]; //1 elemen menggunakan indexnya
echo "<hr>";
var_dump($hari);
echo "<hr>";
print_r($bulan);
echo "<hr>";

//Manipulasi Array
// menambah elemen di akhir menggunakan index
$hari[] = 'kamis';
print_r($hari);
echo "<hr>";

// menambahkan elemen di akhir menggunakan push
array_push($bulan, 'april');
print_r($bulan);
echo "<hr>";

// menambah elemen di awal menggunakan array_unshift
array_unshift($binatang, '🐍');
print_r($binatang);
echo "<hr>";

//menghapus elemen di akhir menggunakan array_pop
array_pop($hari);
print_r($hari);
echo "<hr>";

//menghapus elemen di awal menggunakan array_pop
array_shift($hari);
print_r($hari);
echo "<hr>";
