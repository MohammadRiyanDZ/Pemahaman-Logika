<?php

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kelompok1 = [];
$kelompok2 = [];

for ($i = 0; $i < count($bil1); $i++) {
  $bilangan = $bil1[$i];

  if (in_array($bilangan, $bil2)) {
    $kelompok1[] = $bilangan;
  } else {
    $kelompok2[] = $bilangan;
  }
}

echo "Kelompok 1: " . implode(", ", $kelompok1);
echo "<br>";
echo "Kelompok 2: " . implode(", ", $kelompok2);

?>
