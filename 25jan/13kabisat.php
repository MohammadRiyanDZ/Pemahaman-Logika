<?php

$data = [
  [
    'nama' => 'Andi',
    'tahun' => '2008',
  ],
  [
    'nama' => 'Beni',
    'tahun' => '2001',
  ],
  [
    'nama' => 'Dani',
    'tahun' => '2004',
  ],
  [
    'nama' => 'Eko',
    'tahun' => '2006',
  ],
];

$lahir_habis_4 = [];
$jumlahData = count($data);

for ($i = 0; $i < $jumlahData; $i++) {
    $item = $data[$i];
    $tahun = $item['tahun'];

    if ($tahun % 4 == 0) {
        $lahir_habis_4[] = $item;
    }
}

$jumlahLahirHabis4 = count($lahir_habis_4);

for ($i = 0; $i < $jumlahLahirHabis4; $i++) {
    echo $lahir_habis_4[$i]['nama'] . " lahir di tahun kabisat.";
    echo "<br>";
}

?>
