<?php

$bil = 225;
$kemungkinan = 0;

for ($i = 5; $i <= 25; $i += 5) {
  $hasil = $bil % $i === 0 ? $bil / $i : "$bil tidak bisa dibagi habis";

  echo "$bil % $i = $hasil<br>";
  $kemungkinan += is_int($hasil) ? 1 : 0;
}

echo "Peluang bilangan $bil bisa dibagi habis adalah $kemungkinan"; 

//berapa kemungkinan bilangan 225 bisa dibagi habis dengan bilangan kelipatan 5 (5-25)
?>

