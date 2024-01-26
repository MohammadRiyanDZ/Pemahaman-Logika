<?php
$jam1 = 19;
$menit1 = 0;

$waktuFormat1 = sprintf("%02d:%02d %s", $jam1, $menit1, "pm");

echo $waktuFormat1;
echo "<br>";
echo "Waktu awal: $waktuFormat1<br>"; 

$ampmAkhir1 = "pm";
$waktuFormatAkhir1 = sprintf("07:00 %s", $ampmAkhir1);
echo "Waktu setelah konversi: $waktuFormatAkhir1";
echo "<br>";
echo "<br>";

?>








<!-- // 
$jam = 20;
$menit = 55;

$ampm = $jam >= 12 ? "pm" : "am";
$jam12 = $jam > 12 ? $jam - 12 : $jam;
$waktuFormat = sprintf("%02d:%02d %s", $jam12, $menit, $ampm);

Jam 8
echo $waktuFormat;
echo "<br>";
echo "Waktu awal: $waktuFormat<br>";
$ampmAkhir = ($ampm === "pm") ? "am" : "pm";
$waktuFormatAkhir = sprintf("%02d:%02d %s", $jam12, $menit, $ampmAkhir);
echo "Waktu setelah konversi: $waktuFormatAkhir"; -->