<?php
$nasgor = 15000;
$ayambakar = 20000;
$nasikebuli = 25000;
$jus = 8000;
$teh = 30000;
$jeruk = 5000;
$diskonSenin = 0.2;
$diskonJumat = 0.5;

$totalHarga = 2 * $nasikebuli + $ayambakar + 2 * $nasgor;

$hariIni = date('l');
$hariIniUnix = strtotime($hariIni);

if ($hariIniUnix == strtotime("Monday")) {
  $diskon = $diskonSenin;
} elseif ($hariIniUnix == strtotime("Friday")) {
  $diskon = $diskonJumat;
} else {
  $diskon = 0;
}
$totalHargaDiskon = $totalHarga - ($totalHarga * $diskon);

echo "<br>";
echo "Total harga sebelum diskon: Rp. " .$totalHarga;
echo "<br>";
echo "Total harga setelah diskon: Rp. " .$totalHargaDiskon;