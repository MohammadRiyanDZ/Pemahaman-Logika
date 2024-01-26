<?php
$barang = [
  ['nama' => 'Ban', 'diskon' => '10'],
  ['nama' => 'oli mesin'],
  ['nama' => 'kampas rem'],
  ['nama' => 'busi', 'diskon' => '9'],
  ['nama' => 'akumulator', 'diskon' => '7'],
];

$data = [];
$jumlahBarang = count($barang);
for ($i = 0; $i < $jumlahBarang; $i++) {
    $item = $barang[$i];
    if (isset($item['diskon'])) {
        $data[] = $item;
    }
}

echo "Data barang yang memiliki diskon: <br>";

$jumlahData = count($data);
for ($i = 0; $i < $jumlahData; $i++) {
    echo "Nama: " . $data[$i]['nama'] . ", Diskon: " . $data[$i]['diskon'] . "<br>";
}

echo "Jumlah data yang memiliki diskon: " . $jumlahData;

?>
