<?php

$student = [
  [
    'nama' => 'Andi',
    'nilai' => [80, 78, 82, 78, 88],
  ],
  [
    'nama' => 'Beni',
    'nilai' => [86, 70, 80, 85, 81],
  ],
  [
    'nama' => 'Dani',
    'nilai' => [83, 91, 70, 73, 81],
  ],
  [
    'nama' => 'Eko',
    'nilai' => [89, 85, 84, 86, 88],
  ],
];

$jumlah_nilai = [];

for ($i = 0; $i < count($student); $i++) {
  $item = $student[$i];
  $nama = $item['nama'];
  $nilai = $item['nilai'];

  $jumlah = array_sum($nilai);

  $jumlah_nilai[$nama] = $jumlah;
}

foreach ($jumlah_nilai as $nama => $jumlah) {
  echo "Jumlah nilai $nama adalah $jumlah";
  echo "<br>";
}

?>
