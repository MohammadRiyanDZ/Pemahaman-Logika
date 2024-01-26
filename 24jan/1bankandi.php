<?php 
    $bunga = 0.05;
    $totaltabungan = 500000;
    $tabunganandi = 850000;
    $totalandi = $tabunganandi + ($tabunganandi * $bunga);

    $total = $tabunganandi > $totaltabungan ? "Total Tabungan Andi: $totalandi" 
    : 'Tabungan Andi Tidak Mendapatkan Bunga';

    echo $total;
?>