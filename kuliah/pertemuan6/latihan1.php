<?php
function cetak_bintang($angka)
{
    for ($i = 0; $i <= $angka; $i++) { // Perulangan dimulai dari 0 sampai kurang dari sama dengan 10
        for ($a = 0; $a < $i; $a++) { // Perulangan dimulai dari 0 sampai kurang dari sama dengan nilai var $i
            echo '*'; // Menampilkan string *
        }
        echo '</br>'; // Menampilkan string garis baru
    }
}

cetak_bintang(5);
