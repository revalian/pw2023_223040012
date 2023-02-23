<?php
for ($i = 10; $i >= 1; $i--) {
  echo "| ";
  for ($j = 1; $j <= 10; $j++) {
    $number = $i + ($j - 1) * 10;
    if ($number >= 1) {
      echo str_pad($number, 2, "0", STR_PAD_LEFT) . " | ";
    } else {
      echo "   | ";
    }
  }
  echo "<br>";
}
