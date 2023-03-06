<?php
function urutanAngka($angka)
{

    $l = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $l . " ";
            $l++;
        }
        echo "<br>";
    }
    echo "<br>";
}

echo urutanAngka(5);
