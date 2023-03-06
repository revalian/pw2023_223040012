<?php
echo "<h4> Menghitung Luas Lingkaran </h4>";
function hitungLuasLingkaran($r)
{
    echo "Jari-jari = $r cm.";
    echo "</br>";

    $hasilLuas = 3.14 * $r * $r;

    echo "Luas lingkaran = $hasilLuas cm <sup>2<sup>";
}

hitungLuasLingkaran(10);

echo "<hr>";

echo "<h4> Menghitung Keliling Lingkaran </h4>";
function hitungKelilingLingkaran($r)
{
    echo "Jari-jari = $r cm.";
    echo "</br>";

    $hasilKeliling = 2 * 3.14 * $r;

    echo "Keliling Lingkaran = $hasilKeliling cm";
    echo "<hr>";
}
hitungKelilingLingkaran(20);
