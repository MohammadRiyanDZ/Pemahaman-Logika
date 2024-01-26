<?php
    $jumlah = 4650;
    $bulan = 10;
    function tabungan($jumlah, $bulan) {
        $total = $jumlah + ($jumlah * $bulan /100);
        return 'Rp. ' . number_format($total,0,'.','.');
    }

    tabungan(4250000,10);