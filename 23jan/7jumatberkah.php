<?php
$nasgor = 15000;
$ayambakar = 20000;
$nasikebuli = 25000;
$jus = 8000;
$teh = 3000;
$jeruk = 5000;
$diskonSenin = 0.2;
$diskonJumat = 0.5;

$totalHarga = ($nasikebuli*2) + $ayambakar + ($nasgor*2);

$hariIni = date('l');

if ($hariIni == "Senin")  {
  $diskon = $diskonSenin;
} elseif($hariIni == "Jumat") {
  $diskon = $diskonJumat;
} else {
  $diskon = 0;
  echo "Tidak mendapatkan diskon ($diskon%)";
}

$totalHargaDiskon = $totalHarga - ($totalHarga * $diskon);

echo "<br>";
echo "Total harga sebelum diskon: Rp. " . number_format($totalHarga, 0, ',', '.');
echo "<br>";
echo "Total harga setelah diskon: Rp. " . number_format($totalHargaDiskon, 0, ',', '.');
